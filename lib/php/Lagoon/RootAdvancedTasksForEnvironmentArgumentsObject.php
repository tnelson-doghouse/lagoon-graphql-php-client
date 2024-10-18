<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAdvancedTasksForEnvironmentArgumentsObject extends ArgumentsObject
{
    protected $environment;

    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }
}
