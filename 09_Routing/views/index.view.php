
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Classes</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <nav>
            <ul>
                <li><<a href="/views/about.php"></a></li>
                <li><<a href="/views/acontact.php"></a></li>

            </ul>
        </nav>

        <!--It will now fetch from the DB and not from an array-->
        <ul>
            <?php foreach ($tasks as $task) :?>
            <!--Goes through fetched array and defines them as $task-->
                <li>
                
                    <?php if ($task->completed) : ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else : ?>

                    <?= $task->description; ?>

                    <?php endif; ?>

                </li>
            <?php endforeach ?>
        </ul>   
            
    </body>
</html>
