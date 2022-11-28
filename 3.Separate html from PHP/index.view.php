<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background: black;
            color: white;
            padding: 1em;
            margin: 0;
            font-size: 15px;
        }
    </style>
</head>
<body>
    
      <header>
        <h1>
            <?php 
              echo "Bootcamp: {$bootcampName}";
              echo "<br>";
              echo "Introduction: {$introduction}";
            ?>
        </h1>
      </header>


</body>
</html>