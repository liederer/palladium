<?php

namespace Palladium\Exception;

use Palladium\Component\AppException as Exception;


class InvalidPassword extends Exception
{
    protected $code = 0;
    protected $message = 'message.error.invalid-password';
}