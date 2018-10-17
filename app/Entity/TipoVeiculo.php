<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tb_tipo_veiculo", options={"comment":"Tabela de Tipos de Veiculos."})
 * @ORM\Entity(repositoryClass="App\Repository\TipoVeiculoRepository")
 */
class TipoVeiculo
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="cd_tipo_veiculo", type="integer", options={
     *     "comment":"Código chave da tabela, PK Identity identifica o registro Único."}
     * )
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="ds_tipo_veiculo",type="string", length=100, nullable=false, options={
     *     "comment":"Descritivo do tipo de veiculo. "}
     * )
     */
    protected $descricaoTipoVeiculo;

    public function __construct(string $descricaoTipoVeiculo)
    {
        $this->descricaoTipoVeiculo = $descricaoTipoVeiculo;
    }
}