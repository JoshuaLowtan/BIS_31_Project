<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paycheck Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7fbff;
            padding: 30px;
        }

        .result-box {
            max-width: 400px;
            margin: auto;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #004080;
            text-align: center;
        }

        p {
            font-size: 18px;
            color: #222;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $hours = isset($_POST["hours"]) ? floatval($_POST["hours"]) : 0;
            $rate = isset($_POST["rate"]) ? floatval($_POST["rate"]) : 0;
            $total = $hours * $rate;

            echo "<h2>Paycheck Result</h2>";
            echo "<p><strong>Hours Worked:</strong> $hours</p>";
            echo "<p><strong>Rate of Pay:</strong> \$$rate</p>";
            echo "<p><strong>Total Paycheck:</strong> \$" . number_format($total, 2) . "</p>";
        } else {
            echo "<p>Invalid form submission. Please go back and try again.</p>";
        }
        ?>
    </div>
</body>
</html>
