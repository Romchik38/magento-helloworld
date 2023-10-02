<?php

declare(strict_types=1);

require __DIR__ . '/../../Model/Greeting.php';

use Romchik38\HelloWorld\Model\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testGet(): void
    {
        $testPhrase = 'hello world';
        $g1 = new Greeting($testPhrase);
        $message = '';
        $message = $g1->get();
        // checking type of returning value
        $messageType = gettype($message);
        $this->assertSame('string', $messageType);
        $this->assertSame($testPhrase, $message);
    }
}
