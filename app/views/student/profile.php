<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile - <?= $name ?></title>
<style>
  body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 40px; text-align: center; }
  .card { background: white; max-width: 400px; margin: 0 auto; padding: 30px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); text-align: left; }
  h1 { color: #2c3e50; text-align: center; }
  p { margin: 8px 0; }
  a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #2c3e50; color: white; text-decoration: none; border-radius: 5px; }
</style>
</head>
<body>
  <h1>Student Information</h1>
  <div class="card">
    <p><strong>Student ID:</strong> <?= $student_id ?></p>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Year Level:</strong> <?= $year ?></p>
    <p><strong>Section:</strong> <?= $section ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
  </div>
  <div style="text-align:center;">
    <a href="<?= site_url('student') ?>">Back to Home</a>
  </div>
</body>
</html>
