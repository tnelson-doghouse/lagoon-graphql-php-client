<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class OrgUserQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrgUser";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * @deprecated use organizationRole
     */
    public function selectAdmin()
    {
        $this->selectField("admin");

        return $this;
    }

    /**
     * @deprecated use organizationRole
     */
    public function selectOwner()
    {
        $this->selectField("owner");

        return $this;
    }

    public function selectComment()
    {
        $this->selectField("comment");

        return $this;
    }

    public function selectGroupRoles(OrgUserGroupRolesArgumentsObject $argsObject = null)
    {
        $object = new GroupRoleInterfaceQueryObject("groupRoles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrganizationRole()
    {
        $this->selectField("organizationRole");

        return $this;
    }
}
