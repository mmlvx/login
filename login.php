<?php
$post_id = $_POST["id"];
$post_pass = $_POST["password"];
$post_submit = $_POST["login"];

if(isset($post_submit)){
  //送信ボタンが押された時
  if(!isset($post_id) || !isset($post_pass)){
    //入力されていない
    header('location:login2.php');
    exit();
  }else if($post_id != "shibushibu" || $post_pass != "jyobasu"){
    //入力が間違っている
    header('location:login2.php');
    exit();
  }else{
    //入力が正しかった場合
    echo "ようこそ";
    exit();
  }
}
?>




<html>
  <head>
    <title>ログイン</title>
  </head>

  <body>
    <form action="" method="POST">
      <!--formタグaction属性="ファイル名"：指定したファイルにユーザーのデータを飛ばす-->
        <input type="text" name="id" placeholder="ID"><br>
        <!--inputタグtype属性="text"：テキストボックス
        placeholder：初期表示する内容を指定-->
        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" name="login" value="ログイン">
        <!--inputタグtype属性="submit"：入力値送信ボタン
        ボタンが押されるとformタグのaction属性で指定しているファイルに情報を送信-->
    </form>
  </body>
</html>
