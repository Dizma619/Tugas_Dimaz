<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color:rgb(234, 235, 232);
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$baris = 5; // jumlah baris

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>