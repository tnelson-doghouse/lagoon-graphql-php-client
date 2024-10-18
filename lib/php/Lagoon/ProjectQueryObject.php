<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class ProjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "Project";

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

    public function selectOrganization()
    {
        $this->selectField("organization");

        return $this;
    }

    public function selectGitUrl()
    {
        $this->selectField("gitUrl");

        return $this;
    }

    public function selectAvailability()
    {
        $this->selectField("availability");

        return $this;
    }

    public function selectPrivateKey()
    {
        $this->selectField("privateKey");

        return $this;
    }

    public function selectPublicKey()
    {
        $this->selectField("publicKey");

        return $this;
    }

    public function selectSubfolder()
    {
        $this->selectField("subfolder");

        return $this;
    }

    public function selectRouterPattern()
    {
        $this->selectField("routerPattern");

        return $this;
    }

    public function selectNotifications(ProjectNotificationsArgumentsObject $argsObject = null)
    {
        $object = new NotificationUnionObject("notifications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated No longer in use
     */
    public function selectActiveSystemsDeploy()
    {
        $this->selectField("activeSystemsDeploy");

        return $this;
    }

    /**
     * @deprecated No longer in use
     */
    public function selectActiveSystemsPromote()
    {
        $this->selectField("activeSystemsPromote");

        return $this;
    }

    /**
     * @deprecated No longer in use
     */
    public function selectActiveSystemsRemove()
    {
        $this->selectField("activeSystemsRemove");

        return $this;
    }

    /**
     * @deprecated No longer in use
     */
    public function selectActiveSystemsTask()
    {
        $this->selectField("activeSystemsTask");

        return $this;
    }

    /**
     * @deprecated No longer in use
     */
    public function selectActiveSystemsMisc()
    {
        $this->selectField("activeSystemsMisc");

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

    public function selectProductionEnvironment()
    {
        $this->selectField("productionEnvironment");

        return $this;
    }

    public function selectProductionRoutes()
    {
        $this->selectField("productionRoutes");

        return $this;
    }

    public function selectProductionAlias()
    {
        $this->selectField("productionAlias");

        return $this;
    }

    public function selectStandbyProductionEnvironment()
    {
        $this->selectField("standbyProductionEnvironment");

        return $this;
    }

    public function selectStandbyRoutes()
    {
        $this->selectField("standbyRoutes");

        return $this;
    }

    public function selectStandbyAlias()
    {
        $this->selectField("standbyAlias");

        return $this;
    }

    public function selectProductionBuildPriority()
    {
        $this->selectField("productionBuildPriority");

        return $this;
    }

    public function selectDevelopmentBuildPriority()
    {
        $this->selectField("developmentBuildPriority");

        return $this;
    }

    public function selectAutoIdle()
    {
        $this->selectField("autoIdle");

        return $this;
    }

    public function selectStorageCalc()
    {
        $this->selectField("storageCalc");

        return $this;
    }

    public function selectProblemsUi()
    {
        $this->selectField("problemsUi");

        return $this;
    }

    public function selectFactsUi()
    {
        $this->selectField("factsUi");

        return $this;
    }

    public function selectDeploymentsDisabled()
    {
        $this->selectField("deploymentsDisabled");

        return $this;
    }

    public function selectOpenshift(ProjectOpenshiftArgumentsObject $argsObject = null)
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

    public function selectKubernetes(ProjectKubernetesArgumentsObject $argsObject = null)
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

    public function selectDevelopmentEnvironmentsLimit()
    {
        $this->selectField("developmentEnvironmentsLimit");

        return $this;
    }

    public function selectOpenshiftProjectName()
    {
        $this->selectField("openshiftProjectName");

        return $this;
    }

    public function selectEnvironments(ProjectEnvironmentsArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environments");
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

    public function selectEnvVariables(ProjectEnvVariablesArgumentsObject $argsObject = null)
    {
        $object = new EnvKeyValueQueryObject("envVariables");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetadata()
    {
        $this->selectField("metadata");

        return $this;
    }

    /**
     * @deprecated Unstable API, subject to breaking changes in any release. Use at your own risk
     */
    public function selectDeployTargetConfigs(ProjectDeployTargetConfigsArgumentsObject $argsObject = null)
    {
        $object = new DeployTargetConfigQueryObject("deployTargetConfigs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBuildImage()
    {
        $this->selectField("buildImage");

        return $this;
    }

    public function selectSharedBaasBucket()
    {
        $this->selectField("sharedBaasBucket");

        return $this;
    }
}
