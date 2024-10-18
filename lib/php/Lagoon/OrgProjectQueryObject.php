<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class OrgProjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrgProject";

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

    public function selectOrganization()
    {
        $this->selectField("organization");

        return $this;
    }

    public function selectGroupCount()
    {
        $this->selectField("groupCount");

        return $this;
    }

    public function selectNotifications(OrgProjectNotificationsArgumentsObject $argsObject = null)
    {
        $object = new OrganizationNotificationQueryObject("notifications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
