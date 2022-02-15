<?php

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae delectus autem praesentium consectetur vitae minima laudantium, eaque nam id sit recusandae nemo hic iste. Autem, est ab. In, et quos.";

    $censuredWord = $_GET['word'];
    $censuredReplacement = str_replace($censuredWord, '***', $text);

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
    <p>
        <?php echo $text ?>
        (
            <?php echo strlen($text) ?>
        )
    </p>

    <p>
        <?php echo $censuredReplacement ?>
        (
            <?php echo strlen($censuredReplacement) ?>
        )
    </p>
</body>
</html>