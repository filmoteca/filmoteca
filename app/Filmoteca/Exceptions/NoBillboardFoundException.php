<?php namespace Filmoteca\Exceptions;

use Exception;

class NoBillboardFoundException extends Exception
{
    protected $message = 'No billboard found between the years %u and %u';

    public function __construct($currentYear)
    {
        parent::__construct(sprintf($this->message, (int)$currentYear,  ((int)$currentYear) - 1));
    }
}