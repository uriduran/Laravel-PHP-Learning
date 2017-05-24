<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php require "Tests.php"; ?>

    <h1>Insert your name and your age</h1>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value=""><br><br>
        <label for="age">Age:</label>
        <input type="text" name="age" value="">
        <input type="submit">
    </form>

    <?php require "echo.php"; ?>
    
    </body>
</html>
