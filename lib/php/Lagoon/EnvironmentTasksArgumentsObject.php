<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentTasksArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $taskName;
    protected $limit;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
