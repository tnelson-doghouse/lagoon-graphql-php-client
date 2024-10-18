<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeploymentsByFilterArgumentsObject extends ArgumentsObject
{
    protected $openshifts;
    protected $deploymentStatus;

    public function setOpenshifts(array $openshifts)
    {
        $this->openshifts = $openshifts;

        return $this;
    }

    public function setDeploymentStatus(array $deploymentStatus)
    {
        $this->deploymentStatus = $deploymentStatus;

        return $this;
    }
}
