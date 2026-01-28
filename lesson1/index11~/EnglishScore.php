<?php
    class EnglishScore extends \Score{
    public function __construct($points){
        parent::__construct('English',$points);
    }
    protected function getResult(){ 
        return $this->points>=95? 'Pass':'Fail';
    }
}