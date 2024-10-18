<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class NotificationWebhookQueryObject extends QueryObject
{
    const OBJECT_NAME = "NotificationWebhook";

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

    public function selectWebhook()
    {
        $this->selectField("webhook");

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
