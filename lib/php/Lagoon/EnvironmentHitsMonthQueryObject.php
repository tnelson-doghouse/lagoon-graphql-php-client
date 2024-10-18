<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentHitsMonthQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvironmentHitsMonth";

    public function selectTotal()
    {
        $this->selectField("total");

        return $this;
    }
}
