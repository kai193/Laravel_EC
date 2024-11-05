<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ログイン</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <main>
        <section class="login">
            <div class="login_container">
                <div class="login_box">
                <h1 class="login_ttl">ログイン</h1>
                <form>
                    <div class="login_input">
                        <label for="email"></label>
                        <input type="email" id="email" name="email" placeholder="メールアドレス" required>
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="パスワード" required>
                    </div>
                    <button type="button" class="agree_button">ログイン</button>
                </form>
                </div>
                <div class="new_login">
                    <h1 class="new_login_ttl">はじめての方</h1>
                    <button type="button" class="new_button">新規会員登録</button>
                </div>
            </div>
        </section>
    </main>
</body>

</html>