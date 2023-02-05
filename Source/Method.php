<?php

namespace Liloi\API;

class Method
{
    protected string $name;

    protected $f;

    public function __construct(string $name, callable $f)
    {
        $this->name = $name;
        $this->f = $f;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function execute(array $parameters): Response
    {
        $call = $this->f;
        return $call($parameters);
    }
}