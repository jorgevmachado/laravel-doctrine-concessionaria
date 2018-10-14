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
        $categoria1 = \App\Entity\Categoria::createCategoria(
            'ENTRADA'
        );
        $categoria2 = \App\Entity\Categoria::createCategoria(
            'HATCH PEQUENO'
        );
        $categoria3 = \App\Entity\Categoria::createCategoria(
            'HATCH MÉDIO'
        );
        $categoria4 = \App\Entity\Categoria::createCategoria(
            'SEDANS PEQUENO'
        );
        $categoria5 = \App\Entity\Categoria::createCategoria(
            'SEDANS COMPACTOS'
        );
        $categoria6 = \App\Entity\Categoria::createCategoria(
            'SEDANS MÉDIO'
        );
        $categoria7 = \App\Entity\Categoria::createCategoria(
            'SEDANS GRANDES'
        );
        $categoria8 = \App\Entity\Categoria::createCategoria(
            'SUV'
        );
        $categoria9 = \App\Entity\Categoria::createCategoria(
            'SW MÉDIO'
        );
        $categoria10 = \App\Entity\Categoria::createCategoria(
            'SW GRANDE'
        );
        $categoria11 = \App\Entity\Categoria::createCategoria(
            'MONOCAB'
        );
        $categoria12 = \App\Entity\Categoria::createCategoria(
            'GRANCAB'
        );
        $categoria13 = \App\Entity\Categoria::createCategoria(
            'SPORTS'
        );
        $categoria14 = \App\Entity\Categoria::createCategoria(
            'PICK-UPS PEQUENOS'
        );
        $categoria15 = \App\Entity\Categoria::createCategoria(
            'PICK-UPS GRANDES'
        );
        $categoria16 = \App\Entity\Categoria::createCategoria(
            'FURGÕES'
        );
        $categoria17 = \App\Entity\Categoria::createCategoria(
            'FURGÕES PEQUENOS'
        );

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