<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tb_veiculo", options={"comment":"Tabela de veiculos."})
 * @ORM\Entity(repositoryClass="App\Repository\VeiculoRepository")
 */
class Veiculo
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="cd_veiculo", type="integer", options={
     *     "comment":"Codigo chave da tabela, PK Identity identifica o registro unico"}
     * )
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Categoria", cascade={"persist"})
     * @ORM\JoinColumn(name="cd_categoria", referencedColumnName="cd_categoria")
     */
    protected $categoria;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Marca", cascade={"persist"})
     * @ORM\JoinColumn(name="cd_marca", referencedColumnName="cd_marca")
     */
    protected $marca;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="TipoVeiculo", cascade={"persist"})
     * @ORM\JoinColumn(name="cd_tipo_veiculo", referencedColumnName="cd_tipo_veiculo")
     */
    protected $tipoVeiculo;

    /**
     * @var string
     * @ORM\Column(
     *     name="no_modelo",
     *     nullable=false,
     *     type="string",
     *     length=100,
     *     options={"comment":"Modelo do veiculo"}
     * )
     */
    protected $modelo;

    /**
     * @var integer
     * @ORM\Column(
     *     name="nr_ano",
     *     nullable=false,
     *     type="integer",
     *     length=4,
     *     options={"comment":"Ano do Veiculo"}
     * )
     */
    protected $ano;

    /**
     * @var float
     * @ORM\Column(
     *     name="vl_preco",
     *     nullable=false,
     *     type="float",
     *     precision=2,
     *     options={"comment":"Valor do veiculo"}
     * )
     */
    protected $preco;

    /**
     * @var string
     * @ORM\Column(
     *     name="fg_ativo",
     *     nullable=false,
     *     type="string",
     *     length=1,
     *     options={"comment":"Inticativo de que o registro está ativo ou não (1 - ativo, 0 - inativo).", "default":"1"}
     * )
     */
    private $ativo;

    /**
     * Veiculo constructor.
     * @param Categoria $categoria
     * @param Marca $marca
     * @param TipoVeiculo $tipoVeiculo
     * @param string $modelo
     * @param int $ano
     * @param float $preco
     * @param string $ativo
     */
    public function __construct(
        Categoria $categoria,
        Marca $marca,
        TipoVeiculo $tipoVeiculo,
        string $modelo,
        int $ano,
        float $preco,
        string $ativo = null
    ){
        $this->categoria = $categoria;
        $this->marca = $marca;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->preco = $preco;
        $this->ativo = (is_null($ativo)) ? '1' : $ativo;
    }
}