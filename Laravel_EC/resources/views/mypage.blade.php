<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>マイページ</title>
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <main>
        <section class="mypage">
            <div class="mypage_header">
            <h1 class="mypage_ttl">My Page</h1>
            <p class="mypage_ttl_txt">マイページ</p>
        </div>
            <div class="mypage_menu">
                <p class="mypage_txt">アカウント情報</p>
                <ul class="mypage_box">
                    <li class="mypage_list">
                        <p class="mypage_list_name">メールアドレス</p>
                        <p class="mypage_list_txt">aaaaa.aaaaa@aaaaa</p><!-- PHP -->
                    </li>
                    <li class="mypage_list">
                        <p class="mypage_list_name">お名前</p>
                        <p class="mypage_list_txt">あああ   ああ</p><!-- PHP -->
                    </li>
                    <li class="mypage_list">
                        <p class="mypage_list_name">性別</p>
                        <p class="mypage_list_txt">女性</p><!-- PHP -->
                    </li>
                    <li class="mypage_list">
                        <p class="mypage_list_name">生年月日</p>
                        <p class="mypage_list_txt">0000年00月00日</p><!-- PHP -->
                    </li>
                </ul>
            <div class="mypage_favorite">
                <p class="mypage_favorite_ttl">お気に入り</p>
                <button type="button" class="agree_button">お気に入りテーマを確認する</button>
            </div>
            <div class="mypage_history">
                <p class="mypage_history_ttl">注文履歴</p>
                <p class="mypage_history_txt">まだ注文を確定していません。</p>
            </div>
            <div class="mypage_logout">
                <button type="button" class="logout_button">ログアウト</button>
                <button type="button" class="out_button">退会は<span>こちら</span></button>
            </div>
        </div>
        </section>
    </main>
</body>

</html>