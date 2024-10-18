<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootUserByEmailAndOrganizationArgumentsObject extends ArgumentsObject
{
    protected $email;
    protected $organization;

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }
}
