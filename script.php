<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['censored-word'];
$replaced = "@*#";
$testo_censurato = str_replace($word, $replaced, $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <!-- SEZEIONE TESTO INIZIALE -->
    <h2>Il tuo testo</h2>
    <?php
    echo "Il tuo testo contiene: " . strlen($paragraph) . " parole"
    ?>
    <p>
        <?php
        echo $paragraph;
        ?>
    </p>

    <!-- SEZIONE TESTO CENSURATO -->
    <h2>Il tuo testo con le censure</h2>
    <?php
    echo "Il tuo testo con le censure contiene: " . strlen($testo_censurato) . " parole"
    ?>
    <p>
        <?php
        echo $testo_censurato;
        ?>
    </p>



</body>

</html>