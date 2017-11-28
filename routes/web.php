<?php
//welcome to welcome
Route::get('/', function () {
    return view('login');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/FE_top', function () {
    return view('FE_top');
});

Route::get('/register', function () {
    return view('top');
});

Route::get('/login', function () {
    return view('top');
});
Route::get('/logout', function () {
    return view('top');
});

Route::get('/correct', function () {
    return view('correct');
});

//掲示板関係ルート
Route::get('/boardlist', function () {
    return view('boardlist');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/questionboard', function () {
    return view('questionboard');
});


//管理者掲示板
Route::get('/mboard', function () {
    return view('mboard');
});

Route::get('/mquestionboard', function () {
    return view('mquestionboard');
});


Route::get('/toi', function () {

    return view("toi",[

    ]);
});

//yannma---code-------------------------------------------------------------------------------
Route::get('/ktop',function(){
    return view("ktop",[

    ]);

});


Route::get('/test',function(){
    return view("test",[

    ]);

});


//問隊追加画面　関係ルート
Route::get('/t', function () {
    return view('t');
});

Route::get('/answer', function () {

    return view("answer");
});


//問題追加ページ
Route::get('/mon',function(){
    return view("mon",[
    ]);

});
//問題の読み込み
Route::get('/mon', function () {
    $data = DB::select("SELECT * FROM t");
    return view("mon",[
        "task"=>$data
    ]);
});


//問題追加データ保存
Route::post('/t', function () {
    $text = request("text");
    $explanation = request("explanation");
    $A = request("A");
    $B = request("B");
    $C = request("C");
    $D = request("D");
    $answer = request("answer");
    $year = request("year");
    $season = request("season");
    DB::insert("insert into t (text,explanation,A,B,C,D,answer,year,season) value (?,?,?,?,?,?,?,?,?)", [$text,$explanation,$A,$B,$C,$D,$answer,$year,$season]);
    return redirect("/t");
});


//問題追加データを取得
Route::get('/t', function () {
    $data = DB::select("SELECT * FROM t");
    return view("t",[
        "task"=>$data
    ]);
});



Route::get('/question/board/{id}/delete', function ($id) {
    $task = DB::select("delete from t where id=?",[$id]);
    return redirect("/question/board");
});

Route::get('home',function (){
    $value = session('kye');

    $value = session('key','default');

    session(['key' => 'value']);



});
//-----------------------------------------------------------------------------------





//掲示板フォームデータ保存
Route::post('/board', function () {
    $name = request("name");
    $text = request("text");
    $time = request("time");
    $validator = Validator::make(request()->all(), [
        'name' => ['required'],
        'text' => ['required','max:200'],
    ])->validate();
    DB::insert("insert into tasks (name,text,time) value (?,?,?)", [$name,$text,$time]);
   return redirect("/board");
});

//質問掲示板フォームデータ保存
Route::post('/questionboard', function () {
    $name = request("name");
    $text = request("text");
    $time = request("time");
    $validator = Validator::make(request()->all(), [
        'name' => ['required'],
        'text' => ['required','max:200'],
    ])->validate();
    DB::insert("insert into question (qname,qtext,time) value (?,?,?)", [$name,$text,$time]);
    return redirect("/questionboard");
});

//管理者掲示板フォームデータ保存
Route::post('/mboard', function () {
    $name = request("name");
    $text = request("text");
    $time = request("time");
    $validator = Validator::make(request()->all(), [
        'name' => ['required'],
        'text' => ['required','max:200'],
    ])->validate();
    DB::insert("insert into tasks (name,text,time) value (?,?,?)", [$name,$text,$time]);
    return redirect("/mboard");
});

Route::post('/mquestionboard', function () {
    $name = request("name");
    $text = request("text");
    $time = request("time");
    $validator = Validator::make(request()->all(), [
        'name' => ['required'],
        'text' => ['required','max:200'],
    ])->validate();
    DB::insert("insert into question (qname,qtext,time) value (?,?,?)", [$name,$text,$time]);
    return redirect("/mquestionboard");
});

//掲示板データを取得
Route::get('/board', function () {
    $data = DB::select("SELECT * FROM tasks");
    return view("board",[
        "task"=>$data
    ]);
});

//質問掲示板データを取得
Route::get('/questionboard', function () {
    $data = DB::select("SELECT * FROM question");
    return view("questionboard",[
        "task"=>$data
    ]);
});

Route::get('/mquestionboard', function () {
    $data = DB::select("SELECT * FROM question");
    return view("mquestionboard",[
        "task"=>$data
    ]);
});

//管理者掲示板データを取得
Route::get('/mboard', function () {
    $data = DB::select("SELECT * FROM tasks");
    return view("mboard",[
        "task"=>$data
    ]);
});

Route::get('/mquestionboard', function () {
    $data = DB::select("SELECT * FROM question");
    return view("mquestionboard",[
        "task"=>$data
    ]);
});


//各デリート分
Route::get('/delete',function(){
    $id = request("id");
    DB::select("delete from tasks where id=?",[$id]);
    return redirect("/mboard");
});

Route::get('/delete',function(){
    $id = request("id");
    DB::select("delete from question where id=?",[$id]);
    return redirect("/mquestionboard");
});



//テキスト処理


//Route::post('/delete',function(){
   // $id = request("id");
  //  DB::delete('delete from tasks where id = ? ',[$id]);
   // return redirect("/staff");
//});



////ログイン処理に使うroute
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

?>