<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootUserBySshKeyArgumentsObject extends ArgumentsObject
{
    protected $sshKey;

    public function setSshKey($sshKey)
    {
        $this->sshKey = $sshKey;

        return $this;
    }
}
