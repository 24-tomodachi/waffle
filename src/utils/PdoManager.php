<?php
const CONFIG_PATH = __DIR__ .  '/../../conf.ini';

class PdoManager {
  private static $instance;
  private $pdo;

  private function __construct() {

    // conf.ini を参照
    $config = null;
    try {
      $config = parse_ini_file(CONFIG_PATH);
    } catch (Exception $e) {
      echo "conf.ini ファイルが見つかりません。";
      echo "conf.ini.sample をコピーし、conf.ini にリネームして必要な情報を入力してください。";
      echo 'Error: ' . $e->getMessage();
      exit;
    }

    // DB接続
    $dsn = 'mysql:host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['dbname'];
    $username = $config['username'];
    $password = $config['password'];
    $this->pdo = new PDO($dsn, $username, $password);
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new PdoManager();
    }
    return self::$instance;
  }
  public function getPdo() {
    return $this->pdo;
  }
}
