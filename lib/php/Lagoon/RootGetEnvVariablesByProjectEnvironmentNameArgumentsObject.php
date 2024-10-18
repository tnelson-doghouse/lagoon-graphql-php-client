<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootGetEnvVariablesByProjectEnvironmentNameArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(EnvVariableByProjectEnvironmentNameInputInputObject $envVariableByProjectEnvironmentNameInputInputObject)
    {
        $this->input = $envVariableByProjectEnvironmentNameInputInputObject;

        return $this;
    }
}
