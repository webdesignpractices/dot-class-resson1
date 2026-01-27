<?php
//static
class User {
    public $name;//インスタンスプロパティ
    public $score;//インスタンスプロパティ
    private static $count = 0;//クラスプロパティ

    public function __construct($name,$score){
        $this->name=$name;
        $this->score=$score;
        User::$count++;
    }

    public static function getUserCount(){//static
        return User::$count;
    }
}

$user1 = new User('Taro',70);
$user2 = new User('Jiro',90);

//User::$count++; //これを無くしたいのでprivateにする
//echo User::$count .PHP_EOL;//そうするとこれもerrorになる

echo User::getUserCount() .PHP_EOL;