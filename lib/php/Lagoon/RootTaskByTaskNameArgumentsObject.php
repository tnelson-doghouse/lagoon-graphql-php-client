<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootTaskByTaskNameArgumentsObject extends ArgumentsObject
{
    protected $taskName;

    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }
}
