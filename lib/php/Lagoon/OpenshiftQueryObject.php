<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class OpenshiftQueryObject extends QueryObject
{
    const OBJECT_NAME = "Openshift";

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

    public function selectConsoleUrl()
    {
        $this->selectField("consoleUrl");

        return $this;
    }

    public function selectToken()
    {
        $this->selectField("token");

        return $this;
    }

    public function selectRouterPattern()
    {
        $this->selectField("routerPattern");

        return $this;
    }

    /**
     * @deprecated Not used with RBAC permissions
     */
    public function selectProjectUser()
    {
        $this->selectField("projectUser");

        return $this;
    }

    public function selectSshHost()
    {
        $this->selectField("sshHost");

        return $this;
    }

    public function selectSshPort()
    {
        $this->selectField("sshPort");

        return $this;
    }

    public function selectCreated()
    {
        $this->selectField("created");

        return $this;
    }

    public function selectMonitoringConfig()
    {
        $this->selectField("monitoringConfig");

        return $this;
    }

    public function selectFriendlyName()
    {
        $this->selectField("friendlyName");

        return $this;
    }

    public function selectCloudProvider()
    {
        $this->selectField("cloudProvider");

        return $this;
    }

    public function selectCloudRegion()
    {
        $this->selectField("cloudRegion");

        return $this;
    }

    public function selectBuildImage()
    {
        $this->selectField("buildImage");

        return $this;
    }

    public function selectSharedBaasBucketName()
    {
        $this->selectField("sharedBaasBucketName");

        return $this;
    }

    public function selectDisabled()
    {
        $this->selectField("disabled");

        return $this;
    }
}
