<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class WorkflowQueryObject extends QueryObject
{
    const OBJECT_NAME = "Workflow";

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

    public function selectEvent()
    {
        $this->selectField("event");

        return $this;
    }

    public function selectProject()
    {
        $this->selectField("project");

        return $this;
    }

    public function selectAdvancedTaskDefinition(WorkflowAdvancedTaskDefinitionArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionUnionObject("advancedTaskDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
