<?php
/**
 * Created by PhpStorm.
 * User: ingemar.lilium
 * Date: 14.02.2018
 * Time: 9:39
 */

class Task{
    public $title;
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->title;
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Title', 'Task description');
$task->complete();
echo $task->title . ": " . $task->description;

echo '<pre>';
print_r($task);


































































