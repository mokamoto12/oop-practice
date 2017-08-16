<?php

namespace Mokamoto12\OopPractice\Infrastructure\Persistence\CSV;

use Throwable;

class FileNotFoundException extends \RuntimeException
{
    /**
     * FileNotFoundException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
