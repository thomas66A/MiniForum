<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wall</title>
</head>
<body>
    <h1>Wall page</h1>
    <p>Utilisateur: </p><?php echo $user[0] . " Email: " . $user[1]."<br>Description: " . $description;?></p>
    <a href="index.php?page=login">Page du Login</a>
</body>
</html>