@extends('layouts.app')

@section('content')
<html lang="{{ config('app.locale') }}">


<title>TOP</title>

<div  align="center">

<p>TOP</p>

<th>

    <a href="/error"><input type="submit" value="ITパスポート"></a></br></br>

    <a href="/FE_top"><input type="submit" value="基本情報技術者試験"></a></br></br>

    <a href="/error"><input type="submit" value="応用情報技術者試験"></a>

</th>


</html>
    @endsection