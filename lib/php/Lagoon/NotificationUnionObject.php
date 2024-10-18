<?php

namespace Lagoon;

use GraphQL\SchemaObject\UnionObject;

class NotificationUnionObject extends UnionObject
{
    public function onNotificationRocketChat()
    {
        $object = new NotificationRocketChatQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onNotificationSlack()
    {
        $object = new NotificationSlackQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onNotificationMicrosoftTeams()
    {
        $object = new NotificationMicrosoftTeamsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onNotificationEmail()
    {
        $object = new NotificationEmailQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onNotificationWebhook()
    {
        $object = new NotificationWebhookQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
