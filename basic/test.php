<?php declare(strict_types=1);

require_once('Controller.php');

// 親クラスの定義
abstract class ParentClass {
  protected $parent = "親クラスで定義";

  abstract public function parent_method1();

  public function parent_method2() {
    echo "親クラスメソッド2";
  }
}

// 子クラスの定義
class ChildrenClass extends ParentClass {
  protected $children = "子クラスで定義";
  public function parent_method1() {
    echo $this->children;
  }
}

$hoge = new ChildrenClass();
$hoge->parent_method1();