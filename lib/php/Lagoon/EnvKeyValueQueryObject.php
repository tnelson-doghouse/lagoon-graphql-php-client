<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvKeyValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvKeyValue";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectScope()
    {
        $this->selectField("scope");

        return $this;
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
}
