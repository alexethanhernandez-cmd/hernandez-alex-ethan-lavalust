<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - <?= $name ?></title>
    <?php
        // Fallback in case the controller hasn't passed first_name/last_name yet
        if (!isset($first_name) || !isset($last_name)) {
            $parts = explode(' ', trim($name));
            $first_name = $first_name ?? ($parts[0] ?? '');
            $last_name  = $last_name ?? (count($parts) > 1 ? end($parts) : '');
        }
    ?>
    <style>
        * { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(135deg, #eef2f7 0%, #dfe9f3 100%);
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
        }

        .page {
            max-width: 900px;
            margin: 0 auto;
        }

        .card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(44, 62, 80, 0.15);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 36px 40px;
            position: relative;
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .home-btn {
            position: absolute;
            top: 24px;
            right: 30px;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            padding: 9px 16px;
            border-radius: 8px;
            transition: background 0.2s ease;
        }

        .home-btn:hover {
            background: rgba(255, 255, 255, 0.28);
        }

        .avatar {
            width: 92px;
            height: 92px;
            min-width: 92px;
            border-radius: 50%;
            background: transparent;
            color: #fff;
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid rgba(255, 255, 255, 0.6);
        }

        .header-text h1 {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 6px;
        }

        .header-text .sub {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 2px;
        }

        .header-text .sub2 {
            color: rgba(255, 255, 255, 0.7);
            font-size: 13px;
            margin: 0 0 12px;
        }

        .id-badge {
            display: inline-block;
            background: rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 6px 14px;
            border-radius: 20px;
        }

        .section {
            padding: 30px 40px 10px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: 700;
            color: #2c3e50;
            margin: 0 0 18px;
        }

        .section-title .bar {
            width: 4px;
            height: 18px;
            background: #2c3e50;
            border-radius: 2px;
        }

        .highlight-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-bottom: 20px;
        }

        .highlight-box {
            background: #eef2f7;
            border-radius: 12px;
            padding: 18px 10px;
            text-align: center;
        }

        .highlight-box .big {
            font-size: 18px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .highlight-box .small {
            font-size: 11px;
            color: #8a94a6;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 20px;
        }

        .info-box {
            border: 1px solid #e5eaf0;
            border-radius: 12px;
            padding: 14px 18px;
        }

        .info-box .label {
            font-size: 11px;
            font-weight: 700;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .info-box .value {
            font-size: 15px;
            color: #333;
        }

        .card-footer {
            padding: 25px 40px 35px;
            text-align: center;
            border-top: 1px solid #eef1f5;
            background: #f8fafc;
        }

        .quote {
            font-style: italic;
            font-size: 18px;
            color: #5a6472;
            max-width: 480px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .quote .mark {
            color: #2c3e50;
            font-weight: 700;
            font-size: 24px;
        }

        @media (max-width: 600px) {
            .card-header { flex-direction: column; text-align: center; }
            .home-btn { position: static; margin-top: 16px; }
            .highlight-grid, .info-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="card">
            <div class="card-header">
                <a class="home-btn" href="<?= site_url('student') ?>">&#8592; Home</a>
                <div class="avatar"><?= strtoupper(substr($first_name, 0, 1)) . strtoupper(substr($last_name, 0, 1)) ?></div>
                <div class="header-text">
                    <h1><?= $name ?></h1>
                    <p class="sub"><?= $course ?> &middot; <?= $year ?></p>
                    <p class="sub2"><?= $college ?> &middot; <?= $campus ?></p>
                    <span class="id-badge">STUDENT ID: <?= $student_id ?></span>
                </div>
            </div>

            <div class="section">
                <p class="section-title"><span class="bar"></span> Academic Information</p>
                <div class="highlight-grid">
                    <div class="highlight-box">
                        <div class="big"><?= $program ?></div>
                        <div class="small">Program</div>
                    </div>
                    <div class="highlight-box">
                        <div class="big"><?= $year ?></div>
                        <div class="small">Year Level</div>
                    </div>
                    <div class="highlight-box">
                        <div class="big"><?= $section ?></div>
                        <div class="small">Section</div>
                    </div>
                </div>
                <div class="info-grid">
                    <div class="info-box">
                        <div class="label">School</div>
                        <div class="value"><?= $school ?></div>
                    </div>
                    <div class="info-box">
                        <div class="label">Campus</div>
                        <div class="value"><?= $campus ?></div>
                    </div>
                    <div class="info-box">
                        <div class="label">Academic Year</div>
                        <div class="value"><?= $academic_year ?></div>
                    </div>
                    <div class="info-box">
                        <div class="label">Semester</div>
                        <div class="value"><?= $semester ?></div>
                    </div>
                    <div class="info-box">
                        <div class="label">Status</div>
                        <div class="value"><?= $status ?></div>
                    </div>
                </div>
            </div>

            <div class="section">
                <p class="section-title"><span class="bar"></span> Contact Information</p>
                <div class="info-grid">
                    <div class="info-box">
                        <div class="label">Email</div>
                        <div class="value"><?= $email ?></div>
                    </div>
                    <div class="info-box">
                        <div class="label">Contact Number</div>
                        <div class="value"><?= $contact_number ?></div>
                    </div>
                    <div class="info-box" style="grid-column: 1 / -1;">
                        <div class="label">Address</div>
                        <div class="value"><?= $address ?></div>
                    </div>
                </div>
            </div>

            <div class="section">
                <p class="section-title"><span class="bar"></span> Interests</p>
                <div class="info-grid">
                    <div class="info-box" style="grid-column: 1 / -1;">
                        <div class="label">Hobbies</div>
                        <div class="value"><?= $hobbies ?></div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <p class="quote"><span class="mark">&#8220;</span>Own Your Story.<span class="mark">&#8221;</span></p>
            </div>
        </div>
    </div>
</body>
</html>