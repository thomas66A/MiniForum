<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <h1>login page</h1>
    <a href="index.php?page=wall">Page du mur</a><br><br>
    <form action="index.php" method="get">
    <label>Votre age: </label>
    <input type="text" name="age">
    <input type="submit">
    <input type="hidden" name="page" value="age">
    </form>
</body>
</html>