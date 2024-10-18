<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class MetadataKeyValueInputObject extends InputObject
{
    protected $key;
    protected $value;

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
