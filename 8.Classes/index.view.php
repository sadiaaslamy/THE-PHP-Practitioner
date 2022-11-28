<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
    
    <style>
        header{
            background-color: gray;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
   <h1>My todos</h1>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php if($todo->completed) : ?>

                    <strike><?= $todo->description; ?></strike>

                <?php else: ?>

                    <?= $todo->description; ?>
                    
                <?php endif; ?>    
            </li>
        <?php endforeach; ?>
    </ul>

  
</body>
</html>