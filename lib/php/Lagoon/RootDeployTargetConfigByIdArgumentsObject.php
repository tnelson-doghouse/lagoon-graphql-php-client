<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeployTargetConfigByIdArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
