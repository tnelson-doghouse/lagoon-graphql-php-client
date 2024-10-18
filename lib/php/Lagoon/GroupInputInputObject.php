<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class GroupInputInputObject extends InputObject
{
    protected $id;
    protected $name;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
