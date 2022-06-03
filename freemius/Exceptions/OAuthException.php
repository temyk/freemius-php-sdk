<?php

namespace Freemius\Exceptions;

class OAuthException extends Exception
{
    public function __construct($pResult)
    {
        parent::__construct($pResult);
    }
}