<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentBackupsArgumentsObject extends ArgumentsObject
{
    protected $includeDeleted;
    protected $limit;

    public function setIncludeDeleted($includeDeleted)
    {
        $this->includeDeleted = $includeDeleted;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
