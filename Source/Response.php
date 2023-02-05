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

    public function getResponse(): string
    {
        $response = [
            'response' => $this->list,
            'debug' => [],
            'statistics' => []
        ];
        return json_encode($response, JSON_UNESCAPED_UNICODE);
    }
}