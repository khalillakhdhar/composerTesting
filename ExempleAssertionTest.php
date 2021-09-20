<?php
class ExempleAssertionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    function assertionSame()
    {
        $string1="testing";
        $string2="Testing";
        $string3="testing";
       // $this->assertSame($string1,$string2);
        $this->assertSame($string1,$string3);


    }
}

?>