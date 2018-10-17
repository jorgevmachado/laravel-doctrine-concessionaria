<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /** @var \App\Repository\CategoriaRepository */
    private $repository;

    /** @var \Doctrine\ORM\EntityManager */
    private $em;
    
    public function __construct(
        \App\Repository\CategoriaRepository $repository,
        \Doctrine\ORM\EntityManager $em
    ) {
        $this->repository = $repository;
        $this->em = $em;
    }

    public function run()
    {
        $categoria1 = new \App\Entity\Categoria('ENTRADA');
        $categoria2 = new  \App\Entity\Categoria('HATCH PEQUENO');
        $categoria3 = new \App\Entity\Categoria('HATCH MÉDIO');
        $categoria4 = new \App\Entity\Categoria('SEDANS PEQUENO');
        $categoria5 = new \App\Entity\Categoria('SEDANS COMPACTOS');
        $categoria6 = new \App\Entity\Categoria('SEDANS MÉDIO');
        $categoria7 = new \App\Entity\Categoria('SEDANS GRANDES');
        $categoria8 = new \App\Entity\Categoria('SUV');
        $categoria9 = new \App\Entity\Categoria('SW MÉDIO');
        $categoria10 = new \App\Entity\Categoria('SW GRANDE');
        $categoria11 = new \App\Entity\Categoria('MONOCAB');
        $categoria12 = new \App\Entity\Categoria('GRANCAB');
        $categoria13 = new \App\Entity\Categoria('SPORTS');
        $categoria14 = new \App\Entity\Categoria('PICK-UPS PEQUENOS');
        $categoria15 = new \App\Entity\Categoria('PICK-UPS GRANDES');
        $categoria16 = new \App\Entity\Categoria('FURGÕES');
        $categoria17 = new \App\Entity\Categoria('FURGÕES PEQUENOS');

        $this->repository->add($categoria1);
        $this->repository->add($categoria2);
        $this->repository->add($categoria3);
        $this->repository->add($categoria4);
        $this->repository->add($categoria5);
        $this->repository->add($categoria6);
        $this->repository->add($categoria7);
        $this->repository->add($categoria8);
        $this->repository->add($categoria9);
        $this->repository->add($categoria10);
        $this->repository->add($categoria11);
        $this->repository->add($categoria12);
        $this->repository->add($categoria13);
        $this->repository->add($categoria14);
        $this->repository->add($categoria15);
        $this->repository->add($categoria16);
        $this->repository->add($categoria17);
        $this->em->flush();
    }


}