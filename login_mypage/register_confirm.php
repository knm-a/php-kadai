<?php
mb_internal_encoding("utf8");

//仮保存されたファイル名で画像ファイルを取得（サーバーへ仮アップロードされたディレクトリとファイル名）
$temp_pic_name = $_FILES['picture']['tmp_name'];

//元のファイル名で画像ファイルを取得。
$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

//仮保存のファイル名を、imageフォルダに、元のファイル名で移動させる
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>新規会員登録 確認</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>

    <body>
         <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
        <main>
            <h2>会員登録 確認</h2>
            <p>こちらの内容で登録しても宜しいでしょうか？</p>
                <div class="confirm">
                    <p>氏名 : <?php echo $_POST['name']; ?></p>
                    <p>メール : <?php echo $_POST['mail']; ?></p>
                    <p>パスワード : <?php echo $_POST['password']; ?></p>
                    <p>プロフィール写真 : <?php echo $original_pic_name; ?></p>
                    <p>コメント : <?php echo $_POST['comments']; ?></p>
                </div>
                <div class="button">
                    <form action="register.php">
                        <input type="submit" class="button1" value="戻って修正する">
                    </form>
                    <form action="register_insert.php" method="post">
                        <input type="submit" class="button2" value="登録する">
                        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                        <input type="hidden" value="<?php echo $path_filename; ?>" name="picture">
                        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">    
                    </form>
                </div>
        </main>
        
        <footer>
        @ 2018 InterNous.inc. All rights reserved
        </footer>
        
    </body>
</html>