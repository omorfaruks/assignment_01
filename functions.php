<?php

function headLine(){
    echo "<h1>Assignment Headline for now.</h1>";

};

function ageNumber( $age){
    echo "My name is omar Faruk. I am <strong>{$age}</strong> years old.";

};
  

function resultIndex(){

    $marks = 70;

    if($marks >= 0 && $marks <= 32){
        echo "<h5> F Grade</h5>";
    }else if ($marks >= 33 && $marks < 40){
        echo "<h5> D Grade</h5>";
    }else if($marks >= 40 && $marks < 60){
        echo "<h5> D Grade</h5>";
    }else if ($marks >= 60 && $marks < 70){
        echo "<h5> C Grade</h5>";
    }else if($marks >= 70 && $marks < 80){
        echo "<h5> B Grade</h5>";
    } else if($marks >= 80 && $marks < 90){
        echo "<h5> A Grade</h5>";
    }else if($marks >= 90 && $marks < 100){
        echo "<h5> A+ Grade</h5>";
    } else{
        echo "<h5> Invalid Result</h5>";
    }

}


function currencyIndex(){

$amount = 500;
$type = 'USD';

switch($type){
    case 'USD':
    $rate = 86.24;
    break;

    case 'CAD':
    $rate =68.42;
    break;

    case 'POUND':
    $rate = 113.68;
    break;

    case 'EURO':
    $rate = 95;
    break;

    case 'WON':
    $rate = 0.71;
    break;

    default :
    $rate = 0;
    break;

}
$bdt = $amount * $rate;
echo " $ {$amount} = {$bdt} TK";
}


function getAreaIndex( $type = 'r', $length, $wight = null){
    $rate ='';
    $area_type = '';
    
    switch ($type) {
        case 'r':
        $area = $length * $wight;
        $area_type = 'Rectangle';
        break;

        case 'S':
        $area = $length * $length;
        $area_type = 'Square';
        break;

        case 't':
        $area = .5 * ($length * $wight);
        $area_type = 'Triangle';
        break;

        case 'c':
        $area = 3.1416 * ($length * $length);
        $area_type = 'Circle';
        break;
        
        default:
        $area = 'undefined';
        $area_type = 'undefined';
        break;
    }
 return " Area of this {$area_type} is {$area}";
}
?>