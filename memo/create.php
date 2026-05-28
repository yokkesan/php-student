<?php

require_once '../db.php';

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO memos (title, content)
VALUES (:title, :content)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':title', $title);
$stmt->bindValue(':content', $content);

$stmt->execute();

header('Location: index.php');
exit;