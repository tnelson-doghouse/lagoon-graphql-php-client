<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentDeploymentsArgumentsObject extends ArgumentsObject
{
    protected $name;
    protected $limit;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
