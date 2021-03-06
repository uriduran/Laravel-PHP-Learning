<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booleans</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <h1>Task for the day.</h1>

        <!--OTHER EXAMPLE ON HOW TO DO THIS-->
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title'];?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due'];?>
            </li>
            <li>
                <strong>Person Responsible: </strong> <?= $task['assigned_to'];?>
            </li>

            <!--Output the boolean Example-->
            <li>
                <strong>Status:</strong>
                    <?php
                        if($task['completed']) {
                            echo '&#9989;';
                        }else{
                            echo 'Incomplete';
                        }
                    ?>
            </li>
            <li>

                <!--Can Change it to this so that we are not echoing out a bunch of stuff-->
                <strong>Status:</strong>
                    <?php if ($task['completed']) : ?>
                        &#9989;
                    <?php else : ?>
                        Wrong
                    <?PHP endif; ?>

                <!--USEFUL: Outputs either 'Complete' or 'Incomplete' based on Boolean value.-->
                <!--<strong>Status:</strong> <//?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>-->
            </li>
        </ul>
    </body>
</html>