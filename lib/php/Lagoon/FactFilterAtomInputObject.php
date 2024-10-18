<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class FactFilterAtomInputObject extends InputObject
{
    protected $lhsTarget;
    protected $name;
    protected $contains;

    public function setLhsTarget($lhsTarget)
    {
        $this->lhsTarget = $lhsTarget;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setContains($contains)
    {
        $this->contains = $contains;

        return $this;
    }
}
