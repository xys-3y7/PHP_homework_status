<?php
$userLevel = "contributor";

switch($userLevel){
    case "admin":
        echo "ສາມາດຈັດການຜູ້ໃຊ້ທັງໝົດ.";
    case "editor":
        echo "ສາມາດເຜີຍແຜ່ບົດຄວາມ.";
    case "contributor":
        echo  "ສາມາດຂຽນບົດຄວາມ.";
    case "subscriber":
        echo "ສາມາດເບິ່ງເນື້ອຫາພິເສດ.";
    case "guest":
        echo "ສາມາດເບິ່ງເນື້ອຫາສາທາລະນະ.";
        break;
    default:
    echo "ບໍ່ຮູ້ລະດັບຜູ້ໃຊ້.";
    break;
    }
?>