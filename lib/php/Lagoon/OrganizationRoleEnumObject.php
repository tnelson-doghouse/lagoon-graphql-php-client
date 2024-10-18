<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class OrganizationRoleEnumObject extends EnumObject
{
    const VIEWER = "VIEWER";
    const ADMIN = "ADMIN";
    const OWNER = "OWNER";
}
