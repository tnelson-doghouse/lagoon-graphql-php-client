<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAllKubernetesArgumentsObject extends ArgumentsObject
{
    protected $disabled;
    protected $buildImage;

    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    public function setBuildImage($buildImage)
    {
        $this->buildImage = $buildImage;

        return $this;
    }
}
