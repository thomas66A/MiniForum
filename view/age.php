<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Age</title>
</head>
<body>
    <h1>Page age</h1>
    <a href="index.php?page=wall">Page du mur</a><br><br>
    <a href="index.php?page=login">Page du login</a><br><br>
    <p>Vous avez <?php echo $age."ans et vous etez " . $majeur;?><p><br>
    <p> il y a eu <?php echo $visite;?> sur ce site web</p>
</body>
</html>