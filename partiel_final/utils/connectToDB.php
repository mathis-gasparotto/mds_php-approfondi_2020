<?php
$dsn = "mysql:dbname=top_db;host=127.0.0.1;charset=utf8mb4";
$pdo = new PDO($dsn, "top_db", "zz4Kzut4KwvuJJS1");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
