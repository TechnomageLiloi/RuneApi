<?php

namespace Liloi\API\Errors;

class NotFoundException extends Exception
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'Rune API method not found exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x201;
}