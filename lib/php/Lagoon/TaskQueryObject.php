<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class TaskQueryObject extends QueryObject
{
    const OBJECT_NAME = "Task";

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

    public function selectTaskName()
    {
        $this->selectField("taskName");

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

    public function selectEnvironment(TaskEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
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

    public function selectCommand()
    {
        $this->selectField("command");

        return $this;
    }

    public function selectDeployTokenInjection()
    {
        $this->selectField("deployTokenInjection");

        return $this;
    }

    public function selectProjectKeyInjection()
    {
        $this->selectField("projectKeyInjection");

        return $this;
    }

    public function selectAdminOnlyView()
    {
        $this->selectField("adminOnlyView");

        return $this;
    }

    public function selectRemoteId()
    {
        $this->selectField("remoteId");

        return $this;
    }

    public function selectLogs()
    {
        $this->selectField("logs");

        return $this;
    }

    public function selectFiles(TaskFilesArgumentsObject $argsObject = null)
    {
        $object = new FileQueryObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
