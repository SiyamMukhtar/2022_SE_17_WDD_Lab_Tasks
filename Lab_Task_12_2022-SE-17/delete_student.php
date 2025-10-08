<?php
require 'db.php';
$id = intval($_GET['id'] ?? 0);
if($id){
$stmt = $mysqli->prepare('DELETE FROM students WHERE id=?');
$stmt->bind_param('i', $id);
$stmt->execute();
}
header('Location: management.php');
exit;
?>