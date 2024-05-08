![image](https://github.com/24-tomodachi/waffle/assets/114195789/a44b7a3a-efb8-4aaa-9e63-c132c8d94fa3)# waffle
## 環境構築手順

### リポジトリをクローンする
PHPアプリケーションなので、`XAMPP`の`htdocs`内部にクローンしてね

```sh
cd C:\XAMPP\htdocs
git clone git@github.com:24-tomodachi/waffle.git
```

### 起動
XAMPPを起動する

![image](https://github.com/24-tomodachi/waffle/assets/114195789/822552e3-f26a-4658-8a83-0e495822b752)

Apacheを起動

![image](https://github.com/24-tomodachi/waffle/assets/114195789/196b26c7-50b0-468d-aad0-a6b7bdc0aa17)

### DB作成
1. MySQLを起動

![image](https://github.com/24-tomodachi/waffle/assets/114195789/1718cdcc-77bf-4d41-86ca-2afba3619128)

2. "Admin"をクリック、必要な場合はログイン
3. DB一覧から「新規作成」をクリック、DB名を"waffle"にして作成

![image](https://github.com/24-tomodachi/waffle/assets/114195789/baa3a418-6e70-4aba-b823-17d0df890c5f)

4. http://localhost/waffle/test/utils/PdoManagerTest.php にアクセスして「Pdo connection success」が出ればOK

![image](https://github.com/24-tomodachi/waffle/assets/114195789/f8da476f-e818-4e27-9a54-53fc65a186ab)
