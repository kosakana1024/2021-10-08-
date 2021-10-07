<?php
// var_dump($_GET);
// exit();
// id受け取り
$id = $_GET['id'];

// DB接続
include('functions.php');
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM keiziban_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易掲示板</title>
</head>

<body>
    <form action="keiziban_update.php" method="POST">
        <fieldset>
            <legend>簡易掲示板 （編集画面）</legend>
            <a href="keiziban_read.php">一覧画面</a>
            <div>
                名前: <input type="text" name="named" value="<?= $record['named'] ?>">
            </div>
            <div>
                投稿: <input type="date" name="contents" value="<?= $record['contents'] ?>">
            </div>
            <input type="hidden" name="id" value="<?= $record['id']?>">
            <div>
                <button>投稿</button>
            </div>
        </fieldset>
    </form>
</body>

</html>