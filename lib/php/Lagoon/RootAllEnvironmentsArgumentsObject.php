<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootAllEnvironmentsArgumentsObject extends ArgumentsObject
{
    protected $createdAfter;
    protected $type;
    protected $order;

    public function setCreatedAfter($createdAfter)
    {
        $this->createdAfter = $createdAfter;

        return $this;
    }

    public function setType($envType)
    {
        $this->type = new RawObject($envType);

        return $this;
    }

    public function setOrder($envOrderType)
    {
        $this->order = new RawObject($envOrderType);

        return $this;
    }
}
