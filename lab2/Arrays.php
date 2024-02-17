<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Links and Arrays</h1>
    
    <p>Use PHP echo and arrays to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$link['name'].'</h1>';
    echo '<h1>'.$link['url'].'</h1>';
    echo '<h1>'.$link['image'].'</h1>';
    echo '<h1>'.$link['description'].'</h1>';

    ?>
</body>
</html>