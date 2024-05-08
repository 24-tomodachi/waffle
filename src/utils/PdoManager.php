<?php
class PdoManager {
  private static $instance;
  private $pdo;

  private function __construct() {
    // Set up your PDO connection here
    $dsn = 'mysql:host=localhost;dbname=mydatabase';
    $username = 'username';
    $password = 'password';

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

