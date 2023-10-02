<?php

declare(strict_types=1);

require __DIR__ . '/../../Model/Greeting.php';

use Romchik38\HelloWorld\Model\Greeting;

$testPhrase = 'hello world';

$g1 = new Greeting($testPhrase);

$message = '';

// 1 checking function get
$message = $g1->get();

// 2 checking type of returning value
$messageType = gettype($message);
if ($messageType !== 'string') {
    $errorMessage = "expecting type \"string\"" . $messageType . " given";
    throw new \Exception($errorMessage);
}

// 3 checking message value
if ($message !== $testPhrase) {
    $errorMessage = "expecting message: \"" . $testPhrase . "\", given: \"" . $message . "\"";
    throw new \Exception($errorMessage);
}

echo 'test passed: ' . Greeting::class;
