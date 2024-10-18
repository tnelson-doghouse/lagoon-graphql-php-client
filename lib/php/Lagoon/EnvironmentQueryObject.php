<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class EnvironmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Environment";

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

    public function selectProject(EnvironmentProjectArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("project");
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

    public function selectDeployBaseRef()
    {
        $this->selectField("deployBaseRef");

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

    public function selectHoursMonth(EnvironmentHoursMonthArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentHoursMonthQueryObject("hoursMonth");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStorages(EnvironmentStoragesArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentStorageQueryObject("storages");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStorageMonth(EnvironmentStorageMonthArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentStorageMonthQueryObject("storageMonth");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHitsMonth(EnvironmentHitsMonthArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentHitsMonthQueryObject("hitsMonth");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvVariables(EnvironmentEnvVariablesArgumentsObject $argsObject = null)
    {
        $object = new EnvKeyValueQueryObject("envVariables");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    /**
     * @deprecated No longer in use
     */
    public function selectMonitoringUrls()
    {
        $this->selectField("monitoringUrls");

        return $this;
    }

    public function selectDeployments(EnvironmentDeploymentsArgumentsObject $argsObject = null)
    {
        $object = new DeploymentQueryObject("deployments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInsights(EnvironmentInsightsArgumentsObject $argsObject = null)
    {
        $object = new InsightQueryObject("insights");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBackups(EnvironmentBackupsArgumentsObject $argsObject = null)
    {
        $object = new BackupQueryObject("backups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTasks(EnvironmentTasksArgumentsObject $argsObject = null)
    {
        $object = new TaskQueryObject("tasks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvancedTasks(EnvironmentAdvancedTasksArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionUnionObject("advancedTasks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectServices(EnvironmentServicesArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentServiceQueryObject("services");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProblems(EnvironmentProblemsArgumentsObject $argsObject = null)
    {
        $object = new ProblemQueryObject("problems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFacts(EnvironmentFactsArgumentsObject $argsObject = null)
    {
        $object = new FactQueryObject("facts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpenshift(EnvironmentOpenshiftArgumentsObject $argsObject = null)
    {
        $object = new OpenshiftQueryObject("openshift");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpenshiftProjectPattern()
    {
        $this->selectField("openshiftProjectPattern");

        return $this;
    }

    public function selectKubernetes(EnvironmentKubernetesArgumentsObject $argsObject = null)
    {
        $object = new KubernetesQueryObject("kubernetes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectKubernetesNamespacePattern()
    {
        $this->selectField("kubernetesNamespacePattern");

        return $this;
    }

    public function selectWorkflows(EnvironmentWorkflowsArgumentsObject $argsObject = null)
    {
        $object = new WorkflowQueryObject("workflows");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
