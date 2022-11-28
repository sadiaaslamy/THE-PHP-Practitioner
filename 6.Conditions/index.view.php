<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <h2>Tasks</h2>
        <li>
            <strong>Title: </strong> <?= $tasks['title']; ?>
        </li>    

        <li>
            <strong>Due: </strong> <?= $tasks['due']; ?>
        </li> 

        <li>
            <strong>Assigned to: </strong> <?= $tasks['assigned_to']; ?>
        </li> 

        <li>
            <strong>Status: </strong> 
            <?php if($tasks['completed']) : ?>
                  <span class="icon">&#9989;</span>
            <?php else : ?>
                   <span class="icon">&#xf273;</span>      
            <?php endif; ?>    
        </li> 

        <li>
            <strong>Submit: </strong> 
            <?php if(! $tasks['submit']) : ?>
                  <span class="icon">&#xf273;</span>
            <?php else : ?>
                   <span class="icon">&#9989;</span>      
            <?php endif; ?>    
        </li> 

        
    </ul>
</body>
</html>