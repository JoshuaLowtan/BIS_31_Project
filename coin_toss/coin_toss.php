<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coin Toss Simulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7ff;
            padding: 30px;
        }

        .box {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #004080;
            text-align: center;
        }

        p {
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Coin Toss Simulation</h1>

    <?php
    $heads = 0;
    $tails = 0;

    for ($i = 0; $i < 100; $i++) {
        $flip = rand(0, 1); // 0 for Heads, 1 for Tails

        if ($flip === 0) {
            $heads++;
        } else {
            $tails++;
        }
    }

    echo "<p><strong>Heads:</strong> $heads times</p>";
    echo "<p><strong>Tails:</strong> $tails times</p>";
    ?>
</div>

</body>
</html>
