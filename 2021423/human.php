<?php

class Human{

private $run;
public $name;

public function __consturct($name){
$this->name = $name;
}
public function setRun(Runner $runner){
$this -> run = $runner;
}
public function getRun():Runner{
    return $this->run;
}
}
?>