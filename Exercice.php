<?php
class Exercice extends \PHPUnit\Framework\TestCase
{
/** @test */
public function assertChaine()
{
    $chaine= "hello world";
    $this->assertNotEmpty($chaine," la chaine est vide");
}
/** @test */
public function testExistance()
{
    $login="mylogin";
    $password="log";
    $this->assertStringContainsStringIgnoringCase($password,$login);


}

}




?>