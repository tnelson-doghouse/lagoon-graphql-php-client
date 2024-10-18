<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class FactReferenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "FactReference";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectFid()
    {
        $this->selectField("fid");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
