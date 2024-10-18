<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class DeploymentByNameInputInputObject extends InputObject
{
    protected $environment;
    protected $project;
    protected $name;

    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
