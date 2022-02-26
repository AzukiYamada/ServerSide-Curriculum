
<h1>処理のエラー例</h1>

<?php
function tax($price, $number)
{
    $amount = $price * $number;
    $result = $amount * 1.10;
    return $result;
}

$a = '二千四百';
$b = 5;

echo 'お買い物の合計は<br>';
echo price($a, $b);
echo '円<br>' ;
echo 'でした～～。<br>';


// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// TRY/CATCH
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

// try {
//     エラーが起こる可能のある処理
//     ~
//     ~
// } catch (Exception $e) {
//     エラーが起こった際に行う処理
// }

?>

<h1>TRY/CATCHとTHROWの組み合わせ</h1>

<?php
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// THROW句
// ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
try {
    $a = '二千四百';
    $b = 5;

    if (is_int($a) && is_int($b)) {
        echo 'お買い物の合計は<br>';
        echo price($a, $b);
        echo '円<br>' ;
        echo 'でした～～。<br>';
    } else {
        throw new Exception('引数には数値以外を設定しないでください');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
