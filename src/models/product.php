<?php

class Product
{
  public function getData(): array
  {
    $dsn = "mysql:
        host=localhost;
        dbname=blogsite;
        charset=utf8;
        port=3304";
    $pdo = new PDO($dsn, "adv_php_user", "secret", [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("SELECT * FROM `products`");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
