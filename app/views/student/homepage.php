<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <style>
        * { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(135deg, #eef2f7 0%, #dfe9f3 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .card {
            max-width: 520px;
            width: 100%;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(44, 62, 80, 0.15);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 45px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .deco-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .deco-circle.c1 {
            width: 130px;
            height: 130px;
            top: -50px;
            left: -30px;
        }

        .deco-circle.c2 {
            width: 160px;
            height: 160px;
            bottom: -90px;
            right: -40px;
        }

        .avatar {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: #ffffff;
            color: #2c3e50;
            font-size: 22px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            box-shadow: 0 6px 16px rgba(0,0,0,0.15);
        }

        .card-body {
            padding: 40px 40px 30px;
            text-align: center;
        }

        .card-body h1 {
            color: #2c3e50;
            font-size: 26px;
            font-weight: 700;
            margin: 0 0 14px;
            line-height: 1.3;
        }

        .card-body h1 .highlight {
            color: #34495e;
        }

        .card-body p {
            color: #7a7a85;
            font-size: 15px;
            line-height: 1.6;
            margin: 0 0 28px;
        }

        .alert {
            background: #fdecea;
            color: #c0392b;
            border: 1px solid #f5c6c0;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 24px;
            text-align: left;
        }

        a.btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 32px;
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            border-radius: 10px;
            transition: all 0.2s ease;
        }

        a.btn:hover {
            background: #1a252f;
            transform: translateY(-1px);
        }

        .dots {
            display: flex;
            justify-content: center;
            gap: 6px;
            margin-top: 26px;
        }

        .dots span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #dfe4ea;
        }

        .dots span.active {
            background: #2c3e50;
        }

        .card-footer {
            border-top: 1px solid #eef1f5;
            padding: 16px;
            text-align: center;
            font-size: 13px;
            color: #8a94a6;
            background: #f8fafc;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <div class="deco-circle c1"></div>
            <div class="deco-circle c2"></div>
            <div class="avatar">AE</div>
        </div>

        <div class="card-body">
            <h1>Welcome to the <span class="highlight">Student Information</span></h1>
            <p>Your space to view student information, academic details, and personal profile.</p>

            <?php if (isset($_SESSION['access_denied_msg'])): ?>
                <div class="alert">
                    <?= $_SESSION['access_denied_msg'] ?>
                </div>
                <?php unset($_SESSION['access_denied_msg']); ?>
            <?php endif; ?>

            <a class="btn" href="<?= site_url('student/profile') ?>">View Student Profile &#8594;</a>

            <div class="dots">
                <span></span>
                <span class="active"></span>
                <span></span>
            </div>
        </div>

        <div class="card-footer">Student Info</div>
    </div>
</body>
</html>