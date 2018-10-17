<?php

use Illuminate\Database\Seeder;

class VeiculoSeeder extends Seeder
{
    /** @var \App\Repository\VeiculoRepository*/
    private $repository;

    /** @var \Doctrine\ORM\EntityManager */
    private $em;


    public function __construct(\App\Repository\VeiculoRepository $repository, \Doctrine\ORM\EntityManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    public function run()
    {
        //FORD
        $categoria1 = $this->em->getReference(\App\Entity\Categoria::class,6);
        $marca1 = $this->em->getReference(\App\Entity\Marca::class,19);
        $tipoVeiculo1 = $this->em->getReference(\App\Entity\TipoVeiculo::class,7);

        //HONDA
        $categoria2 = $this->em->getReference(\App\Entity\Categoria::class,6);
        $marca2 = $this->em->getReference(\App\Entity\Marca::class,21);
        $tipoVeiculo2 = $this->em->getReference(\App\Entity\TipoVeiculo::class,7);

        //TOYOTA
        $categoria3 = $this->em->getReference(\App\Entity\Categoria::class,6);
        $marca3 = $this->em->getReference(\App\Entity\Marca::class,57);
        $tipoVeiculo3 = $this->em->getReference(\App\Entity\TipoVeiculo::class,7);

        $veiculo1 = new \App\Entity\Veiculo(
            $categoria1,
            $marca1,
            $tipoVeiculo1,
            'FUSION',
            2018,
            '110.990'
        );

        $veiculo2 = new \App\Entity\Veiculo(
            $categoria2,
            $marca2,
            $tipoVeiculo2,
            'CIVIC',
            2018,
            '115.900'
        );

        $veiculo3 = new \App\Entity\Veiculo(
            $categoria3,
            $marca3,
            $tipoVeiculo3,
            'COROLLA',
            2018,
            '110.500'
        );

        $this->repository->add($veiculo1);
        $this->repository->add($veiculo2);
        $this->repository->add($veiculo3);

        $this->em->flush();
    }


}