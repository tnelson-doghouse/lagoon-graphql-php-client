<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProjectsByFactSearchArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(FactFilterInputInputObject $factFilterInputInputObject)
    {
        $this->input = $factFilterInputInputObject;

        return $this;
    }
}
