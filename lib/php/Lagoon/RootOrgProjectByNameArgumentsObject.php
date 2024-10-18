<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootOrgProjectByNameArgumentsObject extends ArgumentsObject
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
