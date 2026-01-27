<?php
//子クラスに対して独自の点数判定ロジックを実装（メソッドのオーバーライド）
class Score {
    private $subject;
    protected $points; //子クラスでアクセスできるように

    public function __construct($subject,$points){
        $this->subject=$subject;
        $this->points=$points;
    }

    Protected function getResult(){ //子クラスでアクセスできるように
        return $this->points>=80? 'Pass':'Fail';
    }
    public function getInfo(){
        return "{$this->subject},{$this->points},{$this->getResult()}";
    }
}
//子クラスの作成
class MathScore extends Score{
    public function __construct($points){
        parent::__construct('Math',$points);//親クラスと同じように$subject,$pointsを渡したいときの書き方
    }
    protected function getResult(){ //子クラスでアクセスできるように
        return $this->points>=50? 'Pass':'Fail';
    }
}
class EnglishScore extends Score{
    public function __construct($points){
        parent::__construct('English',$points);
    }
    protected function getResult(){ //子クラスでアクセスできるように
        return $this->points>=95? 'Pass':'Fail';
    }
}
//子クラスの作成終了
class User {
    private $name;
    private $score;

    public function __construct($name,$score){
        $this->name=$name;
        $this->score=$score;
    }
    public function getInfo(){
        return "{$this->name},{$this->score->getInfo()}";
    }
}
$user1 = new User('Taro',new MathScore(70));
$user2 = new User('Jiro',new EnglishScore(90));

echo $user1->getInfo() .PHP_EOL;
echo $user2->getInfo() .PHP_EOL;