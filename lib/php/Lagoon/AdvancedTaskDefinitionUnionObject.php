<?php

namespace Lagoon;

use GraphQL\SchemaObject\UnionObject;

class AdvancedTaskDefinitionUnionObject extends UnionObject
{
    public function onAdvancedTaskDefinitionImage()
    {
        $object = new AdvancedTaskDefinitionImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAdvancedTaskDefinitionCommand()
    {
        $object = new AdvancedTaskDefinitionCommandQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
