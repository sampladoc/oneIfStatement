<?php

$logicArray = array();
$resultsArray = array(0=>NULL,1=>"Linio", 2=>"IT", 3=>"Linianos");
for($i = 1; $i <= 100; $i++){
    $m3 = $i % 3 == 0;
    $m5 = $i % 5 == 0;
    //If if it is a multiple of 3 it returns true which is essentially 1
    $logicArray[0] = $m3;
    //The same thing happens here as above but to differentiate we multiply by 2
    $logicArray[1] = $m5*2;
    //The sum of the values in the array gives us the logical that is then matched with the results array
    if($resultsArray[array_sum($logicArray)] !== NULL){
        echo('<br>');
        echo $resultsArray[array_sum($logicArray)];
    }
   
}
