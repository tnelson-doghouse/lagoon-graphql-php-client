<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentInsightsArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $limit;

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
