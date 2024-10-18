<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class RootAllUsersArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $email;
    protected $gitlabId;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setGitlabId($gitlabId)
    {
        $this->gitlabId = $gitlabId;

        return $this;
    }
}
