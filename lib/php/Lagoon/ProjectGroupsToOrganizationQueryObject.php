<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class ProjectGroupsToOrganizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProjectGroupsToOrganization";

    public function selectProjects(ProjectGroupsToOrganizationProjectsArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("projects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOtherOrgProjects(ProjectGroupsToOrganizationOtherOrgProjectsArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("otherOrgProjects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
