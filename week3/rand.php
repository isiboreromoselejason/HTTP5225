<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hour = rand(1,24);
        echo $hour;

        if ($hour >= 1 && $hour < 10) {
            echo ' Good Morning!';
        } else if ($hour >= 12 && $hour < 18) {
            echo ' Good Afternoon!';
        } elseif ($hour >= 18 && $hour < 23) {
            echo ' Good Evening!';
        } else {
            echo ' Good Night!';
        }

?>
</body>
</html>