<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tb_marca", options={"comment":"Tabela de marcas de veiculos."})
 * @ORM\Entity(repositoryClass="App\Repository\MarcaRepository")
 */
class Marca
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="cd_marca", type="integer", options={
     *     "comment":"Codigo chave da tabela, PK Identity identifica o registro unico"}
     * )
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="ds_marca_veiculo", type="string", length=100, nullable=false, options={
     *    "comment":"Descritivo da categoria de veiculo. "
     * })
     */
    protected $descricaoMarca;

    public function __construct(string $descricaoMarca)
    {
        $this->descricaoMarca = $descricaoMarca;
    }
}