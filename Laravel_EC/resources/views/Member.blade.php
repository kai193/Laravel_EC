<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>講師会員登録</title>
  <link rel="stylesheet" href="css/teacher.css" />
</head>

<body>
  <main>
    <section class="new_member">
      <div class="new_member_container">
        <h1>講師登録</h1>
        <p>先生としてSkill Masterを始めるための
          <br>ご登録方法や各種機能についてご案内します。</p>
      </div>
      <ul class="new_member_process">
        <li>
          <h3 class="number">1</h3>
          <p class="number_txt">情報の入力</p>
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
              <div class="form_group01">
              <input type="text" class="lastname" id="lastname" required />
              <input type="text" class="firstname" id="firstname" required />
              </div>
            </div>
            <div class="form_group">
              <label for="email">メールアドレス<span>*</span></label>
              <input type="email" class="email" id="email" autocomplete="email" required />
            </div>
            <div class="form_group">
              <label for="tel">電話番号</label>
              <input type="tel" class="tel" id="tel" autocomplete="tel" required />
            </div>
            <div class="form_group">
              <label for="birthday">生年月日<span>*</span></label>
              <div class="form_group02">
              <select class="year" id="year" autocomplete="bday-year" required>
              </select>
              <select class="month" id="month" autocomplete="bday-month" required>
              </select>
              <select class="day" id="day" autocomplete="bday-day" required>
              </select>
              </div>
            </div>
            <div class="form_group">
              <label for="birthday">性別<span>*</span></label>
              <div class="form_group03">
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
          <div class="form_group">
            <label for="job_history">職歴<span>*</span></label>
            <div class="job_history_entry">
              <input type="text" class="work" id="work" />
            </div>
          </div>
          <div class="form_group">
            <label for="portfolio_file">ポートフォリオ<span>*</span></label>
            <input type="file" id="portfolio_file" accept=".pdf,.doc,.docx,.ppt,.pptx,.jpg,.png" />
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