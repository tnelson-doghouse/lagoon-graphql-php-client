<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class FactTypeEnumObject extends EnumObject
{
    const TEXT = "TEXT";
    const URL = "URL";
    const SEMVER = "SEMVER";
}
