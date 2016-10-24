<?php



$x = 1;
$y = 1;
$z = 9;
$a = 1;

/*
for ($x=1 ; $x <= 6 ; $x++) {
    for ($y=1 ; $y <= $v ;$y++){
        
        echo "*" ;
    }
    echo "<br>";
}
*/

/*

for ($x=0 ; $x <= 10 ; $x++) {
    for ($y=0 ; $y <= $x ;$y++){
        echo "*";
    }
    echo "<br>";
}
*/


for ($x=1 ; $x <= 10 ; $x++) {

    for ($y=1 ; $y <= $z ;$y++){
        
        echo "&nbsp&nbsp" ;
    }
    $z-- ;
       
    for ($a= 1 ; $a <= $x ; $a++){
        echo "*";
    }
    echo "<br>";
}






?>
