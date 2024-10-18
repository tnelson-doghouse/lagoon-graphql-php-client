<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class InsightQueryObject extends QueryObject
{
    const OBJECT_NAME = "Insight";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectService()
    {
        $this->selectField("service");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectFileId()
    {
        $this->selectField("fileId");

        return $this;
    }

    public function selectData()
    {
        $this->selectField("data");

        return $this;
    }

    public function selectFile()
    {
        $this->selectField("file");

        return $this;
    }

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectEnvironment(InsightEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDownloadUrl()
    {
        $this->selectField("downloadUrl");

        return $this;
    }
}
