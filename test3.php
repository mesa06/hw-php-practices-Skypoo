<?php

$d = $_POST ["day"];

$ma = array(31,28,31,30,31,30,31,31,30,31,30,31);

$mb = array(31,29,31,30,31,30,31,31,30,31,30,31);


$Total = 0 ;    
    
for($i=0 ; $i <=2 ; $i++) {
    
$Total+= $ma[$i];
        
}
    


echo $d+$Total;

?>

<html>
<head>
    
</head>
<body>
    
    <input type = "text" id = "day" value = ""> 
    
</body>
    
    
</html>