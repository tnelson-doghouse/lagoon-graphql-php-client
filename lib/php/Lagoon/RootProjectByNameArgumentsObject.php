<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProjectByNameArgumentsObject extends ArgumentsObject
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
