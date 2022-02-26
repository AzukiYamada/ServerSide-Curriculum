<h1>関数の基本</h1>
<?php
// 関数を用意する
function test1()
{
    echo "関数のサンプル集です。<br>";
    echo "上の文章とこの文章は、一つの関数内で実行されてます。<br>";
}
// 関数を実行する
test1();
?>


<h1>関数の引数</h1>
<?php
//test2関数を定義する
function test2($first, $second)
{
    echo "関数の{$first}です。<br>";
    echo "上の文章とこの文章は、一つの{$second}で実行されてます。<br>";
}

//test2関数を実行する
test2("引数解説", "関数と２つの引数");
?>


<h1>〇円の商品を〇個購入するときの税込み料金を計算する関数</h1>
<?php
function tax($price, $number)
{
    $amount = $price * $number;
    $result = $amount * 1.10;
    return $result;
}

$price = tax(1500, 5);
echo "税込みで{$price}円となります。";
?>


<h1>PHPで用意されている関数</h1>
<?php
$text = "abcde";
$array = [0, 1, 2];

echo "<p>strlen関数</p>";
$strlen = strlen($text);
echo "このテキストの文字数は{$strlen}です。<br>";

echo "<p>count関数</p>";
$count = count($array);
echo "この配列の要素数は{$count}です。<br>";
?>


<h1>ifの条件によく使われる関数</h1>
<?php
if (isset($title)) {
    echo "変数titleは存在しません。<br>";
}
$title = "dawn";
if (isset($title)) {
    echo "変数titleは存在します。<br>";
}
?>


<h1>ローカル変数とグローバル化</h1>
<?php
function name()
{
    $x = 3;
}
echo $x;
?>
