<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class BackupQueryObject extends QueryObject
{
    const OBJECT_NAME = "Backup";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectEnvironment(BackupEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectBackupId()
    {
        $this->selectField("backupId");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    /**
     * @deprecated This will be removed in a future release.
     */
    public function selectDeleted()
    {
        $this->selectField("deleted");

        return $this;
    }

    public function selectRestore(BackupRestoreArgumentsObject $argsObject = null)
    {
        $object = new RestoreQueryObject("restore");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
