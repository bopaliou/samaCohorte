<?php

function addition($a,$b){
    $result=$a+$b;
    echo $a.' + '.$b.' = '.$result;

}
function multiplication($a,$b){
    $produit=$a*$b;
    echo $a.' x '.$b.' = '.$produit;
}
function soustraction($a,$b){
    $soustraction=$a-$b;
    echo $a.' - '.$b.' = '.$soustraction;
}
addition(15,20);
multiplication(5,9);
soustraction(10,8);


?>