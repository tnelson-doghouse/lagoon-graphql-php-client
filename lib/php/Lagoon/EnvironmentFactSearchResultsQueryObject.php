<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentFactSearchResultsQueryObject extends QueryObject
{
    const OBJECT_NAME = "EnvironmentFactSearchResults";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectEnvironments(EnvironmentFactSearchResultsEnvironmentsArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
