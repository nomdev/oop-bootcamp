<?php

class Task {
    public $description;
    public $completed = false;

    public function __construct($description){
        $this->description = $description;
    }


    public function complete(){
        $this->completed = true;
    }

}

    $task = new Task('alo');
        var_dump($task);
    $task->complete();
        var_dump($task->completed);

    $task2 = new Task('alo2');
    var_dump($task2);