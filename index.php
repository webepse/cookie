<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom: </label>
            <input type="text" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="mail">E-mail: </label>
            <input type="email" name="email" id="mail">
        </div>
        <div class="form-group">
            <input type="submit" value="Envoyer">
        </div>
    </form>
    <?php
        if(isset($_COOKIE['nom']))
        {
            echo $_COOKIE['nom'];
        }

    ?>
</body>
</html>