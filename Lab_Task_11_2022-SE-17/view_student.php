<?php
require 'db.php';
$res = $mysqli->query("SELECT * FROM students ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>View Students</title><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="container">
<h1>All Students</h1>
<table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Roll No</th><th>Department</th></tr>
<?php while($r = $res->fetch_assoc()): ?>
<tr>
<td><?php echo e($r['id']); ?></td>
<td><?php echo e($r['first_name'].' '.$r['last_name']); ?></td>
<td><?php echo e($r['email']); ?></td>
<td><?php echo e($r['roll_no']); ?></td>
<td><?php echo e($r['department']); ?></td>
</tr>
<?php endwhile; ?>
</table>
<br>
<a href="index.php" class="btn">Back</a>
</div>
</body>
</html>