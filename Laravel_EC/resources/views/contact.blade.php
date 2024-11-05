<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="css/contact.css" />
</head>

<body>
    <main>
        <section class="contact">
            <div class="contact_container">
                <h1 class="contact_ttl">Contact</h1>
                <p class="contact_txt">お問い合わせ</p>
            </div>
            <ul class="contact_process">
                <li>
                    <h3 class="number">1</h3>
                    <p class="number_txt">お問い合わせ内容入力</p>
                </li>
                <li>
                    <h3 class="number">2</h3>
                    <p class="number_txt">入力確認</p>
                </li>
                <li>
                    <h3 class="number">3</h3>
                    <p class="number_txt">送信完了</p>
                </li>
        </section>
        <section class="form">
            <div class="form_container">
                <h2 class="form_container_txt">以下の項目を入力いただき、会員登録を進めてください。</h2>
                <p class="form_container_item">「<span>＊</span>」の項目は入力必須項目となります</p>
                <form>
                    <div class="form_item">
                        <div class="form_group">
                            <label for="customer_status">お客様のご状況<span>*</span></label>
                            <select class="customer" id="customer_status" name="customer_status" aria-label="お客様のご状況（Customer Status）">
                                <option value="ご購入者様">--</option>
                                <option value="ご購入者様">ご購入者様</option>
                                <option value="ギフトを受け取ったお客様">ギフトを受け取ったお客様</option>
                                <option value="法人のお客様">法人のお客様</option>
                                <option value="その他のお客様">その他のお客様</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <label for="name">お名前<span>*</span></label>
                            <div class="form_group01">
                            <input type="text" class="lastname" id="lastname" required />
                            <input type="text" class="firstname" id="firstname" required />
                            </div>
                          </div>
                        <div class="form_group">
                            <label for="company">会社名</label>
                            <input type="text" class="company" id="company" name="company" aria-label="会社名（Company Name）" />
                        </div>
                        <div class="form_group">
                            <label for="email">メールアドレス<span>*</span></label>
                            <input type="email" class="email" id="email" required />
                          </div>
                          <div class="form_group">
                            <label for="tell">電話番号</label>
                            <input type="tell" class="tell" id="tell" required />
                          </div>
                        <div class="form_group">
                            <div class="form_group_txt">
                            <label for="inquiry">お問い合わせ内容<span>*</span></label>
                            <p class="character-limit">(全角1000文字以下)</p>
                        </div>
                            <textarea class="inquiry" id="inquiry" name="inquiry" rows="5" cols="50"maxlength="1000" aria-label="お問い合わせ（Inquiry）"></textarea>
                          </div>
                    </div>
                </form>
            </div>
            <div class="conditions">
                <h2 class="conditions_txt">利用規約・個人情報の取り扱い</h2>
                <div class="scrollable-conditions">
                    <p class="scrollable-conditions_txt">利用規約</p>
                    <P class="scrollable-conditions_item">aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</P>
                    <P class="scrollable-conditions_item">aaaaaaaaaaaaaaaaa</P>
                    <P class="scrollable-conditions_item">aaaaaaaaaaaaaaaaaaaaaaaaaa</P>
                    <P class="scrollable-conditions_item">aaaaaaaaaaaaaaaaaaaaaaaaaa</P>
                </div>
                <label for="consent" class="consent_btn">
                    <input type="radio" name="consent_item" id="item4" />
                    同意する
                </label>
                <div class="submit_button_container">
                    <button type="button" class="agree_button">確認画面へ</button>
                </div>
        </section>
    </main>
</body>

</html>