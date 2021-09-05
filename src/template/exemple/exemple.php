<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    page d'exemple

    <br>

    <?php 
     
        foreach($params['films'] as $film){
            echo $film->name .'<br>';
            echo $film->year .'<br>';
            echo $film->text .'<br>';
            echo "<hr>";
        }
    ?>

</body>
</html>