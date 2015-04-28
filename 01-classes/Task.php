<?php

class Task {
    public $description;

    public function __construct($description){
        $this->description = $description;
    }
}

$task = new Task('alo');
$task2 = new Task('alo2');


var_dump($task);
var_dump($task2);