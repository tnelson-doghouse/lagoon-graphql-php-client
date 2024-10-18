<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class DeployTargetConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeployTargetConfig";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProject(DeployTargetConfigProjectArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("project");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWeight()
    {
        $this->selectField("weight");

        return $this;
    }

    public function selectBranches()
    {
        $this->selectField("branches");

        return $this;
    }

    public function selectPullrequests()
    {
        $this->selectField("pullrequests");

        return $this;
    }

    public function selectDeployTarget(DeployTargetConfigDeployTargetArgumentsObject $argsObject = null)
    {
        $object = new OpenshiftQueryObject("deployTarget");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeployTargetProjectPattern()
    {
        $this->selectField("deployTargetProjectPattern");

        return $this;
    }
}
