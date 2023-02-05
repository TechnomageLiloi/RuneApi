<?php

namespace Liloi\API;

class Manager
{
    private array $list = [];

    public function add(Method $method): void
    {
        $this->list[$method->getName()] = $method;
    }

    public function search(string $name): Method
    {
        return $this->list[$name];
    }
}