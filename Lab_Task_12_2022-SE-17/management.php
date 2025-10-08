<?php
require 'db.php';
$res = $mysqli->query("SELECT * FROM students ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Management</title><link rel="stylesheet" href="styles.css"></head>
<body>
<div class="container">
<h1>Management Dashboard</h1>
<table>
<tr><th>ID</th><th>Name</th><th>Roll</th><th>Department</th><th>Action</th></tr>
<?php while($s=$res->fetch_assoc()): ?>
<tr>
<td><?php echo e($s['id']); ?></td>
<td><?php echo e($s['first_name'].' '.$s['last_name']); ?></td>
<td><?php echo e($s['roll_no']); ?></td>
<td><?php echo e($s['department']); ?></td>
<td>
<a class="btn" href="edit_student.php?id=<?php echo e($s['id']); ?>">Edit</a>
<a class="btn-danger" href="delete_student.php?id=<?php echo e($s['id']); ?>" onclick="return confirm('Delete this record?');">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
<br>
<a href="index.php" class="btn">Back</a>
</div>
</body>
</html>