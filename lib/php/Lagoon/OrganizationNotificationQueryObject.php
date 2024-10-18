<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class OrganizationNotificationQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrganizationNotification";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
