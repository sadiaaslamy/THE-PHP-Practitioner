<?php

$tasks = [
    'Title' => 'Language assignment',
    'Due' => '27.11.2022',
    'Assigned_to' => 'Mrs.Mahrokh Samadi',
    'Completed' =>  true
];

unset($tasks['Due']);
require 'index.view.php';