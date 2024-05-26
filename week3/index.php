<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
    $hour = date('H');
    if ($hour < 12){
        echo "Good Morning!";
    }
    else{
        echo "Good Afternoon!";
    }
    ?>
</body>
</html>