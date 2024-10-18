<?php

namespace Lagoon;

use GraphQL\SchemaObject\QueryObject;

class AdvancedTaskDefinitionCommandQueryObject extends QueryObject
{
    const OBJECT_NAME = "AdvancedTaskDefinitionCommand";

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

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectConfirmationText()
    {
        $this->selectField("confirmationText");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectService()
    {
        $this->selectField("service");

        return $this;
    }

    public function selectCommand()
    {
        $this->selectField("command");

        return $this;
    }

    public function selectGroupName()
    {
        $this->selectField("groupName");

        return $this;
    }

    public function selectEnvironment()
    {
        $this->selectField("environment");

        return $this;
    }

    public function selectProject()
    {
        $this->selectField("project");

        return $this;
    }

    public function selectSystemWide()
    {
        $this->selectField("systemWide");

        return $this;
    }

    public function selectPermission()
    {
        $this->selectField("permission");

        return $this;
    }

    public function selectDeployTokenInjection()
    {
        $this->selectField("deployTokenInjection");

        return $this;
    }

    public function selectProjectKeyInjection()
    {
        $this->selectField("projectKeyInjection");

        return $this;
    }

    public function selectAdminOnlyView()
    {
        $this->selectField("adminOnlyView");

        return $this;
    }

    /**
     * @deprecated Use adminOnlyView instead
     */
    public function selectShowUi()
    {
        $this->selectField("showUi");

        return $this;
    }

    /**
     * @deprecated Use deployTokenInjection and projectKeyInjection instead
     */
    public function selectAdminTask()
    {
        $this->selectField("adminTask");

        return $this;
    }

    public function selectAdvancedTaskDefinitionArguments(AdvancedTaskDefinitionCommandAdvancedTaskDefinitionArgumentsArgumentsObject $argsObject = null)
    {
        $object = new AdvancedTaskDefinitionArgumentQueryObject("advancedTaskDefinitionArguments");
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

    public function selectDeleted()
    {
        $this->selectField("deleted");

        return $this;
    }
}
