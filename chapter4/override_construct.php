<?php
// 親クラス
class User{
    public $name = "DAWN太郎";

    public function __construct(){
        echo 'Userクラスのコンストラクタが実行される<br>';
    }
}

// 子クラス
class Admin extends User{
    public function __construct(){
        echo 'Adminクラスのコンストラクタが実行される<br>';
    }
}

// インスタンス化
$admin = new Admin();
?>
