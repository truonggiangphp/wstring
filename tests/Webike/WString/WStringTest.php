<?php

# For PHP7
// declare(strict_types=1);

// namespace Hug\Tests\String;

use PHPUnit\Framework\TestCase;


/**
 *
 */
final class WStringTest extends TestCase
{    
    public $string1 = null;
    public $string2 = null;

    function setUp(): void
    {
        $this->string1 = 'Bonjour le monde ! Bonjour la vie ! Bonjour les autres !';
        $this->string2 = 'Il fait de plus en plus chaud ...';
    }

    /* ************************************************* */
    /* ************ HString::str_replace_last ********** */
    /* ************************************************* */

    /**
     *
     */
    public function testCanReplaceLast()
    {
        $test = \Webike\WString\WString::strReplaceLast('Bonjour', 'Hello', $this->string1);
        $this->assertIsString($test);
        $this->assertStringContainsString('Hello', $test);
    }

    /**
     *
     */
    public function testCannotReplaceLast()
    {
        $test = \Webike\WString\WString::strReplaceLast('Au revoir', 'Hello', $this->string1);
        $this->assertIsString($test);
        $this->assertStringNotContainsString('Hello', $test);
    }

    /* ************************************************* */
    /* *************** HString::startsWith ************ */
    /* ************************************************* */

    /**
     *
     */
    public function testCanSartWith()
    {
        $test = \Webike\WString\WString::startsWith($this->string1, 'Bonjour');
        $this->assertIsBool($test);
        $this->assertTrue($test);
    }

    /**
     *
     */
    public function testCannotSartWith()
    {
        $test = \Webike\WString\WString::startsWith($this->string1, 'Au revoir');
        $this->assertIsBool($test);
        $this->assertFalse($test);
    }

    /* ************************************************* */
    /* *************** HString::ends_with ************** */
    /* ************************************************* */

    /**
     *
     */
    public function testCanEndWith()
    {
        $test = \Webike\WString\WString::endsWith($this->string1, 'les autres !');
        $this->assertIsBool($test);
        $this->assertTrue($test);
    }

    /**
     *
     */
    public function testCannotEndWith()
    {
        $test = \Webike\WString\WString::endsWith($this->string1, 'les autres');
        $this->assertIsBool($test);
        $this->assertFalse($test);
    }


}

