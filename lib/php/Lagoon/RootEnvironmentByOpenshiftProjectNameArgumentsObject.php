<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootEnvironmentByOpenshiftProjectNameArgumentsObject extends ArgumentsObject
{
    protected $openshiftProjectName;

    public function setOpenshiftProjectName($openshiftProjectName)
    {
        $this->openshiftProjectName = $openshiftProjectName;

        return $this;
    }
}
