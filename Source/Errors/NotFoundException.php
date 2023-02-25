<?php

namespace Liloi\API\Errors;

use Judex\ExtendedException;

class NotFoundException extends ExtendedException
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