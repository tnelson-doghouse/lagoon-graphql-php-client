<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class ProjectFactSearchResultsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProjectFactSearchResults";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectProjects(ProjectFactSearchResultsProjectsArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("projects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
