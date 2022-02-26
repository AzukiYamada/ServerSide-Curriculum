
<h1>IF文の基礎</h1>

<?php
$text = '条件分岐';
if ($text == '条件分岐') {
  echo $text;
}
?>



<h1>elseを加えた書き方</h1>

<?php
$number = 2;
$text = 'if文を学ぶ';
if ($number === 2 && $text === 'if文を学ぶ') {
  echo $text;
} else {
  echo $number;
}
?>



<h1>else ifを加えた書き方</h1>

<?php
$number = 2;
$text = 'if文を学ぶ';
if ($number === 2 && $text === 'if文を学ぶ') {
  echo $text;
} else if ($number ===  2 || $text === 'if文を学ぶ') {
  echo 'どちらかがあっている';
} else {
  echo $number;
}
?>



<h1>条件分岐の中に、条件分岐を入れる</h1>

<?php
$number = 2;
$text = 'if文を学ぶ';
$plus = 10 + 30;

if ($number === 2 && $text === 'if文を学ぶ') {
  if ($plus === 40) {
    echo $plus;
  }
}
?>
