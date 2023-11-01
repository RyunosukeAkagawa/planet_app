<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報編集</h1>
    <form action="{{ route('planets.update', $planet) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">名前</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="name_en">名前(英語)</label>
            <input type="text" name="name_en" id="name_en">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="number" name="radius" id="radius">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="number" name="weight" id="weight">
        </p>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>

</body>

</html>

