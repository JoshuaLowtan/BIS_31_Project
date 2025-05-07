<?php
$val1 = rand(1, 27);
$val2 = rand(1, 178);
$val3 = rand(1, 600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Values</title>
    <style>
        body {
            background-color: #eef7ff;
            font-family: Verdana, sans-serif;
            padding: 40px;
            color: #333;
        }

        .box {
            background-color: #ffffff;
            border: 1px solid #ccddee;
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.06);
        }

        h2 {
            color: #003366;
        }
    </style>
</head>
<body>

    <div class="box">
        <h2>Random Numbers</h2>
        <p>1 to 27: <strong><?= $val1 ?></strong></p>
        <p>1 to 178: <strong><?= $val2 ?></strong></p>
        <p>1 to 600: <strong><?= $val3 ?></strong></p>
    </div>

</body>
</html>
