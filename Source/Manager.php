<?php

namespace Liloi\API;

use Liloi\API\Errors\NotFoundException;

/**
 * Rune API manager.
 *
 * @package Liloi\API
 */
class Manager
{
    /**
     * List of API methods.
     *
     * @var Method[]
     */
    private array $list = [];

    /**
     * Add API method.
     *
     * @param Method $method
     */
    public function add(Method $method): void
    {
        $this->list[$method->getName()] = $method;
    }

    /**
     * Remove API method.
     *
     * @param Method $method
     */
    public function remove(Method $method): void
    {
        unset($this->list[$method->getName()]);
    }

    /**
     * Is API method in list.
     *
     * @param string $name
     * @return bool
     */
    public function is(string $name): bool
    {
        return isset($this->list[$name]);
    }

    /**
     * Search API method.
     *
     * @param string $name
     * @return Method
     */
    public function search(string $name): Method
    {
        if(!$this->is($name))
        {
            throw new NotFoundException();
        }

        return $this->list[$name];
    }

    public function execute(
        string $method,
        array $parameters = []
    ): string
    {
        $response = $this->search($method)->execute($parameters);
        return $response->getResponse();
    }
}