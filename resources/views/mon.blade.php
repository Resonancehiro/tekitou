<!DOCTYPE html>
<?php?>
<head>
    <link href="/css/style.css"rel="stylesheet" type="text/css">
    <link href="/css/box.css"rel="stylesheet" type="text/css">
    <title>問題</title>
</head>

<div>
    <div class="box1">
        <a href="/"><input type="button" value="戻る"></a>
    </div>
</div>


<div  align="center">




            <table class="type01">
                <?php foreach($task as $t){ ?>
                <tr>
                    <tb>

                        <?=$t->text?>
                    </tb>
                </tr>


                <?php } ?>
            </table>

            <table class="type01">
                <?php foreach($task as $t){ ?>
                <tr>
                    <tb>

                        <?=$t->A?>
                    </tb>
                </tr>


                <?php } ?>
            </table>


            <table class="type01">
                <?php foreach($task as $t){ ?>
                <tr>
                    <tb>

                        <?=$t->B?>
                    </tb>
                </tr>


                <?php } ?>
            </table>

            <table class="type01">
                <?php foreach($task as $t){ ?>
                <tr>
                    <tb>

                        <?=$t->C?>
                    </tb>
                </tr>


                <?php } ?>
            </table>

            <table class="type01">
                <?php foreach($task as $t){ ?>
                <tr>
                    <tb>

                        <?=$t->D?>
                    </tb>
                </tr>


                <?php } ?>
            </table>

            <table class="type01">
                <div>

                    <a href="/session/ア"><button type="submit">ア</button></a>

                    <button type="submit">イ</button>

                    <button type="submit">ウ</button>

                    <button type="submit">エ</button>
                    </form>
                </div>
            </table>

            <table class="type01">
                <?php foreach($task as $t){ ?>
                    <tr>
                        <tb>

                            <?=$t->explanation?>
                        </tb>
                    </tr>


                    <?php } ?>
    </table>

            <table class="type01">
                <?php foreach($task as $t){ ?>
                <tr>
                    <tb>
                        <?=$t->answer?>

                    </tb>
                </tr>


                <?php } ?>
            </table>

    <table class="type01">
        <?php foreach($task as $t){ ?>
        <tr>
            <tb>
                <?=$t->year?>

            </tb>
        </tr>


        <?php } ?>
    </table>



    <table class="type01">
        <?php foreach($task as $t){ ?>
        <tr>
            <tb>
                <?=$t->answer?>

            </tb>
        </tr>


        <?php } ?>
    </table>




    <form action="/t" method="POST" action="">

    </form>




    </table>
</div>

