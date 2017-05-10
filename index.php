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
    <header>
    
     <?php echo "Hello, " . htmlspecialchars($_GET['name']); ?>

    </header>
    
    </body>
</html>
