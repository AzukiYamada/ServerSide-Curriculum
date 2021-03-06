<?PHP
// ➀confirm.phpからPOSTで６つの値を受け取れるようにしましょう。






?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>

<body>
    <div class='wrapper'>
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
            <li class="light_gray">予約手続き</li>
            <li class="choice">予約完了</li>
        </ul>

        <div class="message">
            <h2>ご予約ありがとうございます</h2>
            <p class="thanks">以下の内容で承りました。ご来店お待ちしております。</p>
        </div>

        <!-- ➁confirm.phpから受け取ったデータを表示しましょう。 -->
        <div class="app_content confirm">
            <ul>
                <li>
                    <span class="blue">ご予約者名</span><br>
                    <?php echo ""."" ;?> 様
                </li>
                <li>
                    <span class="blue">ご連絡可能な電話番号</span><br>
                    <?php  ?>
                </li>
                <li>
                    <span class="blue">コース</span><br>
                    <?php  ?>
                </li>
                <li>
                    <span class="blue">合計金額</span><br>
                    ¥<?php ?>(税込み)
                </li>
            </ul>
            <figure class="image">
                <img src="<?php echo "images/"."画像を格納した変数"; ?>">
            </figure>
        </div>
        <!-- ➂最初のindex.htmlに戻るリンクを書こう -->
    </div>
    </div>
</body>

</html>