<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class OrganizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Organization";

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

    public function selectFriendlyName()
    {
        $this->selectField("friendlyName");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectQuotaProject()
    {
        $this->selectField("quotaProject");

        return $this;
    }

    public function selectQuotaGroup()
    {
        $this->selectField("quotaGroup");

        return $this;
    }

    public function selectQuotaNotification()
    {
        $this->selectField("quotaNotification");

        return $this;
    }

    public function selectQuotaEnvironment()
    {
        $this->selectField("quotaEnvironment");

        return $this;
    }

    public function selectQuotaRoute()
    {
        $this->selectField("quotaRoute");

        return $this;
    }

    public function selectDeployTargets(OrganizationDeployTargetsArgumentsObject $argsObject = null)
    {
        $object = new OpenshiftQueryObject("deployTargets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProjects(OrganizationProjectsArgumentsObject $argsObject = null)
    {
        $object = new OrgProjectQueryObject("projects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironments(OrganizationEnvironmentsArgumentsObject $argsObject = null)
    {
        $object = new OrgEnvironmentQueryObject("environments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOwners(OrganizationOwnersArgumentsObject $argsObject = null)
    {
        $object = new OrgUserQueryObject("owners");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNotifications(OrganizationNotificationsArgumentsObject $argsObject = null)
    {
        $object = new NotificationUnionObject("notifications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }
}
