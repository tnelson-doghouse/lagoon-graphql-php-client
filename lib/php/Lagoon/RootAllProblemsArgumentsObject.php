<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAllProblemsArgumentsObject extends ArgumentsObject
{
    protected $source;
    protected $project;
    protected $environment;
    protected $envType;
    protected $identifier;
    protected $severity;

    public function setSource(array $source)
    {
        $this->source = $source;

        return $this;
    }

    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    public function setEnvType(array $envType)
    {
        $this->envType = $envType;

        return $this;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function setSeverity(array $severity)
    {
        $this->severity = $severity;

        return $this;
    }
}
