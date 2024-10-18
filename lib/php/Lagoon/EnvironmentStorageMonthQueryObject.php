<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentStorageMonthQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvironmentStorageMonth";

    public function selectMonth()
    {
        $this->selectField("month");

        return $this;
    }

    /**
     * @deprecated The value of this is kibibytes, use kibUsed instead. This will be removed in a future release.
     */
    public function selectBytesUsed()
    {
        $this->selectField("bytesUsed");

        return $this;
    }

    public function selectKibUsed()
    {
        $this->selectField("kibUsed");

        return $this;
    }
}
