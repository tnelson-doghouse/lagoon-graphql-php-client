<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class ProblemQueryObject extends QueryObject
{
    const OBJECT_NAME = "Problem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectEnvironment(ProblemEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSeverity()
    {
        $this->selectField("severity");

        return $this;
    }

    public function selectSeverityScore()
    {
        $this->selectField("severityScore");

        return $this;
    }

    public function selectIdentifier()
    {
        $this->selectField("identifier");

        return $this;
    }

    public function selectService()
    {
        $this->selectField("service");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectAssociatedPackage()
    {
        $this->selectField("associatedPackage");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectLinks()
    {
        $this->selectField("links");

        return $this;
    }

    public function selectVersion()
    {
        $this->selectField("version");

        return $this;
    }

    public function selectFixedVersion()
    {
        $this->selectField("fixedVersion");

        return $this;
    }

    public function selectData()
    {
        $this->selectField("data");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectDeleted()
    {
        $this->selectField("deleted");

        return $this;
    }
}
