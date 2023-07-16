<?php
$host = 'localhost';
$dbname ='sns';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('데이터베이스 연결에 실패했습니다: ' . $e->getMessage());
}