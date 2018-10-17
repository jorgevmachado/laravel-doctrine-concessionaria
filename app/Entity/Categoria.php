<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tb_categoria", options={"comment":"Tabela de Categorias de Veiculos."})
 * @ORM\Entity(repositoryClass="App\Repository\CategoriaRepository")
 */
class Categoria
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="cd_categoria", type="integer", options={
     *     "comment":"Código chave da tabela, PK Identity identifica o registro Único."}
     * )
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="ds_categoria_veiculo",type="string", length=100, nullable=false, options={
     *     "comment":"Descritivo da categoria de veiculo. "}
     * )
     */
    protected $descricaoCategoria;

    public function __construct(string $descricaoCategoria)
    {
        $this->descricaoCategoria = $descricaoCategoria;
    }
}