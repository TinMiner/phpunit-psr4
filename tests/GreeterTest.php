<?php declare(strict_types=1);

Namespace Basic\Greetings;
use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../vendor/autoload.php';


final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter;

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Alice!', $greeting);
    }
}