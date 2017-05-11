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
                    <strong> <?= ucwords($heading); ?>: </strong> <?= $value ?>
                </li>
                
                <?php endforeach; ?>

        </ul>


        <!--OTHER EXAMPLE ON HOW TO DO THIS-->

        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title'];?>
            </li>

            <!--Output the boolean Example-->
            <li>
                <!--USEFUL: Outputs either 'Complete' or 'Incomplete' based on Boolean value.-->
                <strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
            </li>



        </ul>



    
    </body>

</html>