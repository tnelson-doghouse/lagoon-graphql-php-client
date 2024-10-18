<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class OrgEnvironmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrgEnvironment";

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

    public function selectProject(OrgEnvironmentProjectArgumentsObject $argsObject = null)
    {
        $object = new OrgProjectQueryObject("project");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeployType()
    {
        $this->selectField("deployType");

        return $this;
    }

    public function selectDeployHeadRef()
    {
        $this->selectField("deployHeadRef");

        return $this;
    }

    public function selectDeployTitle()
    {
        $this->selectField("deployTitle");

        return $this;
    }

    public function selectAutoIdle()
    {
        $this->selectField("autoIdle");

        return $this;
    }

    public function selectEnvironmentType()
    {
        $this->selectField("environmentType");

        return $this;
    }

    public function selectOpenshiftProjectName()
    {
        $this->selectField("openshiftProjectName");

        return $this;
    }

    public function selectKubernetesNamespaceName()
    {
        $this->selectField("kubernetesNamespaceName");

        return $this;
    }

    public function selectUpdated()
    {
        $this->selectField("updated");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectDeleted()
    {
        $this->selectField("deleted");

        return $this;
    }

    public function selectRoute()
    {
        $this->selectField("route");

        return $this;
    }

    public function selectRoutes()
    {
        $this->selectField("routes");

        return $this;
    }

    public function selectServices(OrgEnvironmentServicesArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentServiceQueryObject("services");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpenshift(OrgEnvironmentOpenshiftArgumentsObject $argsObject = null)
    {
        $object = new OpenshiftQueryObject("openshift");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectKubernetes(OrgEnvironmentKubernetesArgumentsObject $argsObject = null)
    {
        $object = new KubernetesQueryObject("kubernetes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
