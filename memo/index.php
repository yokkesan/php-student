<?php

require_once '../db.php';

$sql = "SELECT * FROM memos";
$stmt = $pdo->query($sql);
$memos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メモアプリ</title>
</head>
<body>

    <h1>メモ追加</h1>

    <form action="create.php" method="POST">

        <div>
            <label>タイトル</label>
            <input type="text" name="title">
        </div>

        <div>
            <label>内容</label>
            <textarea name="content"></textarea>
        </div>

        <button type="submit">
            保存
        </button>

    </form>

    <hr>

    <h2>メモ一覧</h2>

    <?php foreach ($memos as $memo): ?>

        <div>
            <h3>
                <?php echo $memo['title']; ?>
            </h3>

            <p>
                <?php echo $memo['content']; ?>
            </p>

            <a href="edit.php?id=<?php echo $memo['id']; ?>">
                編集
            </a>

            <a href="delete.php?id=<?php echo $memo['id']; ?>">
                削除
            </a>

            <hr>
        </div>

    <?php endforeach; ?>

</body>
</html>