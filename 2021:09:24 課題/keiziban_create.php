<?php
// var_dump($_POST);
// exit();

// POSTデータ確認
if(
    !isset($_POST['named']) || $_POST['named'] =='' ||
    !isset($_POST['contents']) || $_POST['contents'] =='' 
){
    exit('ParamError');
}

// データ受け取り
$named = $_POST['named'];
$contents = $_POST['contents'];


// DB接続
include('functions.php');
$pdo = connect_to_db();


// SQL作成&実行
$sql = 'INSERT INTO keiziban_table (id, named, contents, created_at, updated_at) VALUES (NULL, :named, :contents, now(), now())';
$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':named', $named, PDO::PARAM_STR);
$stmt->bindValue(':contents', $contents, PDO::PARAM_STR);

// SQL実行（実行に失敗すると$statusにfalseが返ってくる）
$status = $stmt->execute();

if($status==false){
    $error = $stmt->errorInto();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header('Location:keiziban_input.php');
    exit();
}