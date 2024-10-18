<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class AdvancedTaskDefinitionArgumentQueryObject extends QueryObject
{
    const OBJECT_NAME = "AdvancedTaskDefinitionArgument";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectDefaultValue()
    {
        $this->selectField("defaultValue");

        return $this;
    }

    public function selectOptional()
    {
        $this->selectField("optional");

        return $this;
    }

    public function selectRange()
    {
        $this->selectField("range");

        return $this;
    }

    public function selectAdvancedTaskDefinition(AdvancedTaskDefinitionArgumentAdvancedTaskDefinitionArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionUnionObject("advancedTaskDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
