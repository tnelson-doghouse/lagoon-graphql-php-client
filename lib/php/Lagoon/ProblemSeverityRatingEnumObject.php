<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class ProblemSeverityRatingEnumObject extends EnumObject
{
    const NONE = "NONE";
    const UNKNOWN = "UNKNOWN";
    const NEGLIGIBLE = "NEGLIGIBLE";
    const LOW = "LOW";
    const MEDIUM = "MEDIUM";
    const HIGH = "HIGH";
    const CRITICAL = "CRITICAL";
}
