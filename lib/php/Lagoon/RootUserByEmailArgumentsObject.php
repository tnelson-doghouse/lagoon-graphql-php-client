<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootUserByEmailArgumentsObject extends ArgumentsObject
{
    protected $email;

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
