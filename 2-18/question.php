<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$ques1 = array("80","22","20","21");
$ques2 = array("PHP","Python","JAVA","HTML");
$ques3 = array("join","select","insert","update");
//② ①で作成した、配列から正解の選択肢の変数を作成してください
// $answer1 = "80";
// $answer2 = "PHP";
// $answer3 = "join";
$answer1 = $ques1[0];
$answer2 = $ques2[0];
$answer3 = $ques3[0];
?>
<?php echo "<p>お疲れ様です".$name."</div><!--POST通信で送られてきた名前を出力-->さん</p>";?>
<!--フォームの作成 通信はPOST通信で-->
<form method="POST" action="answer.php">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($ques1 as $value) {?>
    <input type ="radio" name="quea1" value="<?php echo $value;?>"/><?php echo $value;?>
<?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($ques2 as $value) {?>
    <input type ="radio" name="quea1" value="<?php echo $value;?>"/><?php echo $value;?>
<?php } ?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($ques3 as $value) {?>
    <input type ="radio" name="quea1" value="<?php echo $value;?>"/><?php echo $value;?>
<?php } ?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="submit" value="回答する">