<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>内容確認</h1>
  <form method="POST" action="{{ route('thanks') }}">
    @csrf
    <input type="hidden" name="email" value="{{ $contact['email'] }}">
    <input type="hidden" name="contact" value="{{ $contact['contact'] }}">
    <label for="email" >メールアドレス:</label>
      {{ $contact['email'] }}
    <label for="contact" >お問い合わせ内容:</label>
      {{ $contact['contact'] }}
    <button type="submit" >
    送信
    </button>
    <a href="{{ route('index') }}" >修正する</a>

</form>
</body>
</html>