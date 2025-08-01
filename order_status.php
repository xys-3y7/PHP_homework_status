<?php
$orderStatus = "pending";

if($orderStatus == "pending"){
    echo "ຄໍາສັ່ງຊື້ຂອງທ່ານກໍາລັງລໍຖ້າການດໍາເນີນງານ.";
} elseif($orderStatus == "shipped"){
    echo "ຄໍາສັ່ງຊື້ຂອງທ່ານຖືກສົ່ງອອກແລ້ວ.";
} elseif($orderStatus == "delivered"){
    echo "ຄໍາສັ່ງຊື້ຂອງທ່ານຖືກສົ່ງຮອດແລ້ວ.";
} else{
    echo "ສະຖານະຄໍາສັ່ງຊື້ບໍ່ຮູ້ຈັກ.";
}
?>