<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootWorkflowsForEnvironmentArgumentsObject extends ArgumentsObject
{
    protected $environment;

    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }
}
