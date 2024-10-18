<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootUserBySshFingerprintArgumentsObject extends ArgumentsObject
{
    protected $fingerprint;

    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;

        return $this;
    }
}
