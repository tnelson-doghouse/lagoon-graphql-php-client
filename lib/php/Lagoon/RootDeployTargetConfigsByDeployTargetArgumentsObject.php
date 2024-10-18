<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeployTargetConfigsByDeployTargetArgumentsObject extends ArgumentsObject
{
    protected $deployTarget;

    public function setDeployTarget($deployTarget)
    {
        $this->deployTarget = $deployTarget;

        return $this;
    }
}
