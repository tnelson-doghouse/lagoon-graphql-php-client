<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class GroupRoleEnumObject extends EnumObject
{
    const GUEST = "GUEST";
    const REPORTER = "REPORTER";
    const DEVELOPER = "DEVELOPER";
    const MAINTAINER = "MAINTAINER";
    const OWNER = "OWNER";
}
