<?php



$x = 1;
$y = 1;
$z = 7;
$a = 1;
$b = 1;
$c = 3;
for ($x=1 ; $x <= 4 ; $x++) {
    

    for ($y=1 ; $y <= $x ;$y++){
        echo "*";
    }
    echo "<br>";
}

for ($a=1 ; $a <= 3 ; $a++) {

    for ($b=1 ; $b <= $c ;$b++){
        
        echo "*" ;
    }
    $c--;
    echo "<br>";
}

?>
