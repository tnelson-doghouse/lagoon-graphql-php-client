<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentHoursMonthQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvironmentHoursMonth";

    public function selectMonth()
    {
        $this->selectField("month");

        return $this;
    }

    public function selectHours()
    {
        $this->selectField("hours");

        return $this;
    }
}
