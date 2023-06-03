<?php

function myCalculator($num01, $oper, $num02) {
    $Sum;
    switch ($oper) {
        case "add":
            $Sum = $num01 + $num02;
            break;
        case "sub":
            $Sum = $num01 - $num02;
            break;
        default:
            $Sum = "There was an error";
            break;
    } 
    return $Sum;
}

$num01 =$_GET["num01"];
$oper =$_GET["oper"];
$num02 =$_GET["num02"];

$Sum = myCalculator($num01, $oper, $num02);


echo "Value: " . $Sum;

?>


