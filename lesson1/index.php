<?php
class User{
    public $name;
    private $score;//3_クラスの外からアクセスできなくなる

    public function __construct($name,$score){ //関数をメソッド、newするときに実行される特殊なメソッドをコンストラクタという
        $this->name=$name;
        $this->score=$score;
    }

    public function getInfo(){
        return "{$this->name},{$this->score}";
    }
    //setter
    public function setScore($score){
        if($score<0 || $score>100){
            echo 'Invalid score!' .PHP_EOL;
            return;
        }
        $this->score=$score;
    }
    //getter
    public function getScore(){
        return $this->score;
    }
}

$user1=new User('Taro',70);
// $user1->name='Taro'; //constructで簡潔に
// $user1->score=70;
$user2=new User('Jiro', 90);
// $user2->name='Jiro';
// $user2->score=90;
//$user1->score=900;//3_口約束に過ぎない
//$user1->setScore(900); //scoreが変な値でないかチェック
$user1->setScore(50);
echo $user1->getScore() .PHP_EOL;
echo $user2->getScore() .PHP_EOL;
echo $user1->getInfo() .PHP_EOL;
echo $user2->getInfo() .PHP_EOL;

// echo $user1->name .PHP_EOL;//getInfoで簡潔に
// echo $user1->score .PHP_EOL;
// echo $user2->name .PHP_EOL;
// echo $user2->score .PHP_EOL;