<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootUserCanSshToEnvironmentArgumentsObject extends ArgumentsObject
{
    protected $openshiftProjectName;
    protected $kubernetesNamespaceName;

    public function setOpenshiftProjectName($openshiftProjectName)
    {
        $this->openshiftProjectName = $openshiftProjectName;

        return $this;
    }

    public function setKubernetesNamespaceName($kubernetesNamespaceName)
    {
        $this->kubernetesNamespaceName = $kubernetesNamespaceName;

        return $this;
    }
}
