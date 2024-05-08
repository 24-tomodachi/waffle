<?php
require_once __DIR__ . '/../../src/utils/PdoManager.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tst</title>
</head>
<body>
  <?php
  $pdo = PdoManager::getInstance()->getPdo();
  if ($pdo) {
    echo 'PDO connection success';
    var_dump($pdo);
  } else {
    echo 'PDO connection failed';
  }
  ?>
</body>
</html>
