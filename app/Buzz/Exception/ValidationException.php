<?php


namespace Buzz\Exception;

use Exception;

class ValidationException extends Exception
{

    protected $errors;

    public function __construct( $errors, $message = 'Validation Exception', $code = 0, Exception $previous = null )
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}