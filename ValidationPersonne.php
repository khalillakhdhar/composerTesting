<?php
class ValidationPersonne
{
function validateNotEmpty($x)
{
    return $x!="";
}
function validateAge($age)
{
    return $age>18;
}
function validateCode($code)
{
    $longueur=strlen($code);
    if($longueur>=4 && $longueur<=6)
    return true;
    else 
    return false;
}
function VerifSexe($sexe)
{
    if((strcmp($sexe,'Homme')==0)||(strcmp($sexe,'femme')==0))
    return true;
    else 
    return false;
}
function verifAdresse($adresse)
{
    $mots=str_word_count($adresse);
    $longueur=strlen($adresse);
    if( $mots>=3 && $longueur>=10)
    return true;
    else 
    return false;
}
function verifEmail($email)
{
$pospoint=strpos($email,".");
$posat=strpos($email,"@");
$longueur=strlen($email);
$variationpoint=$longueur-$pospoint;
$variationat=$longueur-$posat;
if($variationpoint>=2&& $variationat>=4)
return true;
else 
return false;



}

}


?>