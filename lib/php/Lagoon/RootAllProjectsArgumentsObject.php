<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootAllProjectsArgumentsObject extends ArgumentsObject
{
    protected $createdAfter;
    protected $gitUrl;
    protected $order;
    protected $buildImage;

    public function setCreatedAfter($createdAfter)
    {
        $this->createdAfter = $createdAfter;

        return $this;
    }

    public function setGitUrl($gitUrl)
    {
        $this->gitUrl = $gitUrl;

        return $this;
    }

    public function setOrder($projectOrderType)
    {
        $this->order = new RawObject($projectOrderType);

        return $this;
    }

    public function setBuildImage($buildImage)
    {
        $this->buildImage = $buildImage;

        return $this;
    }
}
