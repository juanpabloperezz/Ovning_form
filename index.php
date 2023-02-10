<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body>
    <section>
        <div id="Rubrik">
            <h1>PHP FORM</h1>
        </div>
    </section>

    <section id="menu">
        <div id="form_menu">
            <form action="form.php" method="post">
                <br>
                <br>
                First name: <input type="text" name="name">
                <br>
                <br>
                last name: <input type="text" name="lastname">
                <br>
                <br>
                birthday: <input type="text" name="bday">
                <br>
                <br>
                <input type="file" accept="image/png, image/jpeg, image/webp" name="file">
                <br>
                <br>
                <input type="submit" value="show">
            </form>
        </div>
    </section>
</body>
</html>