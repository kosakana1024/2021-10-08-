<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易掲示板</title>
</head>

<body>
    <form action="todo_register_act.php" method="POST">
        <fieldset>
        <legend>簡易掲示板ユーザー登録画面</legend>
        <div>
            ユーザー名: <input type="text" name="username">
        </div>
        <div>
            パスワード: <input type="text" name="password">
        </div>
        <div>
            <button>登録</button>
        </div>
        <a href="todo_login.php">ログインはこちら</a>
        </fieldset>
    </form>

</body>

</html>