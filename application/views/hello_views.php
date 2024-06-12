<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Sulaiman , 2110020038</title>
</head>

<body>
    <h3>Selamat datang di web <?= $nama ?> - <?= $npm ?> </h3>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>
</body>

</html>