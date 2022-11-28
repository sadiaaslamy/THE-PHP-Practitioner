<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background: darkblue;
            color: white;
            padding: 3em;
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?= "Title:  ". htmlspecialchars($_GET['title']); ?>
        </h1>
    </header>
</body>
</html>
