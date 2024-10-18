<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class SshKeyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SshKey";

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

    public function selectKeyValue()
    {
        $this->selectField("keyValue");

        return $this;
    }

    public function selectKeyType()
    {
        $this->selectField("keyType");

        return $this;
    }

    public function selectKeyFingerprint()
    {
        $this->selectField("keyFingerprint");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectLastUsed()
    {
        $this->selectField("lastUsed");

        return $this;
    }
}
