<?php

namespace App\DataFixtures;

use App\Entity\Pays;
use App\Entity\Ville;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // France 

        $france = new Pays;
        $france->setNom('France');

        $paris = new Ville;
        $paris->setNom('Paris');
        $paris->setPays($france);

        $marseille = new Ville;
        $marseille->setNom('Marseille');
        $marseille->setPays($france);

        $lyon = new Ville;
        $lyon->setNom('Lyon');
        $lyon->setPays($france);

        $bordeaux = new Ville;
        $bordeaux->setNom('Bordeaux');
        $bordeaux->setPays($france);

        $toulouse = new Ville;
        $toulouse->setNom('Toulouse');
        $toulouse->setPays($france);

        $nice = new Ville;
        $nice->setNom('Nice');
        $nice->setPays($france);

        $manager->persist($france);
        $manager->persist($paris);
        $manager->persist($marseille);
        $manager->persist($lyon);
        $manager->persist($bordeaux);
        $manager->persist($toulouse);
        $manager->persist($nice);

        // Chine

        $chine = new Pays;
        $chine->setNom('Chine');

        $pekin = new Ville;
        $pekin->setNom('Pékin');
        $pekin->setPays($chine);

        $shanghai = new Ville;
        $shanghai->setNom('Shanghai');
        $shanghai->setPays($chine);

        $canton = new Ville;
        $canton->setNom('Canton');
        $canton->setPays($chine);

        $hongkong = new Ville;
        $hongkong->setNom('Hong Kong');
        $hongkong->setPays($chine);

        $shenzhen = new Ville;
        $shenzhen->setNom('Shenzhen');
        $shenzhen->setPays($chine);

        $guangzhou = new Ville;
        $guangzhou->setNom('Guangzhou');
        $guangzhou->setPays($chine);

        $manager->persist($chine);
        $manager->persist($pekin);
        $manager->persist($shanghai);
        $manager->persist($canton);
        $manager->persist($hongkong);
        $manager->persist($shenzhen);
        $manager->persist($guangzhou);

        // Japon

        $japon = new Pays;
        $japon->setNom('Japon');

        $tokyo = new Ville;
        $tokyo->setNom('Tokyo');
        $tokyo->setPays($japon);

        $osaka = new Ville;
        $osaka->setNom('Osaka');
        $osaka->setPays($japon);

        $kyoto = new Ville;
        $kyoto->setNom('Kyoto');
        $kyoto->setPays($japon);

        $yokohama = new Ville;
        $yokohama->setNom('Yokohama');
        $yokohama->setPays($japon);

        $nagoya = new Ville;
        $nagoya->setNom('Nagoya');
        $nagoya->setPays($japon);

        $hiroshima = new Ville;
        $hiroshima->setNom('Hiroshima');
        $hiroshima->setPays($japon);

        $manager->persist($japon);
        $manager->persist($tokyo);
        $manager->persist($osaka);
        $manager->persist($kyoto);
        $manager->persist($yokohama);
        $manager->persist($nagoya);
        $manager->persist($hiroshima);

        // Irlande

        $irlande = new Pays;
        $irlande->setNom('Irlande');

        $dublin = new Ville;
        $dublin->setNom('Dublin');
        $dublin->setPays($irlande);

        $cork = new Ville;
        $cork->setNom('Cork');
        $cork->setPays($irlande);

        $limerick = new Ville;
        $limerick->setNom('Limerick');
        $limerick->setPays($irlande);

        $galway = new Ville;
        $galway->setNom('Galway');
        $galway->setPays($irlande);

        $belfast = new Ville;
        $belfast->setNom('Belfast');
        $belfast->setPays($irlande);

        $waterford = new Ville;
        $waterford->setNom('Waterford');
        $waterford->setPays($irlande);

        $manager->persist($irlande);
        $manager->persist($dublin);
        $manager->persist($cork);
        $manager->persist($limerick);
        $manager->persist($galway);
        $manager->persist($belfast);
        $manager->persist($waterford);

        // États-Unis

        $usa = new Pays;
        $usa->setNom('États-Unis');

        $newYork = new Ville;
        $newYork->setNom('New York');
        $newYork->setPays($usa);

        $losAngeles = new Ville;
        $losAngeles->setNom('Los Angeles');
        $losAngeles->setPays($usa);

        $chicago = new Ville;
        $chicago->setNom('Chicago');
        $chicago->setPays($usa);

        $houston = new Ville;
        $houston->setNom('Houston');
        $houston->setPays($usa);

        $miami = new Ville;
        $miami->setNom('Miami');
        $miami->setPays($usa);

        $lasVegas = new Ville;
        $lasVegas->setNom('Las Vegas');
        $lasVegas->setPays($usa);

        $manager->persist($usa);
        $manager->persist($newYork);
        $manager->persist($losAngeles);
        $manager->persist($chicago);
        $manager->persist($houston);
        $manager->persist($miami);
        $manager->persist($lasVegas);

        // Groenland

        $groenland = new Pays;
        $groenland->setNom('Groenland');

        $nuuk = new Ville;
        $nuuk->setNom('Nuuk');
        $nuuk->setPays($groenland);

        $sisimiut = new Ville;
        $sisimiut->setNom('Sisimiut');
        $sisimiut->setPays($groenland);

        $qeqertarsuaq = new Ville;
        $qeqertarsuaq->setNom('Qeqertarsuaq');
        $qeqertarsuaq->setPays($groenland);

        $ilulissat = new Ville;
        $ilulissat->setNom('Ilulissat');
        $ilulissat->setPays($groenland);

        $aasiaat = new Ville;
        $aasiaat->setNom('Aasiaat');
        $aasiaat->setPays($groenland);

        $kangerlussuaq = new Ville;
        $kangerlussuaq->setNom('Kangerlussuaq');
        $kangerlussuaq->setPays($groenland);

        $manager->persist($groenland);
        $manager->persist($nuuk);
        $manager->persist($sisimiut);
        $manager->persist($qeqertarsuaq);
        $manager->persist($ilulissat);
        $manager->persist($aasiaat);
        $manager->persist($kangerlussuaq);



        $manager->flush();
    }
}
