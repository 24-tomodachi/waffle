<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/signin.css">
<title>signin.php</title>
</head>

<h1>WAFFLE</h1>

<form action="signin-output.php" method="post">
    <div class="container">
        <div class="left-aligned-text">
            <div class="signin-input">
                <p>メールアドレス<br>
                    <input type="email" name="email" class="in">
                </p>
                <p>パスワード<br>
                    <input type="password" name="password" class="in">
                </p>
            </div>
                <div class="signin-confirmation">
                    <a href="###">パスワードを忘れた方はこちら</a><br>
                </div>

                <div class="NEWsignin-confirmation">
                    <a href="###">新規の方はこちら</a><br>
                </div>
        </div>
    </div>
    <div class="signin-fail">
        <?php
        // $_GET['flag']がセットされているか確認
        if (isset($_GET['flag']) && $_GET['flag'] == 'fail') {
            echo '<p class="error">メアドあるいはパスワードが違います。</p>';
        }
        ?>
    </div>
    <div class="signin-button">
        <!--signin-output側で次の画面に飛ばしてる！-->
        <p><button class="example" type="submit" name="login"><span>ログイン</span></button></p>

    </div>
</form>

</body>
</html>