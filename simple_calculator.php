<?php
$num1 = 10;
$num2 = 5;
$operator = "+";
$result = 0;

switch($operator){
    case "+":
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result";
        break;
    case "-":
        $result = $num1 - $num2;
        echo "$num1 + $num2 = $result";
        break;
    case "*":
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result";
        break;
}
?>