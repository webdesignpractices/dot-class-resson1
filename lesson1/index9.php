<?php
//Instance createdのみの表示がしたい場合（interfaceからtraitへ）
//traitとはinterfaceと同じようにクラスに組み込んで使えるけれども実装を含めることができる
trait LogTrait{//
    public function log(){
        echo "Instance created!" .PHP_EOL;
    }
}
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
//子クラスの作成
class MathScore extends Score{
    public function __construct($points){
        parent::__construct('Math',$points);
    }
    protected function getResult(){ 
        return $this->points>=50? 'Pass':'Fail';
    }
}
class EnglishScore extends Score{
    public function __construct($points){
        parent::__construct('English',$points);
    }
    protected function getResult(){ 
        return $this->points>=95? 'Pass':'Fail';
    }
}
//子クラスの作成終了
class User{ 
     use Logtrait;//
    private $name;
    private $score;

    public function __construct($name,$score){
        $this->name=$name;
        $this->score=$score;
        $this->log();
    }
    // public function log(){
    //     echo "Instance created!:{$this->name}" .PHP_EOL;
    // }
    public function getInfo(){
        return "{$this->name},{$this->score->getInfo()}";
    }
}
$user1 = new User('Taro',new MathScore(70));
$user2 = new User('Jiro',new EnglishScore(90));

echo $user1->getInfo() .PHP_EOL;
echo $user2->getInfo() .PHP_EOL;