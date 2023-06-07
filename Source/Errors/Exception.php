<?php

namespace Liloi\API\Errors;

use Liloi\Judex\ExtendedException;

class Exception extends ExtendedException
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $defaultMessage = 'Rune API general exception.';

    /**
     * Exception code.
     *
     * @var int|string
     */
    protected $defaultCode = 0x200;
}