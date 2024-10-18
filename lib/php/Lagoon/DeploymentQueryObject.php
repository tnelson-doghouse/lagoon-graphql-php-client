<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class DeploymentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Deployment";

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

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectStarted()
    {
        $this->selectField("started");

        return $this;
    }

    public function selectCompleted()
    {
        $this->selectField("completed");

        return $this;
    }

    public function selectEnvironment(DeploymentEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRemoteId()
    {
        $this->selectField("remoteId");

        return $this;
    }

    public function selectBuildLog()
    {
        $this->selectField("buildLog");

        return $this;
    }

    public function selectUiLink()
    {
        $this->selectField("uiLink");

        return $this;
    }

    public function selectPriority()
    {
        $this->selectField("priority");

        return $this;
    }

    public function selectBulkId()
    {
        $this->selectField("bulkId");

        return $this;
    }

    public function selectBulkName()
    {
        $this->selectField("bulkName");

        return $this;
    }

    public function selectBuildStep()
    {
        $this->selectField("buildStep");

        return $this;
    }

    public function selectSourceUser()
    {
        $this->selectField("sourceUser");

        return $this;
    }

    public function selectSourceType()
    {
        $this->selectField("sourceType");

        return $this;
    }
}
