<h1>WHILEを使った繰り返し処理</h1>

<?php

$i = 1;  //変数iに1を代入

//変数xが10を超えるまでループ
while ($i <= 10) {
   echo $i;
   $i++;  //変数iに1をプラス
}
?>



<h1>breakがある場合</h1>

<?php
$j = 1; //変数jに1を代入

//変数jが10を超えるまでループ
while ($j <= 10) {
    if ($j === 5) {
        break; //変数jが5の時に処理から抜ける
    }
    echo $j;
    $j++;
}
?>



<h1>continueがある場合</h1>

<?php
$k = 1; //変数kに1を代入

//変数kが10を超えるまでループ
while ($k <= 10) {
    if ($k == 5) {
       $k++; // これが先にないとずっと5のままになるため、必ず記入します。
       continue; //すぐに次のループへ入り、以下の処理は実行されない　　
    }
    echo $k;
    $y++;
}
?>
