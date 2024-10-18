<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCheckBulkImportProjectsAndGroupsToOrganizationArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(AddProjectToOrganizationInputInputObject $addProjectToOrganizationInputInputObject)
    {
        $this->input = $addProjectToOrganizationInputInputObject;

        return $this;
    }
}
