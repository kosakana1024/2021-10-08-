<?php
// var_dump($_POST);
// exit();
session_start();
include('functions.php');

// データ受け取り
$username = $_POST['username'];
$password = $_POST['password'];

// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM users_table WHERE username=:username AND password=:password AND is_deleted=0';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $val = $stmt->fetch(PDO::FETCH_ASSOC);

// ユーザ有無で条件分岐
    if (!$val) {
        echo "<p>ログイン情報に誤りがあります</p>";
        echo "<a href=keiziban_login.php>ログイン</a>";
        exit();
    } else {
        $_SESSION = array();
        $_SESSION['session_id'] = session_id();
        $_SESSION['is_admin'] = $val['is_admin'];
        $_SESSION['username'] = $val['password'];
        header("Location:keiziban_read.php");
        exit();
    }
}
?>