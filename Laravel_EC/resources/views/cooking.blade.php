<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>programming_search</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">

</head>
<body>
    <header class="header">
        <div class="content">
            <div class="head_log">
                <img src="images/log.png" alt="ECサイトロゴ">
            </div>
                <div class="header_log_nav">
                    <div class="btn">
                        <button type="button">LOGIN</button>
                    </div>
                    <div class="head_log_cart">
                        <img src="images/cart.svg" alt="カート">
                    </div>
                    <div id="navArea">
                        <nav class="header-nave">
                            <div class="inner">
                                <ul >
                                    <li class="inner_nav">
                                        <div class="nav_content">
                                            <img src="images/Vector.png" alt="疑問符">
                                            <a href="#">Skill Masterとは？</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                    <li class="inner_nav">
                                        <div class="nav_content">
                                            <img src="images/kensaku.png" alt="検索">
                                            <a href="#">先生を探す</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                    <li class="inner_nav">
                                        <div class="nav_content">
                                            <img src="images/teacher.png" alt="先生">
                                            <a href="#">先生になる</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                </ul>
                                <div class="nav_text">
                                    <p><a href="#">ログイン</a></p>
                                    <p><a href="#">新規会員登録</a></p>
                                    <p><a href="#">お問い合わせ</a></p>
                                </div>
                                <figure class="nav_sns_icon">
                                    <a href="#"><img src="images/instagram_icon.svg" alt="facebook"></a>
                                    <a href="#"><img src="images/twitter_icon.svg" alt="twitter"></a>
                                    <a href="#"><img src="images/facebook_icon.svg" alt="instagram"></a>
                                </figure>
                            </div>
                        </nav>
                        <div class="toggle-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div id="mask"></div>
                    </div>
                </div>
            </div>
    </header>
    <main class="main">
        <section class="main_section">
                <h1 class="search_ttl">search</h1>
                <p class="search">さがす</p>
            <div class="second_content">
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/ryouri1.jpg">
                    </figure>
                    <div class="kimenonawa">
                        <p class="second_text">家庭料理の達人<br>
                            「簡単でおいしい家庭料理が得意です。初心者の方でも気軽に始められる料理教室です。」
                        </p>
                        <div class="price">
                            <p class="price_name">¥740</p>
                            <img src="images/heart.svg">
                        </div>
                    </div>
                    <div class="second_btn">
                        <button type="button" class="detail"><a href="{{route('detail_Programming')}}">詳細を見る</button></a>
                    </div>
                </div>
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/ryouri2.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">イタリア料理専門<br>
                            「本場イタリアの味を再現！本格的なイタリア料理を学びたい方へ。」
                        </p>
                        <div class="price">
                            <p class="price_name">¥3,740</p>
                            <img src="images/heart.svg">
                        </div>
                        <div class="second_btn">
                            <button type="button" class="detail"><a href="{{route('detail_Programming')}}">詳細を見る</button></a>
                        </div>
                    </figcaption>
                </div>
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/ryouri3.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">パン作り教室<br>
                            「手作りパンの楽しさを伝えたい！初心者の方でも簡単に作れるパンレシピを多数ご紹介します。」
                        </p>
                        <div class="price">
                            <p class="price_name">¥5,790</p>
                            <img src="images/heart.svg">
                        </div>
                        <div class="second_btn">
                            <button type="button" class="detail"><a href="{{route('detail_Programming')}}">詳細を見る</button></a>
                        </div>
                    </figcaption>
                </div>
            </div>
            <div class="second_content">
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/ryouri4.jpg">
                    </figure>
                    <div class="kimenonawa">
                        <p class="second_text">和食の基礎を学ぶ<br>
                            「旬の食材を使った和食の基本を丁寧に指導します。食文化も一緒に学びましょう。」
                        </p>
                        <div class="price">
                            <p class="price_name">¥5,740</p>
                            <img src="images/heart.svg">
                        </div>
                    </div>
                    <div class="second_btn">
                        <button type="button" class="detail"><a href="{{route('detail_Programming')}}">詳細を見る</button></a>
                    </div>
                </div>
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/ryouri5.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">フランス菓子教室<br>「繊細なフランス菓子作りに挑戦！見た目も美しいお菓子作りを習得できます。」</p>
                        <div class="price">
                            <p class="price_name">¥5,740</p>
                            <img src="images/heart.svg">
                        </div>
                        <div class="second_btn">
                            <button type="button" class="detail"><a href="{{route('detail_Programming')}}">詳細を見る</button></a>
                        </div>
                    </figcaption>
                </div>
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/gengo5.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">子供向け料理教室<br>
                            「食育も大切！お子様と一緒に楽しく料理を作りましょう。アレルギー対応も可能です。」
                        </p>
                        <div class="price">
                            <p class="price_name">¥5,740</p>
                            <img src="images/heart.svg">
                        </div>
                        <div class="second_btn">
                            <button type="button" class="detail"><a href="{{route('detail_Programming')}}">詳細を見る</button></a>
                        </div>
                    </figcaption>
                </div>
            </div>
        </section>
        Route::get('/detail_Programming', function () {
    return view('detail_Programming');
})->name('detail_Programming');
        <div class="sns_content">
            <div class="sns_area">
                <figure class="sns_area_img">
                    <img src="images/log.png">
                </figure>
                <figure class="sns_icon">
                    <a href="#"><img src="images/instagram_icon.svg" alt="facebook"></a>
                    <a href="#"><img src="images/twitter_icon.svg" alt="twitter"></a>
                    <a href="#"><img src="images/facebook_icon.svg" alt="instagram"></a>
                </figure>
                <div class="sns_area_text">
                    <p>先生になる</p>
                    <p>ログイン・新規会員登録</p>
                </div>
                <div class="inquiry">
                    <p>| よくある質問</p>
                    <p>| お問い合わせ</p>
                    <p>| プライバシーポリシー</p>
                    <p>| ご利用規約</p>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-text">
                <p>© 2024 See heart</p>
            </div>
        </footer>
    </main>


    <script src="js/header-nave.js"></script>

</body>
</html>
