<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/signout.css">
    <title>ログアウト完了</title>
</head>
<body>
    <form action="signin.php" method="post">
    <?php 
        if(isset($_SESSION['User'])){
            unset($_SESSION['User']);
            echo '<br><br>';
            echo '<center><h2>ログアウトしました！</h2></center>';
            echo '<br><br>';
            echo '<div class="bobo">';
            echo '<button class="baba"><span>OK</span></button>';
            echo '</div>';
        }else{
            echo '<center>すでにログアウトしています。</center>';
            echo '<center><a href="signin.php">ログイン画面へ</a></center>';
        }
    ?>

    </form>
</body>
</html>
