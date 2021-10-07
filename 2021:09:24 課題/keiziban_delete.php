<?php
// var_dump($_POST);
// exit();
// データ受け取り

$id = $_GET['id'];

// DB接続
include('functions.php');
$pdo = connect_to_db();

// SQL実行
$sql = 'DELETE FROM keiziban_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header("Location:keiziban_read.php");
    exit();
}