<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBアクセスサンプル</title>
</head>
<body>
<p>現在登録されている名前の一覧は以下の通り</p>
<ul>
    @foreach ($items as $item)
        <li>{{ $item->name }}</li>
    @endforeach
</body>
</html>
