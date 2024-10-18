<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class NotificationEmailQueryObject extends QueryObject
{
    const OBJECT_NAME = "NotificationEmail";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectEmailAddress()
    {
        $this->selectField("emailAddress");

        return $this;
    }

    public function selectContentType()
    {
        $this->selectField("contentType");

        return $this;
    }

    public function selectNotificationSeverityThreshold()
    {
        $this->selectField("notificationSeverityThreshold");

        return $this;
    }

    public function selectOrganization()
    {
        $this->selectField("organization");

        return $this;
    }
}
