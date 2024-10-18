<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvironmentService";

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

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectContainers(EnvironmentServiceContainersArgumentsObject $argsObject = null)
    {
        $object = new ServiceContainerQueryObject("containers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectUpdated()
    {
        $this->selectField("updated");

        return $this;
    }
}
