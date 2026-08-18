<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - <?= $name ?></title>
    <style>
        * { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(135deg, #eef2f7 0%, #dfe9f3 100%);
            min-height: 100vh;
            padding: 60px 20px;
            margin: 0;
        }

        .card {
            max-width: 480px;
            margin: auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 0 0 30px;
            box-shadow: 0 10px 30px rgba(44, 62, 80, 0.12);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 40px 30px 60px;
            text-align: center;
            position: relative;
        }

        .card-header h1 {
            color: #fff;
            margin: 0;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #ffffff;
            color: #2c3e50;
            font-size: 34px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px auto -55px;
            border: 4px solid #ffffff;
            box-shadow: 0 6px 16px rgba(0,0,0,0.15);
            position: relative;
        }

        .info {
            padding: 65px 30px 10px;
        }

        .info-row {
            display: flex;
            flex-direction: column;
            padding: 12px 0;
            border-bottom: 1px solid #f0f2f5;
        }

        .info-row:last-child { border-bottom: none; }

        .info-row .label {
            color: #8a94a6;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .info-row .value {
            color: #2c3e50;
            font-weight: 600;
            font-size: 15px;
            text-align: left;
        }

        .nav {
            text-align: center;
            margin-top: 25px;
        }

        .nav a {
            display: inline-block;
            margin: 0 6px;
            padding: 10px 18px;
            color: #2c3e50;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            border: 2px solid #2c3e50;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .nav a:hover {
            background: #2c3e50;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Student Information</h1>
            <div class="avatar"><?= strtoupper(substr($name, 0, 1)) ?></div>
        </div>

        <div class="info">
            <div class="info-row">
                <span class="label">Student ID</span>
                <span class="value"><?= $student_id ?></span>
            </div>
            <div class="info-row">
                <span class="label">Name</span>
                <span class="value"><?= $name ?></span>
            </div>
            <div class="info-row">
                <span class="label">Course</span>
                <span class="value"><?= $course ?></span>
            </div>
            <div class="info-row">
                <span class="label">Year Level</span>
                <span class="value"><?= $year ?></span>
            </div>
            <div class="info-row">
                <span class="label">Section</span>
                <span class="value"><?= $section ?></span>
            </div>
            <div class="info-row">
                <span class="label">Email</span>
                <span class="value"><?= $email ?></span>
            </div>
            <div class="info-row">
                <span class="label">Hobbies</span>
                <span class="value"><?= $hobbies ?></span>
            </div>
        </div>
    </div>

    <div class="nav">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>
</body>
</html>