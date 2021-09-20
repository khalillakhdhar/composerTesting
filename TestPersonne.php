<?php
require("ValidationPersonne.php");
class TestPersonne extends \PHPUnit\Framework\TestCase
{
/** @test */
public function testVide()
{
    $p=new  ValidationPersonne();
    $this->assertTrue($p->validateNotEmpty("teste"));

}
/** @test */
public function testAge()
{
    $p=new  ValidationPersonne();
    $this->assertTrue($p->validateAge(22));

}
/** @test */
public function testCode()
{
    $p=new  ValidationPersonne();
    $this->assertTrue($p->validateCode(6044));

}
/** @test */
public function testAdresse()
{
    $adr=" 444 cité les oiseaux Bruxelle";
    $p=new  ValidationPersonne();
    $this->assertTrue($p->verifAdresse($adr));

}
/** @test */
public function testEmail()
{
    $mail="contact@prtech-it.org";
    $p=new  ValidationPersonne();
    $this->assertTrue($p->verifEmail($mail));

}


}


?>