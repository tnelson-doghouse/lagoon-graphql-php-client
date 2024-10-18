<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentStorageQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvironmentStorage";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectEnvironment(EnvironmentStorageEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPersistentStorageClaim()
    {
        $this->selectField("persistentStorageClaim");

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

    public function selectUpdated()
    {
        $this->selectField("updated");

        return $this;
    }
}
