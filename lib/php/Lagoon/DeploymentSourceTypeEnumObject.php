<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class DeploymentSourceTypeEnumObject extends EnumObject
{
    const API = "API";
    const WEBHOOK = "WEBHOOK";
}
