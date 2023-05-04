<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <form action="script.php" method="GET">
        <div>
            <label for="paragraph">Inserisci il testo</label>
            <textarea type="text" id="paragraph" name="paragraph"></textarea>
        </div>

        <div>
            <label for="censored-word">Inserisci la parola da censurare</label>
            <input type="text" id="censored-word" name="censored-word">
        </div>

        <button type="submit">Invia</button>
        <button type="reset">Annulla</button>
    </form>
</body>

</html>
