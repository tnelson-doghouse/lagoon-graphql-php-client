<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class FactQueryObject extends QueryObject
{
    const OBJECT_NAME = "Fact";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectEnvironment(FactEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectKeyFact()
    {
        $this->selectField("keyFact");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectCategory()
    {
        $this->selectField("category");

        return $this;
    }

    public function selectReferences(FactReferencesArgumentsObject $argsObject = null)
    {
        $object = new FactReferenceQueryObject("references");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectService()
    {
        $this->selectField("service");

        return $this;
    }
}
