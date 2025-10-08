<?php
require 'db.php';
$id = intval($_GET['id'] ?? 0);
if(!$id) die('No ID');
$res = $mysqli->query("SELECT * FROM students WHERE id=$id");
$student = $res->fetch_assoc();


if($_SERVER['REQUEST_METHOD']==='POST'){
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email'];
$roll = $_POST['roll_no'];
$dept = $_POST['department'];
$stmt=$mysqli->prepare("UPDATE students SET first_name=?, last_name=?, email=?, roll_no=?, department=? WHERE id=?");
$stmt->bind_param('sssssi',$fn,$ln,$email,$roll,$dept,$id);
$stmt->execute();
header('Location: management.php'); exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Student</title><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="container">
<h1>Edit Student</h1>
<form method="post">
<label>First Name</label><input type="text" name="first_name" value="<?php echo e($student['first_name']); ?>">
<label>Last Name</label><input type="text" name="last_name" value="<?php echo e($student['last_name']); ?>">
<label>Email</label><input type="email" name="email" value="<?php echo e($student['email']); ?>">
<label>Roll No</label><input type="text" name="roll_no" value="<?php echo e($student['roll_no']); ?>">
<label>Department</label><input type="text" name="department" value="<?php echo e($student['department']); ?>">
<button class="btn">Update</button>
</form>
</div>
</body>
</html>