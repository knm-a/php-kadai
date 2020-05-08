<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>ログイン</title>
        <link rel="stylesheet" type="text/css" href="login1.css">
    </head>
    
    <body>
         <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
    
        <main>
            <form action="mypage.php" method="post">
                <div class="box">
                    <div class="contents">
                        <label>メールアドレス</label><br>
                        <input type="text" class="text" size="40" name="mail" value="<?php echo $_COOKIE['mail']; ?>">
                    </div>
                    <div class="contents">
                        <label>パスワード</label><br>
                        <input type="password" class="text" size="40" name="password"  value="<?php echo $_COOKIE['password']; ?>">
                    </div>
                    <div>
                        <input type="submit" class="button" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
    
         <footer>
        @ 2018 InterNous.inc. All rights reserved
         </footer>
     
    
    </body>


</html>