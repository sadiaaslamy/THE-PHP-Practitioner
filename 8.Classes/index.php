<?php 

class Todo {
    public $description;

    public $completed = false;

    public function __construct($description){
       $this->description = $description;
    }
    
    public function complete(){
        $this->completed = true;
    }


    public function isComplete(){
         return $this->completed;
    }
}

$todos = [
    new Todo('Learn PHP'),
    new Todo('Learn new language'),
    new Todo('Practice figma'),
    new Todo('Make new routine'),
];

$todos[0]->complete();
$todos[3]->complete();


require 'index.view.php';