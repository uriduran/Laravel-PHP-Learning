<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Classes</title>
        <meta charset="UTF-8">
    </head>

        <ul>
            <?php foreach ($tasks as $task) : ?>

                <li>
                
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else: ?>

                    <?= $task->description; ?>

                    <?php endif; ?>

                </li>
            <?php endforeach ?>

        </ul>   

    <body>
            
    </body>
</html>