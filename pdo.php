<?php
$host = '193.203.184.3';
$db   = 'u214833083_linkBolt';
$user = 'u214833083_fardeen3';
$pass = 'huu_7G776y767iHY76THy65gh8H886Hj';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
} catch (PDOException $e) { die(json_encode(['error' => 'DB Connect Failed'])); }
?>