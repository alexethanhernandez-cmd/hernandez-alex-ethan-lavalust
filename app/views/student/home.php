<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Home - Alex Ethan Hernandez</title>
<style>
  body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 40px; text-align: center; }
  h1 { color: #2c3e50; }
  a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #2c3e50; color: white; text-decoration: none; border-radius: 5px; }
  a:hover { background: #34495e; }
</style>
</head>
<body>
  <h1>Welcome to My Student Page</h1>
  <p>This is the home page for Alex Ethan Hernandez's LavaLust Student Information System.</p>
  <a href="<?= site_url('student/profile') ?>">View My Profile</a>
</body>
</html>