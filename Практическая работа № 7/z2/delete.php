<?php
require_once 'bd.php';
$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("DELETE FROM users WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: admin.php");
exit;
?>