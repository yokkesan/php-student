<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>成績判定を関数化</title>
</head>
<body>

    <?php
    function judgeGrade($score) {
        if ($score >= 90) {
            return "A";
        } elseif ($score >= 70) {
            return "B";
        } elseif ($score >= 50) {
            return "C";
        } else {
            return "D";
        }
    }

    // 点数を判定
    $score1 = 85;
    $score2 = 60;
    ?>

    <p>
        点数: <?php echo $score1; ?>
        → 成績: <?php echo judgeGrade($score1); ?>
    </p>

    <p>
        点数: <?php echo $score2; ?>
        → 成績: <?php echo judgeGrade($score2); ?>
    </p>

</body>
</html>