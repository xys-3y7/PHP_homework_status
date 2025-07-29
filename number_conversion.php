<?php
$input1 = "123";   
$input2 = 45.67;  
$input3 = "hello";
 
echo "<p>\$input1 is = $input1</p>";
if(is_numeric($input1)) {
    $input1 = (int)$input1;
    var_dump($input1);
} else {
    echo "\$input1 ບໍ່ແມ່ນຕົວເລກ <br>";
}

echo "<p>\$input2 is = $input2 </p>";
if(is_numeric($input2)) {
    $input2 = (int)$input2;
    var_dump($input2);
} else {
    echo "\$input2 ບໍ່ແມ່ນຕົວເລກ <br>";
}

echo "<p>\$input3 is = $input3 </p>";
if(is_numeric($input3)) {
    $input3 = (int)$input3;
    var_dump($input3);
} else {
    echo "\$input3 ບໍ່ແມ່ນຕົວເລກ <br>";
}
?>