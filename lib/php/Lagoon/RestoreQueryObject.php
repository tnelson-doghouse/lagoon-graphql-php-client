<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class RestoreQueryObject extends QueryObject
{
    const OBJECT_NAME = "Restore";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectBackupId()
    {
        $this->selectField("backupId");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectRestoreLocation()
    {
        $this->selectField("restoreLocation");

        return $this;
    }

    public function selectRestoreSize()
    {
        $this->selectField("restoreSize");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }
}
