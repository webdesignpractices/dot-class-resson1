<?php
    class User{ 
     use Logtrait;//
    private $name;
    private $score;

    public function __construct($name,$score){
        $this->name=$name;
        $this->score=$score;
        $this->log();
    }
    // public function log(){
    //     echo "Instance created!:{$this->name}" .PHP_EOL;
    // }
    public function getInfo(){
        return "{$this->name},{$this->score->getInfo()}";
    }
}