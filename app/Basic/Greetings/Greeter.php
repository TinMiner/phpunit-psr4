<?php declare(strict_types=1);

Namespace Basic\Greetings;
//require_once __DIR__ . '/../vendor/autoload.php';

final class Greeter
{
    public function greet(string $name): string
    {
        
        return 'Hello, ' . $name . '!';
    }
}