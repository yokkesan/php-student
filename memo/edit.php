<?php

require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE memos
            SET title = :title,
                content = :content
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':content', $content);

    $stmt->execute();

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM memos
        WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

$memo = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メモ編集</title>
</head>
<body>

<h1>メモ編集</h1>

<form action="" method="POST">

    <input
        type="hidden"
        name="id"
        value="<?php echo $memo['id']; ?>"
    >

    <div>
        <label>タイトル</label>
        <input
            type="text"
            name="title"
            value="<?php echo $memo['title']; ?>"
        >
    </div>

    <div>
        <label>内容</label>
        <textarea name="content"><?php echo $memo['content']; ?></textarea>
    </div>

    <button type="submit">
        更新
    </button>

</form>

</body>
</html>