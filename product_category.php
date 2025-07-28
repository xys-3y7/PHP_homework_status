<?php
$category = "electronics";

switch($category){
    case "electronics":
        echo "ຊອກຫາເຄື່ອງໃຊ້ໄຟຟ້າລ່າສຸດໄດ້ທີ່ນີ້!";
        break;
    case "books":
        echo  "ໂລກແຫ່ງຄວາມຮູ້ກໍາລັງລໍຖ້າທ່ານຢູ່.";
        break;
    case "clothing":
        echo  "ແຟຊັ່ນລ່າສຸດສໍາລັບທຸກເພດທຸກໄວ.";
        break;
    case "food":
        echo  "ອາຫານແຊບໆສໍາລັບທຸກຄົນ.";
        break;
    default:
    echo "ປະເພດສິນຄ້າບໍ່ພົບ.";
}
?>