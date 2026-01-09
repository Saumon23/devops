<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, BTS SIO SLAM!", $hello->sayHello("BTS SIO SLAM"));
    }
    public function testSpecialCharacters(): void
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, Elodie!", $hello->sayHello("Elodie"));
    }
    public function testNumericName(): void
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, 123!", $hello->sayHello("123"));
    }
    public function testReturnType(): void
    {
        $hello = new Hello();
        $this->assertIsString($hello->sayHello("Bob"));
    }
}