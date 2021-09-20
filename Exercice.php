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
    $password="Log";
    $this->assertStringContainsStringIgnoringCase($password,$login);


}
/** @test */
public function veriflogin()
{
    $login="myfavoritelogin";
    $this->assertGreaterThan(8,strlen($login));
}
/** @test */
function verifMdp()
{
    $mdp="myfavoritepassword";
    $this->assertGreaterThan(10,strlen($mdp));
}
/** @test */
public function testDateDiff()
{
    $date1=new DateTime('2021-01-01 00:00:00');
    $date2=new DateTime('2021-01-01 00:00:03');
    $this->assertNotEquals($date1->getTimestamp(),$date2->getTimestamp());
}
}




?>