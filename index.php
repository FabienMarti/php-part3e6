<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
           for ($i=20; $i >= 0; $i--) { 
            echo('C\'est presque bon' . '(' . $i . '), ' );
        }
        ?>
    </p>
</body>
</html>