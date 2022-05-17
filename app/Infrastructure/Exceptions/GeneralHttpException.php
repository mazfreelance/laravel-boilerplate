<?php

namespace Infrastructure\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class GeneralHttpException extends HttpException
{
    /**
     * @param string     $message  The internal exception message
     * @param int     $statusCode  The internal exception status code
     * @param \Throwable $previous The previous exception
     * @param int        $code     The internal exception code
     */
    public function __construct(string $message = null, int $statusCode = 400, \Throwable $previous = null, int $code = 0, array $headers = [])
    {
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}
