<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class FactFilterInputInputObject extends InputObject
{
    protected $filterConnective;
    protected $filters;
    protected $skip;
    protected $take;
    protected $orderBy;

    public function setFilterConnective($filterConnective)
    {
        $this->filterConnective = $filterConnective;

        return $this;
    }

    public function setFilters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    public function setSkip($skip)
    {
        $this->skip = $skip;

        return $this;
    }

    public function setTake($take)
    {
        $this->take = $take;

        return $this;
    }

    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }
}
