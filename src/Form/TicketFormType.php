<?php

namespace App\Form;

use App\Entity\Ville;
use App\Entity\Pays;
use App\Entity\Ticket;
use App\Repository\VilleRepository;
use App\Repository\PaysRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketFormType extends AbstractType
{
    public function __construct(private VilleRepository $villeRepository){}

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('message', null, [
                'attr' => ['rows' => 5]
            ])
            ->add('pays', EntityType::class, [
                'class' => Pays::class,
                'choice_label' => 'nom',
                'placeholder' => 'Choisssez un pays',
                'query_builder' => fn (PaysRepository $paysRepository) =>
                $paysRepository->findAllOrderedByAscNameQueryBuilder()
            ]);

        $formModifier = function (FormInterface $form, Pays $pays = null) {
            $villes = $pays === null ? [] : $this->villeRepository->findByPaysOrderedByAscName($pays);

            $form->add('ville', EntityType::class, [
                'class' => Ville::class,
                'choice_label' => 'nom',
                'disabled' => $pays === null,
                'placeholder' => 'Choisissez une ville',
                'choices' => $villes
            ]);
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();

                $formModifier($event->getForm(), $data->getPays());
            }
        );

        $builder->get('pays')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $pays = $event->getForm()->getData();

                $formModifier($event->getForm()->getParent(), $pays);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}