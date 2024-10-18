<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class TaskPermissionEnumObject extends EnumObject
{
    const MAINTAINER = "MAINTAINER";
    const DEVELOPER = "DEVELOPER";
    const GUEST = "GUEST";
}
