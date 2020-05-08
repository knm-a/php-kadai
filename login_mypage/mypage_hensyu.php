<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:http://localhost/login_mypage/login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
    <body> 
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="log_out"><a href="log_out.php">ログアウト</a></div>
        </header>
        
        <main>
            <h2>会員情報</h2>
            <div class="hello">
                <?php echo "こんにちは!"." ".$_SESSION['name']."さん"; ?>
            </div>
            <form action="mypage_update.php" method="post">
                <div class="picture1">
                    <img src="<?php echo $_SESSION['picture'];?>" class="img_pic">
                </div>
                <div class="profile">
                    <p>氏名 : <input type="text" class="text" size="40" name="name" value="<?php echo $_SESSION['name']; ?>"></p>
                    <p>メール :<input type="text" class="text" size="40" name="mail" value="<?php echo $_SESSION['mail']; ?>"></p>
                    <p>パスワード : <input type="text" class="text" size="40" name="password" value="<?php echo $_SESSION['password']; ?>"></p>
                </div>
                <div class="comments">
                    <textarea row="3" cols="80" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>

                <input type="submit" class="button" value="この内容に変更する">
            </form>
            
        </main>
        
        <footer>
        @ 2018 InterNous.inc. All rights reserved
        </footer>
    
    </body>
</html>
