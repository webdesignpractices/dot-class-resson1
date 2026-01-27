<?php
//privateメソッドとは
class User{
    public $name;
    private $score;

    public function __construct($name,$score){
        $this->name=$name;
        $this->score=$score;
    }

    public function getInfo(){
        return "{$this->name},{$this->score},{$this->getResult()}";
    }

    public function setScore($score){
        if($this->score<0||$this->score>100){
            echo "Invalid score!" .PHP_EOL;
            return;
        }
            $this->score=$score;
    }

    public function getScore(){
        return $this->score;
    }
    private function getResult(){//クラスの中でしか使わないメソッドにprivateを付けることができる
        if($this->score>80){
            return "Pass";
        }else{
            return "Fail";
        }
    }
}

$user1 = new User('Taro',70);
$user2 = new User('Jiro',90);

echo $user1->getInfo() .PHP_EOL;
echo $user2->getInfo() .PHP_EOL;

// echo $user1->getResult() .PHP_EOL;　getResultメソッドにprivateをつけたのでエラーになる
// echo $user2->getResult() .PHP_EOL;

