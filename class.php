<?php
class Item{
    private $name;
    private $icon;
    private $cost;

    
    public function __construct($name, $icon) {
        $this->name=$name;
        $this->icon=$icon;
        
    }
    
    // // プロパティを取り出す。
    public function getName() {
         return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }
    
    public function getCost() {
        return $this->cost;
    }
    

    // $costプロパティ変更する。
    public function setCost($cost_new) {
        $this->cost=$cost_new;
    }

    
}

// インスタンス
$food= new Item("食費","fa fa-cutlery");
$housing= new Item("住居費","fa fa-home");
$utility= new Item("水道光熱費","fa fa-plug");
$internet= new Item("通信費","fa fa-tablet");
$medical= new Item("医療費","fa fa-medkit");
$daily= new Item("日用雑費","fa fa-shopping-cart");
$socializing= new Item("交際費","fa fa-group");
$saved= new Item("貯蓄費","fa fa-database");

// foreach文の配列
$items=array($food, $housing, $utility, $internet, $medical, $daily, $socializing, $saved);

// 集計の変数を定義
$totalCost=0; 
?>