<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootEnvironmentByKubernetesNamespaceNameArgumentsObject extends ArgumentsObject
{
    protected $kubernetesNamespaceName;

    public function setKubernetesNamespaceName($kubernetesNamespaceName)
    {
        $this->kubernetesNamespaceName = $kubernetesNamespaceName;

        return $this;
    }
}
