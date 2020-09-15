<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="col-md-4 text-left mt-4">
    <h5>太郎</h5>
      <div class="card">
          <div class="card-body">
              <p>{{$question->body}}</p>
              <p>
                  <small>{{$question->created_at}}</small>
              </p>
          </div>
          <div class="card-footer text-right">
              <a href="{{route('create')}}">詳細へ</a>
              <a href="#">削除する</a>
          </div>
      </div>
  </div>
</body>
</html>