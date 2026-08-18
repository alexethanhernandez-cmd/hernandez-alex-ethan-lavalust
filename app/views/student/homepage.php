<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: -apple-system, 'Segoe UI', system-ui, sans-serif;
            background: #fafafa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            color: #18181b;
        }

        .card {
            max-width: 380px;
            width: 100%;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: #4f46e5;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
        }

        h1 {
            font-size: 26px;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: -0.5px;
            margin-bottom: 10px;
        }

        p.desc {
            font-size: 15px;
            color: #71717a;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        .alert {
            background: #fef2f2;
            color: #b91c1c;
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        a.btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 13px 22px;
            background: #18181b;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            border-radius: 8px;
            transition: background 0.15s ease;
        }

        a.btn:hover {
            background: #4f46e5;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #a1a1aa;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer .dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #22c55e;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar">AE</div>

        <h1>Welcome back,<br>Alex Ethan</h1>
        <p class="desc">Access your student records, academic details, and personal information anytime.</p>

        <?php if (isset($_SESSION['access_denied_msg'])): ?>
            <div class="alert"><?= $_SESSION['access_denied_msg'] ?></div>
            <?php unset($_SESSION['access_denied_msg']); ?>
        <?php endif; ?>

        <a class="btn" href="<?= site_url('student/profile') ?>">View Profile &#8594;</a>

        <div class="footer">
            <span class="dot"></span> Student Portal &middot; Online
        </div>
    </div>
</body>
</html>