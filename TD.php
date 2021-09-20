<?php
class TD extends \PHPUnit\Framework\TestCase
{
    /** @test */
public function compareFalse()
{
    $expected=44;
    $actual=22;
    $this->assertGreaterThan($expected,$actual,"actual value in not greater than expected");
}
/** @test */
function compareTrue()
{  $expected=22;
    $actual=44;

}


}


?>