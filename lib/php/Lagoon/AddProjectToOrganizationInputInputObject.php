<?php

namespace Lagoon;

use GraphQL\SchemaObject\InputObject;

class AddProjectToOrganizationInputInputObject extends InputObject
{
    protected $project;
    protected $organization;

    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }
}
