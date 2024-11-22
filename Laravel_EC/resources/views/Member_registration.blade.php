<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>会員登録</title>
  <link rel="stylesheet" href="css/member.css" />
</head>

<body>
  <main>
    <section class="new_member">
      <div class="new_member_container">
        <h1>新規会員登録</h1>
      </div>
      <div class="new_member_registration">
        <figure class="new_member_line">
          <img src="images/メールアドレスで会員登録ボタン.png" />
          <img src="images/メールアドレス.png" />
        </figure>
      </div>
      <ul class="new_member_process">
        <li>
          <h3 class="number">1</h3>
          <p class="number_txt">お客様情報入力</p>
        </li>
        <li>
          <h3 class="number">2</h3>
          <p class="number_txt">メールアドレス認証</p>
        </li>
        <li>
          <h3 class="number">3</h3>
          <p class="number_txt">登録完了</p>
        </li>
    </section>
    <section class="form">
      <div class="form_container">
        <h2 class="form_container_txt">以下の項目を入力いただき、会員登録を進めてください。</h2>
        <p class="form_container_item">「<span>＊</span>」の項目は入力必須項目となります</p>
        <form>
          <div class="form_item">
            <div class="form_group">
              <label for="name">お名前<span>*</span></label>
              <input type="text" class="lastname" id="lastname" autocomplete="family-name" required />
              <input type="text" class="firstname" id="firstname" autocomplete="given-name" required />
            </div>
            <div class="form_group">
              <label for="email">メールアドレス<span>*</span></label>
              <input type="email" class="email" id="email" autocomplete="email" required />
            </div>
            <div class="form_group">
              <label for="tel">電話番号</label>
              <input type="tel" class="tel" id="tel" autocomplete="tel" required />
            </div>
            <div class="form_group1">
              <label for="birthday">生年月日<span>*</span></label>
              <select class="year" id="year" autocomplete="bday-year" required>
              </select>
              <select class="month" id="month" autocomplete="bday-month" required>
              </select>
              <select class="day" id="day" autocomplete="bday-day" required>
              </select>
            </div>
            <div class="radio_content">
              <div class="item_content">
                <p class="item">性別<span>*</span></p>
              </div>
              <div class="item_content_txt">
                <label for="item1" class="radio_btn">
                  <input type="radio" name="gender" class="sex" id="men" autocomplete="sex" />
                  男性
                </label>
                <label for="item2" class="radio_btn">
                  <input type="radio" name="gender" class="sex" id="girl" autocomplete="sex" />
                  女性
                </label>
                <label for="item3" class="radio_btn">
                  <input type="radio" name="gender" class="sex" id="no" autocomplete="sex" />
                  回答しない
                </label>
              </div>
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
          <button type="button" class="agree_button">この内容で登録する</button>
        </div>
    </section>
  </main>
</body>
</html>