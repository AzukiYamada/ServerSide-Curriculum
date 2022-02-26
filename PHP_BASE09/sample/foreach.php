<h1>FOREACHを使った繰り返し処理</h1>

<?php

// 配列
$array = [
    1, 2, 3
];

foreach ($array as $value) { //$array配列の要素1つずつがforeach内でのみ使える変数$valueとして使えるようになる
    echo $value;　　　　　//$arrayに入っている値を順番に表示できる
    echo "<br>";
}

echo '<br>';

// 連想配列
$fruits = [
    "りんご" => "apple", "ばなな" => "banana", "ぶどう" => "grape", "みかん" => "orange"
];

// 連想配列を順に使う
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo '<br>';

// 連想配列
$fruits = [
    "りんご" => "apple", "ばなな" => "banana", "ぶどう" => "grape", "みかん" => "orange"
];

// 配列,連想配列のキーも変数として使う
foreach ($fruits as $key => $value) {
    echo "キーは「" . $key . "」<br>";
    echo "値は「" . $value . "」<br>";
}
