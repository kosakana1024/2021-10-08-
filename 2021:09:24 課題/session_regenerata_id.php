<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．

// セッションの開始
session_start();
$old_session_id = session_id();

// 再生成
session_regenerate_id(true);
$new_session_id = session_id();

echo "<p>旧id: {$old_session_id}</p>";
echo "<p>新id: {$new_session_id}</p>";
exit();

?>