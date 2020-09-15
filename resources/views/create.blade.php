<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>質問投稿</title>
</head>
<body>
  <header>
    <h2 class="mb-3">質問を投稿する</h2>
  </header>
  <main>
    <form method='POST' action="{{route('store')}}">
      @csrf
        <div>
          <textarea name="question" rows="6" placeholder="質問を入力してください"></textarea>
        </div>
        <button type="submit">投稿する</button>
  </main>
  <footer></footer>
</body>
</html>