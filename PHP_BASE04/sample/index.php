<!--
===== 変数と文字列の連結 =====
-->
<h1>変数と文字列の連結</h1>

<?php
$number = 8;

echo "計算結果は「" . 8 . "」になりますね！"; // 数値と文字列の連結 出力結果→"計算結果は「8」になりますね！"
echo '<br>';
echo 8 . $number; // 数値と変数の連結 出力結果→"88"
echo '<br>';
echo "計算結果は「" . $number . "」になりますね！"; // 文字列と変数の連結 出力結果→"計算結果は「8」になりますね！"
?>


<!--
===== 変数と数値の計算 =====
-->
<h1>変数と数値の計算</h1>

<?php
$number = 8;
echo $number + 10;  //18と表示される
?>


<h1>計算式の記述１</h1>
<?php
// 計算式の別の記述方法

$number = $number + 10; // 省略した形 $number += 10
$number = $number - 10; // 省略した形 $number -= 10
$number = $number * 10; // 省略した形 $number *= 10
$number = $number / 10; // 省略した形 $number /= 10
$number = $number % 10; // 省略した形 $number %= 10
$num = 7;
echo $num += 10;  //　17と表示されます。
?>


<h1>計算式の記述２</h1>

<?php
// $number = $number + 1; // 省略した形 $number++;
// $number = $number - 1; // 省略した形 $number--;

$x = 10;
$y = 10;

echo ++$x; //11が表示される
echo '<br>';
echo $y++; //10が表示されて、そのあとに1が追加される
?>
