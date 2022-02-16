<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
</head>

<body>
  <h1>お問い合わせ</h1>
  <p>{{$txt}}</p>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
  <form action="/" method="POST">
    <table>
      @csrf
      @error('fullname') 
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="fullname">
        </td>
      </tr>
      @error('gender')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>性別</th>
        <td>
          <input type="radio" name="man">
          <input type="radio" name="woman">
        </td>
      </tr>
      @error('email')  
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>        
      </tr>
      @enderror
      <tr>
        <th>メール</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
      @error('postcode')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>郵便番号</th>
        <td>
          <input type="text" name="postcode" pattern="\d{3}-?\d{4}">
        </td>
      </tr>
      @error('address')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>住所</th>
        <td>
          <input type="text" name="address">
        </td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <input type="text" name="building-name">
        </td>
      </tr>
        @error('opinion')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>ご意見</th>
        <td>
          <textarea name="opinion" cols="70" rows="10"></textarea>
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
    <button type="submit" class="btn btn-primary">
      お問い合わせ内容の確認へ
    </button>
  </form>
</body>
</html>