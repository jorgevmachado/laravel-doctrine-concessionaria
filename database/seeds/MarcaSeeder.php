<?php
use Illuminate\Database\Seeder;
class MarcaSeeder extends Seeder
{
    /** @var \App\Repository\MarcaRepository*/
    private $repository;

    /** @var \Doctrine\ORM\EntityManager */
    private $em;


    public function __construct(\App\Repository\MarcaRepository $repository, \Doctrine\ORM\EntityManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    public function run()
    {
         $marca1 = new \App\Entity\Marca('ABARTH');
         $marca2 = new \App\Entity\Marca('ALFA ROMEO');
         $marca3 = new \App\Entity\Marca('ASTON MARTIN');
         $marca4 = new \App\Entity\Marca('AUDI');
         $marca5 = new \App\Entity\Marca('BENTLEY');
         $marca6 = new \App\Entity\Marca('BMW');
         $marca7 = new \App\Entity\Marca('CATERHAM');
         $marca8 = new \App\Entity\Marca('CHEVROLET');
         $marca9 = new \App\Entity\Marca('CHRYSLER');
         $marca10 = new \App\Entity\Marca( 'CITROEN');
         $marca11 = new \App\Entity\Marca( 'CORVETTE');
         $marca12 = new \App\Entity\Marca( 'DACIA');
         $marca13 = new \App\Entity\Marca( 'DAEWOO');
         $marca14 = new \App\Entity\Marca( 'DAIHATSU');
         $marca15 = new \App\Entity\Marca( 'DODGE');
         $marca16 = new \App\Entity\Marca( 'DS');
         $marca17 = new \App\Entity\Marca( 'FERRARI');
         $marca18 = new \App\Entity\Marca( 'FIAT');
         $marca19 = new \App\Entity\Marca( 'FORD');
         $marca20 = new \App\Entity\Marca( 'GALLOPER');
         $marca21 = new \App\Entity\Marca( 'HONDA');
         $marca22 = new \App\Entity\Marca( 'HUMMER');
         $marca23 = new \App\Entity\Marca( 'HYUNDAI');
         $marca24 = new \App\Entity\Marca( 'JAGUAR');
         $marca25 = new \App\Entity\Marca( 'JEEP');
         $marca26 = new \App\Entity\Marca( 'KIA');
         $marca27 = new \App\Entity\Marca( 'LADA');
         $marca28 = new \App\Entity\Marca( 'LAMBORGHINI');
         $marca29 = new \App\Entity\Marca( 'LANCIA');
         $marca30 = new \App\Entity\Marca( 'LAND ROVER');
         $marca31 = new \App\Entity\Marca( 'LEXUS');
         $marca32 = new \App\Entity\Marca( 'LOTUS');
         $marca33 = new \App\Entity\Marca( 'MASERATI');
         $marca34 = new \App\Entity\Marca( 'MAYBACH');
         $marca35 = new \App\Entity\Marca( 'MAZDA');
         $marca36 = new \App\Entity\Marca( 'MERCENDES-BENZ');
         $marca37 = new \App\Entity\Marca( 'MG');
         $marca38 = new \App\Entity\Marca( 'MINI');
         $marca39 = new \App\Entity\Marca( 'MITSUBISHI');
         $marca40 = new \App\Entity\Marca( 'MORGAN');
         $marca41 = new \App\Entity\Marca( 'NISSAN');
         $marca42 = new \App\Entity\Marca( 'OPEL');
         $marca43 = new \App\Entity\Marca( 'PEUGEOT');
         $marca44 = new \App\Entity\Marca( 'PORSCHE');
         $marca45 = new \App\Entity\Marca( 'RENAULT');
         $marca46 = new \App\Entity\Marca( 'ROLLS-ROYCE');
         $marca47 = new \App\Entity\Marca( 'ROVER');
         $marca48 = new \App\Entity\Marca( 'SAAB');
         $marca49 = new \App\Entity\Marca( 'SEAT');
         $marca50 = new \App\Entity\Marca( 'SKODA');
         $marca51 = new \App\Entity\Marca( 'SMART');
         $marca52 = new \App\Entity\Marca( 'SSANG YONG');
         $marca53 = new \App\Entity\Marca( 'SUBARU');
         $marca54 = new \App\Entity\Marca( 'SUZUKI');
         $marca55 = new \App\Entity\Marca( 'TATA');
         $marca56 = new \App\Entity\Marca( 'TESLA');
         $marca57 = new \App\Entity\Marca( 'TOYOTA');
         $marca58 = new \App\Entity\Marca( 'VOLKSWAGEM');
         $marca59 = new \App\Entity\Marca( 'VOLVO');


        $this->repository->add($marca1);
        $this->repository->add($marca2);
        $this->repository->add($marca3);
        $this->repository->add($marca4);
        $this->repository->add($marca5);
        $this->repository->add($marca6);
        $this->repository->add($marca7);
        $this->repository->add($marca8);
        $this->repository->add($marca9);
        $this->repository->add($marca10);
        $this->repository->add($marca11);
        $this->repository->add($marca12);
        $this->repository->add($marca13);
        $this->repository->add($marca14);
        $this->repository->add($marca15);
        $this->repository->add($marca16);
        $this->repository->add($marca17);
        $this->repository->add($marca18);
        $this->repository->add($marca19);
        $this->repository->add($marca20);
        $this->repository->add($marca21);
        $this->repository->add($marca22);
        $this->repository->add($marca23);
        $this->repository->add($marca24);
        $this->repository->add($marca25);
        $this->repository->add($marca26);
        $this->repository->add($marca27);
        $this->repository->add($marca28);
        $this->repository->add($marca29);
        $this->repository->add($marca30);
        $this->repository->add($marca31);
        $this->repository->add($marca32);
        $this->repository->add($marca33);
        $this->repository->add($marca34);
        $this->repository->add($marca35);
        $this->repository->add($marca36);
        $this->repository->add($marca37);
        $this->repository->add($marca38);
        $this->repository->add($marca39);
        $this->repository->add($marca40);
        $this->repository->add($marca41);
        $this->repository->add($marca42);
        $this->repository->add($marca43);
        $this->repository->add($marca44);
        $this->repository->add($marca45);
        $this->repository->add($marca46);
        $this->repository->add($marca47);
        $this->repository->add($marca48);
        $this->repository->add($marca49);
        $this->repository->add($marca50);
        $this->repository->add($marca51);
        $this->repository->add($marca52);
        $this->repository->add($marca53);
        $this->repository->add($marca54);
        $this->repository->add($marca55);
        $this->repository->add($marca56);
        $this->repository->add($marca57);
        $this->repository->add($marca58);
        $this->repository->add($marca59);

        $this->em->flush();
    }


}