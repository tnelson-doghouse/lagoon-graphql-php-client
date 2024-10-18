<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class RootQueryObject extends QueryObject
{
    const OBJECT_NAME = "";

    public function selectMe(RootMeArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("me");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserBySshKey(RootUserBySshKeyArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("userBySshKey");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserBySshFingerprint(RootUserBySshFingerprintArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("userBySshFingerprint");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserByEmail(RootUserByEmailArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("userByEmail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProjectByName(RootProjectByNameArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("projectByName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrgProjectByName(RootOrgProjectByNameArgumentsObject $argsObject = null)
    {
        $object = new OrgProjectQueryObject("orgProjectByName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironmentsByKubernetes(RootEnvironmentsByKubernetesArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environmentsByKubernetes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsersByOrganization(RootUsersByOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrgUserQueryObject("usersByOrganization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserByEmailAndOrganization(RootUserByEmailAndOrganizationArgumentsObject $argsObject = null)
    {
        $object = new OrgUserQueryObject("userByEmailAndOrganization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProjectByGitUrl(RootProjectByGitUrlArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("projectByGitUrl");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironmentByName(RootEnvironmentByNameArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environmentByName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironmentById(RootEnvironmentByIdArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environmentById");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironmentByOpenshiftProjectName(RootEnvironmentByOpenshiftProjectNameArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environmentByOpenshiftProjectName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironmentByKubernetesNamespaceName(RootEnvironmentByKubernetesNamespaceNameArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("environmentByKubernetesNamespaceName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProjectsByFactSearch(RootProjectsByFactSearchArgumentsObject $argsObject = null)
    {
        $object = new ProjectFactSearchResultsQueryObject("projectsByFactSearch");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnvironmentsByFactSearch(RootEnvironmentsByFactSearchArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentFactSearchResultsQueryObject("environmentsByFactSearch");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserCanSshToEnvironment(RootUserCanSshToEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("userCanSshToEnvironment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeploymentByRemoteId(RootDeploymentByRemoteIdArgumentsObject $argsObject = null)
    {
        $object = new DeploymentQueryObject("deploymentByRemoteId");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeploymentByName(RootDeploymentByNameArgumentsObject $argsObject = null)
    {
        $object = new DeploymentQueryObject("deploymentByName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeploymentsByBulkId(RootDeploymentsByBulkIdArgumentsObject $argsObject = null)
    {
        $object = new DeploymentQueryObject("deploymentsByBulkId");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDeploymentsByFilter(RootDeploymentsByFilterArgumentsObject $argsObject = null)
    {
        $object = new DeploymentQueryObject("deploymentsByFilter");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaskByTaskName(RootTaskByTaskNameArgumentsObject $argsObject = null)
    {
        $object = new TaskQueryObject("taskByTaskName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaskByRemoteId(RootTaskByRemoteIdArgumentsObject $argsObject = null)
    {
        $object = new TaskQueryObject("taskByRemoteId");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaskById(RootTaskByIdArgumentsObject $argsObject = null)
    {
        $object = new TaskQueryObject("taskById");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllProjects(RootAllProjectsArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("allProjects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProjectsByMetadata(RootProjectsByMetadataArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("projectsByMetadata");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllOpenshifts(RootAllOpenshiftsArgumentsObject $argsObject = null)
    {
        $object = new OpenshiftQueryObject("allOpenshifts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllKubernetes(RootAllKubernetesArgumentsObject $argsObject = null)
    {
        $object = new KubernetesQueryObject("allKubernetes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllEnvironments(RootAllEnvironmentsArgumentsObject $argsObject = null)
    {
        $object = new EnvironmentQueryObject("allEnvironments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllProblems(RootAllProblemsArgumentsObject $argsObject = null)
    {
        $object = new ProblemQueryObject("allProblems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProblemSources()
    {
        $this->selectField("problemSources");

        return $this;
    }

    public function selectAllUsers(RootAllUsersArgumentsObject $argsObject = null)
    {
        $object = new UserQueryObject("allUsers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllProjectsInGroup(RootAllProjectsInGroupArgumentsObject $argsObject = null)
    {
        $object = new ProjectQueryObject("allProjectsInGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLagoonVersion()
    {
        $this->selectField("lagoonVersion");

        return $this;
    }

    public function selectAllAdvancedTaskDefinitions(RootAllAdvancedTaskDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionUnionObject("allAdvancedTaskDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvancedTaskDefinitionById(RootAdvancedTaskDefinitionByIdArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionUnionObject("advancedTaskDefinitionById");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvancedTasksForEnvironment(RootAdvancedTasksForEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionUnionObject("advancedTasksForEnvironment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvancedTaskDefinitionArgumentById(RootAdvancedTaskDefinitionArgumentByIdArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionArgumentQueryObject("advancedTaskDefinitionArgumentById");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectWorkflowsForEnvironment(RootWorkflowsForEnvironmentArgumentsObject $argsObject = null)
    {
        $object = new WorkflowQueryObject("workflowsForEnvironment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Unstable API, subject to breaking changes in any release. Use at your own risk
     */
    public function selectDeployTargetConfigById(RootDeployTargetConfigByIdArgumentsObject $argsObject = null)
    {
        $object = new DeployTargetConfigQueryObject("deployTargetConfigById");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Unstable API, subject to breaking changes in any release. Use at your own risk
     */
    public function selectDeployTargetConfigsByProjectId(RootDeployTargetConfigsByProjectIdArgumentsObject $argsObject = null)
    {
        $object = new DeployTargetConfigQueryObject("deployTargetConfigsByProjectId");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Unstable API, subject to breaking changes in any release. Use at your own risk
     */
    public function selectDeployTargetConfigsByDeployTarget(RootDeployTargetConfigsByDeployTargetArgumentsObject $argsObject = null)
    {
        $object = new DeployTargetConfigQueryObject("deployTargetConfigsByDeployTarget");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Unstable API, subject to breaking changes in any release. Use at your own risk
     */
    public function selectAllDeployTargetConfigs(RootAllDeployTargetConfigsArgumentsObject $argsObject = null)
    {
        $object = new DeployTargetConfigQueryObject("allDeployTargetConfigs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAllNotifications(RootAllNotificationsArgumentsObject $argsObject = null)
    {
        $object = new NotificationUnionObject("allNotifications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Unstable API, subject to breaking changes in any release. Use at your own risk
     */
    public function selectAllOrganizations(RootAllOrganizationsArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject("allOrganizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrganizationById(RootOrganizationByIdArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject("organizationById");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrganizationByName(RootOrganizationByNameArgumentsObject $argsObject = null)
    {
        $object = new OrganizationQueryObject("organizationByName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use checkBulkImportProjectsAndGroupsToOrganization instead
     */
    public function selectGetGroupProjectOrganizationAssociation()
    {
        $this->selectField("getGroupProjectOrganizationAssociation");

        return $this;
    }

    /**
     * @deprecated Use checkBulkImportProjectsAndGroupsToOrganization instead
     */
    public function selectGetProjectGroupOrganizationAssociation()
    {
        $this->selectField("getProjectGroupOrganizationAssociation");

        return $this;
    }

    public function selectGetEnvVariablesByProjectEnvironmentName(RootGetEnvVariablesByProjectEnvironmentNameArgumentsObject $argsObject = null)
    {
        $object = new EnvKeyValueQueryObject("getEnvVariablesByProjectEnvironmentName");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckBulkImportProjectsAndGroupsToOrganization(RootCheckBulkImportProjectsAndGroupsToOrganizationArgumentsObject $argsObject = null)
    {
        $object = new ProjectGroupsToOrganizationQueryObject("checkBulkImportProjectsAndGroupsToOrganization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
