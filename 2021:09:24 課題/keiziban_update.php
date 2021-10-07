<?php
// var_dump($_POST);
// exit();
// 入力項目のチェック

if (
    !isset($_POST['named']) || $_POST['named'] == '' ||
    !isset($_POST['contents']) || $_POST['contents'] == '' ||
    !isset($_POST['id']) || $_POST['id'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

$todo = $_POST['named'];
$deadline = $_POST['contents'];
$id = $_POST['id'];

// DB接続
include('functions.php');
$pdo = connect_to_db();

// SQL実行
$sql = 'UPDATE keiziban_table SET named=:named, contents=:contents, updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':named', $named, PDO::PARAM_STR);
$stmt->bindValue(':contents', $contents, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header('Location:todo_read.php');
    exit();
}