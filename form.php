<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Document</title>
</head>
<body>
<section id="resaults">
    <div id="rubrik">
        <h1>Resultat</h1>
    </div>

    <div id="resultat">
        <?php echo $_POST["name"]; ?>
        <?php echo $_POST["lastname"]; ?> <br>
        <?php echo $_POST["bday"]; ?> <br>
        <?php print $_POST["file"]; ?> <br>
        </div>
    </section>
</body>
</html>