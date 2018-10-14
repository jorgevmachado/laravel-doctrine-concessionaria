<?php

namespace App\RepositoryFilter;

use Doctrine\ORM\QueryBuilder;

class AbstractQueryFilter
{
    /** @var QueryBuilder */
    protected $builder;

    /** @var string */
    protected $rootAlias;

    /** @var string[] */
    protected $fields = [];

    /**
     * AbstractQueryFilter constructor.
     * @param string[] $fields
     */
    public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    public function apply(QueryBuilder $builder)
    {
        $this->builder = $builder;
        $this->rootAlias = current($builder->getRootAliases());
        foreach ($this->getFields() as $field => $value){
            $method = camel_case($field);
            if (method_exists($this, $method)) {
                call_user_func_array([$this, $method], (array)$value);
            }
        }
    }

    public function __invoke(QueryBuilder $builder)
    {
        $this->apply($builder);
    }

    /** @return string[]*/
    public function getFields(): array
    {
        return $this->fields;
    }

    public function addFields($fields): self
    {
        $this->fields[] = $fields;
        return $this;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }
}