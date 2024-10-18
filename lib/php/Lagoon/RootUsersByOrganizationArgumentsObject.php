<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootUsersByOrganizationArgumentsObject extends ArgumentsObject
{
    protected $organization;

    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }
}
