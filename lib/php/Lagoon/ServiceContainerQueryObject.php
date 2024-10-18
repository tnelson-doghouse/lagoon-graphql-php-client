<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class ServiceContainerQueryObject extends QueryObject
{
    const OBJECT_NAME = "ServiceContainer";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
