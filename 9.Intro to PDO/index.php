<?php 
require 'index.function.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);




require 'index.view.php';

