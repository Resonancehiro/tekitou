<!DOCTYPE html>

<html lang="ja">
<head>
    <link href="/css/style.css"rel="stylesheet" type="text/css">
    <link href="/css/box.css"rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/yoko.css">
        <title>問題追加</title>
</head>

<style>
    <!--
    .box {
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;

        width: 100px;
        height: 100px;

    }
    -->
</style>


<div>
    <div class="box1">
        <a href="/ktop"><input type="button" value="戻る"></a>
    </div>
</div>

<div align="center">
    <p>問題追加</p>
</div>


<body>

<div align="center">
<form action="/t" method="POST" >
    <?=  csrf_field()  ?>
    <table>
        <tr>
            <th>

        <tr>
            <th>
                問題追加
                <div>
                    <textarea name="text" rows="8" cols="40" wrap="hard">
                    </textarea>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                解説追加
                <div>
                    <textarea name="explanation" rows="8" cols="40" wrap="hard">
                    </textarea>
                </div>
            </th>
        </tr>

        <tr>
        <th>
           選択肢 ア
            <div>
                    <textarea name="A" rows="8" cols="40" wrap="hard">
                    ア.
                    </textarea>
            </div>
        </th>
        </tr>
        <tr>
        <th>
           選択肢 イ
            <div>
                    <textarea name="B" rows="8" cols="40" wrap="hard">
                    イ.
                    </textarea>
            </div>
        </th>
        </tr>
        <tr>
        <th>
           選択肢 ウ
            <div>
                    <textarea name="C" rows="8" cols="40" wrap="hard">
                        ウ.
                    </textarea>
            </div>
        </th>
        </tr>
        <tr>
        <th>
           選択肢 エ
            <div>
                    <textarea name="D" rows="8" cols="40" wrap="hard">
                        エ.
                    </textarea>
            </div>
        </th>
        </tr>
        <tr>
            <th>
                解答
                <div>
                    <select name="answer" rows="2" cols="2" wrap="hard">
                        <option value="ア">ア</option>
                        <option value="イ">イ</option>
                        <option value="ウ">ウ</option>
                        <option value="エ">エ</option>
                    </select>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                年度
                <div>
                    <textarea name="year" rows="2" cols="2" wrap="hard">

                    </textarea>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                季節
                <div>
                    <select name="season"rows="2" cols="2" wrap="hard">
                        <option value="春">春</option>
                        <option value="秋">秋</option>
                    </select>
                </div>
            </th>
        </tr>

        <tr>
            <th>
                <input type="submit" value=送信>
            </th>
        </tr>

    </table>

</form>
</div>
</body>
</html>