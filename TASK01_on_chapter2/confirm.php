<?php
// =========
// ↓ ➀index.htmlから「コース」と「人数」のデータに受け取れるかたちに変更しよう
// =========
$course = "";
$number_of_customers = "";
// =======
// ↓ ➁条件分岐を使って、４つのコースごとに予算,コース名,画像名を用意できるようにしよう
// =======
$price = 0;
if ($course == "〇〇") {
    $price = $number_of_customers; // 料金の計算
    $course_name = "";
    $image = "〇〇.jpg";
} else if ($course == "〇〇") {
    $price = $number_of_customers; // 料金の計算
    $course_name = "";
    $image = "〇〇.jpg";
} else if ($course == "〇〇") {
    $price = $number_of_customers; // 料金の計算
    $course_name = "";
    $image = "〇〇.jpg";
} else {
    $price = $number_of_customers; // 料金の計算
    $course_name = "〇〇";
    $image = "〇〇.jpg";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <header>
        <div class="header-content">
            <div class="float-left">
                <img src="images/logo-saba.png" alt="logo">
            </div>
            <div class="float-left">
                <h1>夜明け食堂 ~さばみそ~</h1>
            </div>
        </div>
    </header>

    <div id="content">
        <ul class="procedure">
            <li class="gray">コース選択</li>
            <li class="choice">予約手続き</li>
            <li class="light_gray">予約完了</li>
        </ul>

        <div class="confirm">
            <ul>
                <!-- ➂index.htmlから受け取った値を表示してみよう -->
                <li>
                    <span>コース</span><br>
                    <?php ?>
                </li>
                <li><span>人数</span><br>
                    <?php ?>名様
                </li>
                <li><span>合計金額</span><br>
                    ¥<?php ?> (税込み)
                </li>
            </ul>
            <figure class="image">
                <!-- ➂選んだコース画像を表示できるようにしよう -->
                <img src="<?php echo "images/" . "〇〇"; ?>">
            </figure>
        </div>

        <h3 class="center">上記の内容でお間違いがなければ、お客様情報をお願いいたします。</h3>
        <!-- ➃送信方法を決めましょう。 -->
        <form action="thanks.php">
            <ul class="user_info">
                <li>
                    <label>ご予約者名<span class="red">*</span></label>
                    <div>
                        <!-- ⑤入力項目を必須化させよう -->
                        <!-- ⑤プレースホルダを使って、氏名の箇所をわかりやすくしてみよう-->
                        <input type="text" name="last_name" class="name">
                        <input type="text" name="first_name" class="name">
                    </div>
                </li>
                <li>
                    <label>連絡可能な電話番号<span class="red">*</span></label>
                    <div>
                        <input type="tel" name="phone_number" class="phone_number" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}">
                        <input type="reset" value="情報をリセット" />
                    </div>
                </li>
                <!-- ➅送り先のthanks.phpに届けるために「見えないデータ」として、コース名・合計金額・画像ファイル名を配置してみましょう -->
                <input type="〇〇" name="course_name" value="<?php echo "コース名の変数"; ?>">
                <input type="〇〇" name="price" value="<?php echo "税込み料金の変数"; ?>">
                <input type="〇〇" name="image" value="<?php echo "画像の変数"; ?>">

                <input type="button" class="back" onclick="history.back()" value="変更する">
                <input type="submit" class="submit" value="予約を確定する">
            </ul>
        </form>
    </div>
</div>
</body>

</html>
