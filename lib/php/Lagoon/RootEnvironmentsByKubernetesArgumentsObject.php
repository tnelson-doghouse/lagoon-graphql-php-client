<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootEnvironmentsByKubernetesArgumentsObject extends ArgumentsObject
{
    protected $kubernetes;
    protected $order;
    protected $createdAfter;
    protected $type;

    public function setKubernetes(KubernetesInputInputObject $kubernetesInputInputObject)
    {
        $this->kubernetes = $kubernetesInputInputObject;

        return $this;
    }

    public function setOrder($envOrderType)
    {
        $this->order = new RawObject($envOrderType);

        return $this;
    }

    public function setCreatedAfter($createdAfter)
    {
        $this->createdAfter = $createdAfter;

        return $this;
    }

    public function setType($envType)
    {
        $this->type = new RawObject($envType);

        return $this;
    }
}
