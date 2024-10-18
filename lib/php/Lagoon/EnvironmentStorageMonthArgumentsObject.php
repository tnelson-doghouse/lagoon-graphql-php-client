<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentStorageMonthArgumentsObject extends ArgumentsObject
{
    protected $month;

    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }
}
