<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>配列と連想配列</title>
</head>
<body>

    <h2>① 配列の問題</h2>

    <?php
    // 配列を作成
    $fruits = ["りんご", "バナナ", "みかん"];
    ?>

    <ul>
        <li><?php echo $fruits[0]; ?></li>
        <li><?php echo $fruits[1]; ?></li>
        <li><?php echo $fruits[2]; ?></li>
    </ul>

    <h2>② 連想配列の問題</h2>

    <?php
    // 連想配列を作成
    $country = [
        "name" => "日本",
        "capital" => "東京",
        "population" => "1億2500万人"
    ];
    ?>

    <p>国名: <?php echo $country["name"]; ?></p>
    <p>首都: <?php echo $country["capital"]; ?></p>
    <p>人口: <?php echo $country["population"]; ?></p>

</body>
</html>