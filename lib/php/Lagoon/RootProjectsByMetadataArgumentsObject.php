<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootProjectsByMetadataArgumentsObject extends ArgumentsObject
{
    protected $metadata;

    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }
}
