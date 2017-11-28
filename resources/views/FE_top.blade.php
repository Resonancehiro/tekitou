@extends('layouts.app')

@section('content')
<html>

<header>
    <link href="/css/box.css"rel="stylesheet" type="text/css">
    <title>基本情報技術者試験</title>
</header>

<div>
    <div class="box1">
        <a href="/top"><input type="button" value="戻る"></a>
    </div>
</div>

<div align="center"><p>基本情報技術者試験</p></div>

<div  align="center">

<body>

<a href="/toi"><input type="submit" value="問題一覧"></a></br></br>

<a href="/error"><input type="submit" value="テストモード"></a></br></br>

<a href="/boardlist"><input type="submit" value="掲示板"></a></br></br>

</body>
</html>
@endsection