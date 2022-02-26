
<h1>変数の基礎</h1>

<?php
$number = 8;   //数値の8を、numberという名前の変数に入れる

echo $number;
echo '<br>';
print $number;
?>




<h1>よくない変数名のつけ方</h1>

<?php
// $onamae;          ← ローマ字
// $2020year;        ← 数字から始まる
// $おなまえ; 　　　　← 日本語を入力
?>




<h1>定数</h1>

<?php
// 定数の宣言方法は２つあります。
const HOGE = 20;
define('HOGEHOGE', 30);

echo HOGE; // 20
echo "<br>";
echo HOGEHOGE; // 30
?>


<h1>変数と定数の違い</h1>

<?php
//変数は値を入れ替えられる
$number = 10;
echo $number;
echo "<br>";

$number = 8;
echo $number;
echo "<br>";

//定数は値を入れ替えられない
const HOGE02 = 10;
echo HOGE02;
echo "<br>";

const HOGE02 = 8; // HOGE02定数の値を変えようとした
echo Hoge02; // 変更されず、最初に入れた10が表示される
?>
