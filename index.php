<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>
    <?php echo "PHP & MariaDB"; ?>
    </h1>

    <h1 style="color:blue;">
        <?php echo "สิ่งที่ต้องติดตั้ง:"; ?>
    </h1>

    <ul>
        <?php
            $string = ["Apache", "PHP", "MariaDB"];

            echo "<li>$string[0]</li>";
            echo "<li>$string[1]</li>";
            echo "<li>$string[2]</li>";

        ?>
    </ul>

    <?php
        echo "<b>ให้นักเรียนค้นหาผลลัพธ์ของตัวแปร:</b>"."</br>";

        echo "ค้นหา: (ชื่อตัวแปร:$p) ผลลัพธ์ล่าดับที่ (ชื่อตัวแปร:$b) - (ชื่อตัวแปร:$n) จากทั้งหมด (ชื่อตัวแปร:$t)"."</br>"."</br>"."***ชื่อตัวแปรนักเรียนสามารถตั้งเป็นอย่างอื่นได้โดยไม่ผิดหลักค่าสงวนการตั้งค่าตัวแปร***"."</br>"."</br>"."</br>"."</br>";

        $p = "php marinadb";
        $b = "1";
        $n = "10";
        $t = "1000";

        echo "<b>ผลลัพธ์ที่ได้:</b>"."</br>";
        echo "ค้นหา: ".$p." ผลลัพธ์ลำดับที่ ".$b." - ".$n." จากทั้งหมด ".$t;
    ?>

</body>
</html>
