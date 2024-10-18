<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ProjectEnvironmentsArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $includeDeleted;
    protected $factFilter;

    public function setType($envType)
    {
        $this->type = new RawObject($envType);

        return $this;
    }

    public function setIncludeDeleted($includeDeleted)
    {
        $this->includeDeleted = $includeDeleted;

        return $this;
    }

    public function setFactFilter(FactFilterInputInputObject $factFilterInputInputObject)
    {
        $this->factFilter = $factFilterInputInputObject;

        return $this;
    }
}
