<?php
require('Score.php');
require('MathScore.php');
require('EnglishScore.php');
require('User.php');


//Instance createdのみの表示がしたい場合（interfaceからtraitへ）
//traitとはinterfaceと同じようにクラスに組み込んで使えるけれども実装を含めることができる
trait LogTrait{//
    public function log(){
        echo "Instance created!" .PHP_EOL;
    }
}

//子クラスの作成


//子クラスの作成終了

$user1 = new User('Taro',new MathScore(70));
$user2 = new User('Jiro',new EnglishScore(90));

echo $user1->getInfo() .PHP_EOL;
echo $user2->getInfo() .PHP_EOL;