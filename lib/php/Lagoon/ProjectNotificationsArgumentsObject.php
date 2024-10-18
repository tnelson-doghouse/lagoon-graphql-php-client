<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ProjectNotificationsArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $contentType;
    protected $notificationSeverityThreshold;

    public function setType($notificationType)
    {
        $this->type = new RawObject($notificationType);

        return $this;
    }

    public function setContentType($notificationContentType)
    {
        $this->contentType = new RawObject($notificationContentType);

        return $this;
    }

    public function setNotificationSeverityThreshold($problemSeverityRating)
    {
        $this->notificationSeverityThreshold = new RawObject($problemSeverityRating);

        return $this;
    }
}
