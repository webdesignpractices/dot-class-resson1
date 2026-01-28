<?php
abstract class Score{
    use Logtrait;//
    private $subject;
    protected $points; 

    public function __construct($subject,$points){
        $this->subject=$subject;
        $this->points=$points;
        $this->log();
    }

    // abstract protected function getResult(); 

    //     public function log(){
    //     echo "Instance created!:{$this->subject}" .PHP_EOL;
    // }
    public function getInfo(){
        return "{$this->subject},{$this->points},{$this->getResult()}";
    }
}