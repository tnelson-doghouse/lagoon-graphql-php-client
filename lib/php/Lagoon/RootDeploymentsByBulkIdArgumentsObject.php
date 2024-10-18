<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootDeploymentsByBulkIdArgumentsObject extends ArgumentsObject
{
    protected $bulkId;

    public function setBulkId($bulkId)
    {
        $this->bulkId = $bulkId;

        return $this;
    }
}
