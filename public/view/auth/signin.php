<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/signin.css">
<title>signin.php</title>
</head>
<body>
<form action="signin-output.php" method="post">
    <div class="container">
        <div class="left-aligned-text">
            <h1>Waffle</h1>
                <div class="sikaku">
                    <p>
                        <label class="text" for="email">メールアドレス</label><br>
                        <input type="email" name="email" class="in">
                    </p>
                    <p>
                        <label class="text" for="password">パスワード</label><br>
                        <input type="password" name="password" class="in">
                    </p>
        <!--signin-output側で次の画面に飛ばしてる！-->
        <p><button class="example" type="submit" name="login"><span>ログイン</span></button></p>
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
            <div class="NEWsignin-confirmation">
                <a href="###">新規会員登録はこちら</a><br>
            </div>
</form>

</body>
</html>