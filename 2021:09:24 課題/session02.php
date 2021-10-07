<?php
// sessionに保存されている変数を取り出して表示しよう
session_start();

// `$_SESSION['keyword']`はセッション変数なので定義していなくても呼び出せる
$string = $_SESSION['keyword'] . '&MySQL';
echo $_SESSION['keyword'];
exit();

?>