<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class GroupRoleInterfaceQueryObject extends QueryObject
{
    const OBJECT_NAME = "GroupRoleInterface";

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

    public function selectRole()
    {
        $this->selectField("role");

        return $this;
    }

    public function selectGroupType()
    {
        $this->selectField("groupType");

        return $this;
    }

    public function selectOrganization()
    {
        $this->selectField("organization");

        return $this;
    }
}
