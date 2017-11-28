<!DOCTYPE html>

<?php?>
        <style>
            html,body{
                hight: 100%;    /*高さを100％に設定*/
            }

            body{
                margin: 0;
                padding: 0;
                positiion: relative;
                min-width: 600px;   /*中央配置するボックスの横幅*/
                min-height: 400px;  /*中央配置するボックスの縦幅*/

            }

            .centerMiddle{
                margin: -200px 0 0 -300px;  /*縦横半分をネガティブマージンでずらす*/
                position: absolute;     /*body要素に対して絶対配置*/
                top: 40%;       /*上端を中央に*/
                left: 30%;      /*左端を中央に*/
                width: 1500px;   /*横幅*/
                height: 700px;  /*縦幅*/
                background-color:#00ff00;
            }

        </style>
<div class="centerMiddle">
    　　ボックスを画面中央に表示する。
</div>

</html>

