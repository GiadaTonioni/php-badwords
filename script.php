<?php

    $parola = $_POST['parola'];
    $paragrafo = $_POST['paragrafo'];

    echo $parola;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $paragrafo ?>
    </h1>
    <h1>
        <?php echo "questo paragrafo è lungo:".strlen($paragrafo)."caratteri" ?>
    </h1>
    <h1>
        <?php echo str_replace($parola, '***', $paragrafo) ?>
    </h1>
</body>
</html>