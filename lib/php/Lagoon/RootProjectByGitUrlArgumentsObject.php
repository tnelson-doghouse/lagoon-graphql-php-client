<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProjectByGitUrlArgumentsObject extends ArgumentsObject
{
    protected $gitUrl;

    public function setGitUrl($gitUrl)
    {
        $this->gitUrl = $gitUrl;

        return $this;
    }
}
