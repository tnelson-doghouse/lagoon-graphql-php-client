<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootEnvironmentByNameArgumentsObject extends ArgumentsObject
{
    protected $name;
    protected $project;
    protected $includeDeleted;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    public function setIncludeDeleted($includeDeleted)
    {
        $this->includeDeleted = $includeDeleted;

        return $this;
    }
}
