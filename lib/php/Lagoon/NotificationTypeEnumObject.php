<?php

namespace Lagoon;

use GraphQL\SchemaObject\EnumObject;

class NotificationTypeEnumObject extends EnumObject
{
    const SLACK = "SLACK";
    const ROCKETCHAT = "ROCKETCHAT";
    const MICROSOFTTEAMS = "MICROSOFTTEAMS";
    const EMAIL = "EMAIL";
    const WEBHOOK = "WEBHOOK";
}
