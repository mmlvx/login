<?php
session_start();

$_SESSION["loginname"]=$_POST["username"];
$_SESSION["pass"]=$_POST["password"];
//_POST["username"]：前ページでユーザーが入力した名前（name属性）

if($_SESSION["username"]!="shibushibu") || $_SESSION["password"]!="jyobasu"){
  ?>
  ログインに失敗しました。<br>
  <a href="login.html">セッション生成ページ</a>
  <?php
  exit;
}

if(isset($_SESSION["username"])) setcookie("username", $_SESSION["username"],time()+120);
//isset：変数がセットされていることを確認する
   ?>
   会員専用ページです。<br>
   現在ログインしている状態です。<br>
   <a href="https://github.com/mmlvx">マイページ</a>
}


<html>
  <head>
    <title>ログイン</title>
  </head>

  <body>
    <form action="login.php" method="POST">
      <!--formタグaction属性="ファイル名"：指定したファイルにユーザーのデータを飛ばす-->
        Username<input type="text" name="username"><br>
        <!--inputタグtype属性="text"：テキストボックス-->
        Password<input type="password" name="password"><br>

        <input type="submit" name="login" value="Log In">
        <!--inputタグtype属性="submit"：入力値送信ボタン
        ボタンが押されるとformタグのaction属性で指定しているファイルに情報を送信-->
    </form>
  </body>
</html>
