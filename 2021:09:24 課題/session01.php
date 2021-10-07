<?php
// session変数を定義して値を入れよう
session_start();

// セッション変数に値を代入
$_SESSION['keyword'] = 'PHP';

echo $_SESSION['keyword'];
exit();

?>