<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class DeploymentStatusTypeEnumObject extends EnumObject
{
    const NEW = "NEW";
    const PENDING = "PENDING";
    const RUNNING = "RUNNING";
    const CANCELLED = "CANCELLED";
    const ERROR = "ERROR";
    const FAILED = "FAILED";
    const COMPLETE = "COMPLETE";
    const QUEUED = "QUEUED";
}
