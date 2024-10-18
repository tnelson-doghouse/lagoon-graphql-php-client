<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class NotificationRocketChatQueryObject extends QueryObject
{
    const OBJECT_NAME = "NotificationRocketChat";

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

    public function selectChannel()
    {
        $this->selectField("channel");

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
