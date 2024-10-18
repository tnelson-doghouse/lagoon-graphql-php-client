<?php

namespace Lagoon;

use GraphQL\SchemaObject\ArgumentsObject;

class EnvironmentFactsArgumentsObject extends ArgumentsObject
{
    protected $keyFacts;
    protected $limit;
    protected $summary;

    public function setKeyFacts($keyFacts)
    {
        $this->keyFacts = $keyFacts;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }
}
