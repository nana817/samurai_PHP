<?php 
#carというクラスを作成する
class Car
{
    static $class_name = "Car";
    
    function init(){
        $this->name = "";
    }
    public function show() {
        print($this->name . "\n");
        
    }
}
#Carクラスのインスタンスを作成する
$car = new Car();

#Carのインスタンス変数nameにセダンという文字列を格納する
$car->name = "セダン";

#Carのメソッドであるshow()を実行する
$car->show();
#ターミナルにはセダンと表示される

#carクラス内にあるクラス変数class_nameをターミナルに表示する
print(Car::$class_name);
#ターミナルにはcarと表示される
