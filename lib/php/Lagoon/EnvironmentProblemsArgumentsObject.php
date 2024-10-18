<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentProblemsArgumentsObject extends ArgumentsObject
{
    protected $severity;
    protected $source;

    public function setSeverity(array $severity)
    {
        $this->severity = $severity;

        return $this;
    }

    public function setSource(array $source)
    {
        $this->source = $source;

        return $this;
    }
}
