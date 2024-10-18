<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class UserQueryObject extends QueryObject
{
    const OBJECT_NAME = "User";

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

    public function selectComment()
    {
        $this->selectField("comment");

        return $this;
    }

    public function selectGitlabId()
    {
        $this->selectField("gitlabId");

        return $this;
    }

    public function selectSshKeys(UserSshKeysArgumentsObject $argsObject = null)
    {
        $object = new SshKeyQueryObject("sshKeys");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGroupRoles(UserGroupRolesArgumentsObject $argsObject = null)
    {
        $object = new GroupRoleInterfaceQueryObject("groupRoles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
