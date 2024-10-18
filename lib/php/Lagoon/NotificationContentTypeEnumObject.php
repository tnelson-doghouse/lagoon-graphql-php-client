<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class NotificationContentTypeEnumObject extends EnumObject
{
    const DEPLOYMENT = "DEPLOYMENT";
    const PROBLEM = "PROBLEM";
}
