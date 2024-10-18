<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class FactFilterLHSTargetEnumObject extends EnumObject
{
    const FACT = "FACT";
    const ENVIRONMENT = "ENVIRONMENT";
    const PROJECT = "PROJECT";
}
