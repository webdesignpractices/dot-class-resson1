<?php
    namespace Dotinstall\MyApp;
    class User{ 
     use \LogTrait;//一番外側の階層にある LogTrait を使ってね
    private string $name;//文字列であってほしい
    private \Score $score;//クラス名がそのままデータ型になる。EnglishScore||MathScoreでもいい
    //  constructの返り値には型を指定してはいけないルール
    public function __construct(string $name,\Score $score){
        $this->name=$name;
        $this->score=$score;
        $this->log();
    }
    // public function log(){
    //     echo "Instance created!:{$this->name}" .PHP_EOL;
    // }
    public function getInfo():string{//返しているのは文字列
        return "{$this->name},{$this->score->getInfo()}";
    }
}