<?php

namespace Liloi\API;

/**
 * Rune API method.
 *
 * @package Liloi\API
 */
class Method
{
    /**
     * Unique API method key.
     *
     * @var string
     */
    protected string $name;

    /**
     * API function.
     *
     * @var callable
     */
    protected $f;

    /**
     * API method constructor
     * .
     * @param string $name
     * @param callable $f
     */
    public function __construct(string $name, callable $f)
    {
        $this->name = $name;
        $this->f = $f;
    }

    /**
     * Get unique API method key.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Execute API method.
     *
     * @param array $parameters
     * @return Response
     */
    public function execute(array $parameters): Response
    {
        $call = $this->f;
        $result = $call($parameters);

        if($result instanceof Response)
        {
            return $result;
        }

        $response = new Response();

        if(is_array($result))
        {
            $response->setList($result);
        }
        else
        {
            $response->set('value', $result);
        }

        return $response;
    }
}