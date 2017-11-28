@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="/css/style.css"rel="stylesheet" type="text/css">
    <link href="/css/box.css"rel="stylesheet" type="text/css">
    <title>掲示板</title>
</head>

<div align="center"><p>掲示板</p></div>

<div  align="center">

    <body>

    <table class="type01">
        <?php foreach($task as $t){ ?>
        <tr>
            <td><?=$t->id?></td>
            <th scope="row" style="..."><?=$t->name?></th>
            <td><?=$t->text?></td>
            <td><?=$t->time?></td>
            <td><a href="/delete?id=<?=$t->id?>"><input type="submit" value="消去" ></a></td>
        </tr>
        <?php } ?>

    </table>

    <form action="/mboard" method="POST" >
        <?=  csrf_field()  ?>
        <table>
            <tr>
                <th>
                    <span style="color: blue">name</span>
                    <input type="text" name="name" >
                    <input type="hidden" name="time" value="
                    <?php echo date('Y/m/d H:i',strtotime('+9 hour')); ?>"><br>

                </th>
            </tr>
            <tr>
                <th>
                    コメント
                    <div>
                    <textarea name="text" rows="8" cols="40" wrap="hard">
                    </textarea>
                    </div>
                </th>
            </tr>
            <tr>
                <th>
                    <input type="submit" value=送信 >
                </th>
            </tr>
        </table>
    </form>
</div>

</body>
</html>

<?php if($errors->first('name')):?>
名前を入力してください。
<?php endif;?>

<?php if($errors->first('text')):?>
コメントを入力してください。
<?php endif;?>

@endsection