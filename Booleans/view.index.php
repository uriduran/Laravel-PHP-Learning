<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booleans</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>



        <h1>Task for the day.</h1>
        <ul>
            <?php foreach($task as $heading => $value) : ?>

                <li> 
                    <!--ucwords capitalizes first letter.-->
                    <strong> <?= ucwords($heading); ?> </strong> <?= $value ?>
                </li>
                
                <?php endforeach; ?>

        </ul>


    
    </body>

</html>