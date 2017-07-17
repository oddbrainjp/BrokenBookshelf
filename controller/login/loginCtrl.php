<?php
require_once('../common/config.php');
require_once('../common/userInfo.php');

$dbAccesser = new DatabaseAccesser();
$dbh = $dbAccesser -> dbStart();

$loginId  = (string)filter_input(INPUT_POST, 'loginId');
$password = (string)filter_input(INPUT_POST, 'password');

// 入力値をサーバー側でチェックするならここ
// エラーがある場合
// セッションに渡された値をそのまま持たせてログインページへ

$sql  =  "select username,pass from user_meta where delflg = 0 and loginid = ?";
$stmt =  $dbh -> prepare($sql);
$stmt -> bindValue(1, $loginId);
$stmt -> execute();

$user = $stmt->fetch();
if($user){
  if(password_verify($password, $user['pass'])){
    session_start();
    $_SESSION['userInfoSession'] = new UserInfo($user);
    header('location: ../../../view/index.php');
  } else {
    echo "fxxk!sxxt!dxxn!";
    echo "<br>".$password;
    echo "<br>".$user['pass'];
    var_dump($user);
  }
} else {
  echo "lol";
  echo "<br>".$loginId;
}

// if(!$user){
//   // セッションにメッセージを持たせてログインページへ
//   header('location: login.php');
// } else {
//   // セッションにユーザー情報を持たせてトップページへ
//   header('location: index.php');
// }