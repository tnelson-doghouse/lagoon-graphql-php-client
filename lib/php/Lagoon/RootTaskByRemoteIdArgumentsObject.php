<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootTaskByRemoteIdArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
