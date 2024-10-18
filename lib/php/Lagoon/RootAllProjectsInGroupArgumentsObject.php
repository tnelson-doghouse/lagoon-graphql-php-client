<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAllProjectsInGroupArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(GroupInputInputObject $groupInputInputObject)
    {
        $this->input = $groupInputInputObject;

        return $this;
    }
}
