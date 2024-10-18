<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentHitsMonthArgumentsObject extends ArgumentsObject
{
    protected $month;

    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }
}
