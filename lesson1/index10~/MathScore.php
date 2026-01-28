<?php
class MathScore extends Score{
    public function __construct($points){
        parent::__construct('Math',$points);
    }
    protected function getResult(){ 
        return $this->points>=50? 'Pass':'Fail';
    }
}