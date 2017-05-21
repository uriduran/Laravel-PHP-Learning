<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <ul>

        <!--Gets the key (feature) and the value (value) from an ass array-->
        <?php foreach ($person as $feature => $val) : ?>

        <li> <?= $feature ?> </li>

        <?php endforeach; ?>

        </ul>
    
    </body>


</html>
