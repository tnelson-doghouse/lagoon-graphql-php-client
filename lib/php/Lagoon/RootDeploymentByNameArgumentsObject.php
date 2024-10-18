<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeploymentByNameArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(DeploymentByNameInputInputObject $deploymentByNameInputInputObject)
    {
        $this->input = $deploymentByNameInputInputObject;

        return $this;
    }
}
