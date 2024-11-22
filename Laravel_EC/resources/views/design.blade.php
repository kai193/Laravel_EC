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
                    <div class="head_log">
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
                        <img src="images/programming1.jpg">
                    </figure>
                    <div class="kimenonawa">
                        <p class="second_text">初心者向けPythonコース<br>
                            Webサイト制作コース
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
                        <img src="images/programming2.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">中級者向けWebアプリケーション<br>
                            開発コース
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
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/programming3.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">HTML/CSS基礎講座<br>
                            Webサイト制作コース
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
            <div class="second_content">
                <div class="second_img">
                    <figure class="img_container">
                        <img src="images/programming4.jpg">
                    </figure>
                    <div class="kimenonawa">
                        <p class="second_text">現役エンジニアが教える！<br>
                            即戦力プログラミング講座
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
                        <img src="images/programming5.jpg">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">現役エンジニアが教える！<br>ハイレベルプログラミング</p>
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
                        <img src="images/programming6.png">
                    </figure>
                    <figcaption class="kimenonawa">
                        <p class="second_text">挫折しない！現役エンジニアが教える<br>
                            プログラミング
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
