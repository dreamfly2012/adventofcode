<?php


$fp = fopen("input.txt", "r");
$total = 0;
$max =0;

while(!feof($fp)){
    $line = trim(fgets($fp));

    if(empty($line)){
       $max = $max > $total ? $max : $total; 
       $total = 0;
}else{
    $total += intval($line);
}
}

var_dump($max); 
fclose($fp);



