<h1>繰り返しの中にIFの組み合わせ</h1>

<?php
for ($i = 1; $i < 30; $i += 2) {
    if ($i % 3 == 0) {
        echo $i . "は3で割り切れる!";
    } else {
        echo $i . "は3で割り切れない...";
    }

    echo "<br>";
}
?>




<h1>繰り返しの中でさらに繰り返す組み合わせ</h1>

<ul>
    <?php
    echo "<br><br>";

    for ($x = 1; $x <= 3; $x++) {
        echo "xの値は{$x}ですが<br>";

        for ($y = 1; $y <= 5; $y++) {
            echo "yの値は{$y}となります。<br>";
        }

        echo "<br>";
    }
    ?>
</ul>
