<?php
declare(strict_types=1);//厳密な型つけ
require('Score.php');
require('MathScore.php');
require('EnglishScore.php');
require('User.php');

use Dotinstall\MyApp;
//Instance createdのみの表示がしたい場合（interfaceからtraitへ）
//traitとはinterfaceと同じようにクラスに組み込んで使えるけれども実装を含めることができる
trait LogTrait{//
    public function log(){
        echo "Instance created!" .PHP_EOL;
    }
}
//nameプロパティに数値が入った時にエラーではじいて欲しい

$user1 = new MyApp\User('Taro',new MathScore(70));
$user2 = new MyApp\User('Jiro',new EnglishScore(90));

echo $user1->getInfo() .PHP_EOL;
echo $user2->getInfo() .PHP_EOL;