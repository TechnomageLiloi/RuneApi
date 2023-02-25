<?php

namespace Liloi\API;

class Response
{
    /**
     * Response result list.
     *
     * @var array
     */
    private array $list = [];

    /**
     * Add result to the list.
     *
     * @param string $name
     * @param $value
     */
    public function set(string $name, $value): void
    {
        $this->list[$name] = $value;
    }

    /**
     * Set result list from array.
     *
     * @param array $list
     */
    public function setList(array $list): void
    {
        $this->list = $list;
    }

    /**
     * Get result list.
     *
     * @return array
     */
    public function get(): array
    {
        return $this->list;
    }

    /**
     * Format response as JSON.
     *
     * @deprecated Obsolete; use asJson method (will be removed in major version).
     * @return string
     */
    public function getResponse(): string
    {
        return $this->asJson();
    }

    /**
     * Format response as JSON.
     *
     * @return string
     */
    public function asJson(): string
    {
        $response = [
            'response' => $this->list,
            'debug' => [],
            'statistics' => []
        ];
        return json_encode($response, JSON_UNESCAPED_UNICODE);
    }
}