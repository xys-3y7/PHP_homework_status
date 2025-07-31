<?php
$itemName = "ປື້ມ PHP Basic";
$currentStock = 8;
$reorderLevel = 5;
$itemsSoldToday = 3;

$remainingStock = $currentStock - $itemsSoldToday;
echo "ສິນຄ້າ: " . $itemName . ", ຍັງເຫຼືອ: " . $remainingStock . " ໜ່ວຍ.";
echo "<br>";

if($remainingStock <= $reorderLevel){
    echo "ເຕືອນ: ສິນຄ້າ " . $itemName . " ຕ້ອງສັ່ງເພີ່ມ! ຍັງເຫຼືອພຽງ " . $remainingStock . " ໜ່ວຍ.";
} else {
    echo "ສິນຄ້າ " . $itemName . " ຍັງມີພຽງພໍ.";
}
?>