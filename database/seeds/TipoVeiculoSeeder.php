<?php

use Illuminate\Database\Seeder;

class TipoVeiculoSeeder extends Seeder
{
    /** @var \App\Repository\TipoVeiculoRepository */
    private $repository;

    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    public function __construct(
        \App\Repository\TipoVeiculoRepository $repository,
        \Doctrine\ORM\EntityManager $em
    ) {
        $this->repository = $repository;
        $this->em = $em;
    }

    public function run()
    {

            $tipoVeiculo1 = new \App\Entity\TipoVeiculo('bicicleta');
            $tipoVeiculo2 = new \App\Entity\TipoVeiculo('ciclomotor');
            $tipoVeiculo3 = new \App\Entity\TipoVeiculo('motoneta');
            $tipoVeiculo4 = new \App\Entity\TipoVeiculo('motocicleta');
            $tipoVeiculo5 = new \App\Entity\TipoVeiculo('triciclo');
            $tipoVeiculo6 = new \App\Entity\TipoVeiculo('quadriciclo');
            $tipoVeiculo7 = new \App\Entity\TipoVeiculo('automóvel');
            $tipoVeiculo8 = new \App\Entity\TipoVeiculo('microônibus');
            $tipoVeiculo9 = new \App\Entity\TipoVeiculo('ônibus');
            $tipoVeiculo10 = new \App\Entity\TipoVeiculo('bonde');
            $tipoVeiculo11 = new \App\Entity\TipoVeiculo('reboque ou semi-reboque');
            $tipoVeiculo12 = new \App\Entity\TipoVeiculo('charrete');

            $this->repository->add($tipoVeiculo1);
            $this->repository->add($tipoVeiculo2);
            $this->repository->add($tipoVeiculo3);
            $this->repository->add($tipoVeiculo4);
            $this->repository->add($tipoVeiculo5);
            $this->repository->add($tipoVeiculo6);
            $this->repository->add($tipoVeiculo7);
            $this->repository->add($tipoVeiculo8);
            $this->repository->add($tipoVeiculo9);
            $this->repository->add($tipoVeiculo10);
            $this->repository->add($tipoVeiculo11);
            $this->repository->add($tipoVeiculo12);

            $this->em->flush();
    }
}