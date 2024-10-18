<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class OrganizationNotificationsArgumentsObject extends ArgumentsObject
{
    protected $type;

    public function setType($notificationType)
    {
        $this->type = new RawObject($notificationType);

        return $this;
    }
}
