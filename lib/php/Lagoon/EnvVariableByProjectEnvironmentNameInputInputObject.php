<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class EnvVariableByProjectEnvironmentNameInputInputObject extends InputObject
{
    protected $environment;
    protected $project;

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
}
