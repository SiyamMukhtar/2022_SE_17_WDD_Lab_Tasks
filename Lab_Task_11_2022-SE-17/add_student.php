<?php
require 'db.php';
$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$fn = trim($_POST['first_name']);
$ln = trim($_POST['last_name']);
$email = trim($_POST['email']);
$roll = trim($_POST['roll_no']);
$dept = trim($_POST['department']);


if(!$fn || !$ln || !$email || !$roll || !$dept) $errors[] = 'All fields are required.';


if(!$errors){
$stmt = $mysqli->prepare("INSERT INTO students(first_name,last_name,email,roll_no,department) VALUES(?,?,?,?,?)");
$stmt->bind_param('sssss',$fn,$ln,$email,$roll,$dept);
$stmt->execute();
$stmt->close();
echo '<script>alert("Student Added!"); window.location="view_student.php";</script>';
}
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="container">
<h1>Add Student</h1>
<?php foreach($errors as $e) echo '<p style="color:red">'.e($e).'</p>'; ?>
<form method="post">
<label>First Name</label><input type="text" name="first_name">
<label>Last Name</label><input type="text" name="last_name">
<label>Email</label><input type="email" name="email">
<label>Roll No</label><input type="text" name="roll_no">
<label>Department</label><input type="text" name="department">
<button class="btn">Add Student</button>
</form>
</div>
</body>
</html>