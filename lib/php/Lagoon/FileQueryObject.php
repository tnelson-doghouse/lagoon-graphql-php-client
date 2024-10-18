<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class FileQueryObject extends QueryObject
{
    const OBJECT_NAME = "File";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectFilename()
    {
        $this->selectField("filename");

        return $this;
    }

    public function selectDownload()
    {
        $this->selectField("download");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }
}
