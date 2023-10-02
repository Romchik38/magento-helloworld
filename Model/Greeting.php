<?php

declare(strict_types=1);

namespace Romchik38\HelloWorld\Model;

class Greeting
{
    private string $message;
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function get(): string
    {
        return $this->message;
    }
}
