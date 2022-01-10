<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Document</title>
</head>
<body>
  <h1 class="title">お問い合わせ</h1>
  <form action="/newpost" class="form" name="contact" method="POST">
  @csrf
  <div class="form-item">
    <p class="form-item-label">名前<span class="required">※</span></p>
    <div class="name">
      <input type="text" name="name" class="form-item-input last-name">
      <input type="text" name="name" class="form-item-input first-name">
    </div>
  </div>
  <div class="form-item">
    <p class="form-item-label">性別<span class="required">※</span></p>
    <input type="radio" name="gender" value="男性" class="big" checked> 男性
    <input type="radio" name="gender" value="女性" class="big"> 女性
  </div>
  <div class="form-item">
    <p class="form-item-label">メールアドレス<span class="required">※</span></p>
    <input type="email" name="email" class="form-item-input">
  </div>
  <div class="form-item">
    <p class="form-item-label">郵便番号<span class="required">※</span></p>
    <span class="post-mark">&#12306;</span><input type="post" name="post" class="form-item-input">
  </div>
  <div class="form-item">
    <p class="form-item-label">住所<span class="required">※</span></p>
    <input type="address" name="address" class="form-item-input">
  </div>
  <div class="form-item">
    <p class="form-item-label">建物名<span class="required"></span></p>
    <input type="building" name="building" class="form-item-input">
  </div>
  <div class="form-item">
    <p class="form-item-label">ご意見<span class="required">※</span></p>
    <textarea name="textarea" class="form-item-textarea"></textarea>
  </div>
  <input type="submit" class="form-btn" value="確認">
</form>
</body>
</html>