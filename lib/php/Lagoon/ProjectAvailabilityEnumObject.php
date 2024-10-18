<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class ProjectAvailabilityEnumObject extends EnumObject
{
    const STANDARD = "STANDARD";
    const HIGH = "HIGH";
    const POLYSITE = "POLYSITE";
}
