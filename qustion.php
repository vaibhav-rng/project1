<?php
    require 'questionController.php';
    $question=getQuestion(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php foreach($question as $question):?>
           <h5><?php echo $question['question'] ?></h5> 
        <?php endforeach ?>
    </h1>
</body>
</html>