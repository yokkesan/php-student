<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>条件分岐</title>
</head>
<body>

    <?php
    $score = 85;
    ?>

    <p>あなたの点数は <?php echo $score; ?> 点です。</p>

    <?php
    // 成績判定
    if ($score >= 90) {
        echo "<p>成績: A</p>";
    } elseif ($score >= 70) {
        echo "<p>成績: B</p>";
    } elseif ($score >= 50) {
        echo "<p>成績: C</p>";
    } else {
        echo "<p>成績: D</p>";
    }
    ?>

</body>
</html>