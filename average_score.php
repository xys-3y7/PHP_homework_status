<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $mathScore = 85;
        $physicsScore = 78.5;
        $chemistryScore = 92;
        $averageScore = ($mathScore + $physicsScore + $chemistryScore)/3;
        echo "ຄະແນນສະເລ່ຍຂອງທ່ານແມ່ນ: $averageScore";
        var_dump($averageScore);
?>
    </pre>
</body>
</html>