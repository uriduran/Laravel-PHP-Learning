<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            header{
                background: grey;
                padding: 2em;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <?php echo "test" ?>
        <ul>
            <!--Method One for listing an array. SLOPPY-->
            <?php 
                foreach($names as $name){
                    echo "<li>$name</li>";
                }
            ?>

            <!--Method Two Prefered-->
               <?php foreach($names as $name): ?>

               <li> <?php echo $name; ?> </li>

               <?php endforeach; ?>

        </ul>
    </body>
</html>