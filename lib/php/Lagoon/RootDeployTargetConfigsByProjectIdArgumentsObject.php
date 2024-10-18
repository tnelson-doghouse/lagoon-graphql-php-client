<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeployTargetConfigsByProjectIdArgumentsObject extends ArgumentsObject
{
    protected $project;

    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }
}
