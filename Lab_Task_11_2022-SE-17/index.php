<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>🎓 Student Management System</h1>
    <p class="subtitle">Manage student records easily — add, view, update, or delete.</p>

    <div class="btn-group">
      <a href="add_student.php" class="btn">➕ Add New Student</a>
      <a href="view_student.php" class="btn secondary">📋 View All Students</a>
    </div>

    <footer>
      <p>Developed for Lab Task 11 & 12 | PHP + MySQL CRUD</p>
    </footer>
  </div>
</body>
</html>
