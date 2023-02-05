<?php

namespace Liloi\API;

class Response
{
    private array $list = [];

    public function set(string $name, $value): void
    {
        $this->list[$name] = $value;
    }

    public function get(): array
    {
        return $this->list;
    }

    public function getAsJSON(): string
    {
        return json_encode($this->list, JSON_UNESCAPED_UNICODE);
    }
}