<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易掲示板ログイン画面</title>
</head>

<body>
    <form action="todo_login_act.php" method="POST">
        <fieldset>
        <legend>簡易掲示板ログイン画面</legend>
        <div>
            ユーザー名: <input type="text" name="username">
        </div>
        <div>
            パスワード: <input type="text" name="password">
        </div>
        <div>
            <button>ログイン</button>
        </div>
        <a href="todo_register.php">新規登録はこちら</a>
        </fieldset>
    </form>

</body>

</html>