<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --text: #18181b;
            --muted: #71717a;
            --border: rgba(255, 255, 255, 0.6);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                         Roboto, Helvetica, Arial, sans-serif;

            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

            padding: 24px;
            color: var(--text);

            background:
                radial-gradient(circle at 15% 20%, rgba(99, 102, 241, .18), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(139, 92, 246, .18), transparent 30%),
                linear-gradient(135deg, #f8fafc, #eef2ff);

            position: relative;
            overflow: hidden;
        }

        /* Decorative background circles */
        body::before,
        body::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            filter: blur(2px);
            pointer-events: none;
        }

        body::before {
            width: 280px;
            height: 280px;
            background: rgba(99, 102, 241, .10);
            top: -100px;
            right: -80px;
        }

        body::after {
            width: 220px;
            height: 220px;
            background: rgba(168, 85, 247, .10);
            bottom: -80px;
            left: -70px;
        }

        .card {
            width: 100%;
            max-width: 440px;

            padding: 42px;

            background: rgba(255, 255, 255, 0.78);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            border: 1px solid var(--border);
            border-radius: 24px;

            box-shadow:
                0 25px 60px rgba(15, 23, 42, .10),
                0 8px 20px rgba(15, 23, 42, .05);

            position: relative;
            z-index: 1;

            animation: cardEnter .6s ease-out;
        }

        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Avatar */
        .avatar {
            width: 58px;
            height: 58px;

            border-radius: 16px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 28px;

            background: linear-gradient(
                135deg,
                var(--primary),
                #8b5cf6
            );

            color: white;

            font-size: 18px;
            font-weight: 800;

            box-shadow:
                0 10px 25px rgba(99, 102, 241, .28);

            position: relative;
        }

        .avatar::after {
            content: "";
            position: absolute;
            inset: -4px;

            border-radius: 19px;

            border: 1px solid rgba(99, 102, 241, .18);

            pointer-events: none;
        }

        /* Heading */
        h1 {
            font-size: clamp(27px, 5vw, 34px);
            line-height: 1.2;
            letter-spacing: -1px;
            font-weight: 750;

            margin-bottom: 14px;
        }

        h1 span {
            background: linear-gradient(
                90deg,
                var(--primary-dark),
                #8b5cf6
            );

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        p.desc {
            color: var(--muted);

            font-size: 15px;
            line-height: 1.7;

            margin-bottom: 28px;
        }

        /* Alert */
        .alert {
            display: flex;
            align-items: flex-start;
            gap: 10px;

            background: #fff1f2;
            color: #be123c;

            border: 1px solid #ffe4e6;
            border-radius: 12px;

            padding: 13px 15px;

            font-size: 13px;
            font-weight: 600;
            line-height: 1.5;

            margin-bottom: 22px;
        }

        .alert::before {
            content: "!";
            min-width: 20px;
            height: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #fb7185;
            color: white;

            font-size: 12px;
            font-weight: 800;
        }

        /* Button */
        a.btn {
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            padding: 15px 20px;

            background: linear-gradient(
                135deg,
                #18181b,
                #27272a
            );

            color: white;
            text-decoration: none;

            border-radius: 12px;

            font-size: 14px;
            font-weight: 700;

            box-shadow:
                0 8px 18px rgba(24, 24, 27, .15);

            transition:
                transform .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        a.btn span {
            transition: transform .2s ease;
        }

        a.btn:hover {
            background: linear-gradient(
                135deg,
                var(--primary-dark),
                #7c3aed
            );

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(79, 70, 229, .25);
        }

        a.btn:hover span {
            transform: translateX(4px);
        }

        a.btn:active {
            transform: translateY(0);
        }

        /* Footer */
        .footer {
            margin-top: 26px;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            color: #a1a1aa;

            font-size: 12px;
            font-weight: 500;
        }

        .footer .dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: #22c55e;

            box-shadow:
                0 0 0 4px rgba(34, 197, 94, .10);

            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 4px rgba(34, 197, 94, .10);
            }

            50% {
                box-shadow: 0 0 0 7px rgba(34, 197, 94, .03);
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            body {
                padding: 18px;
            }

            .card {
                padding: 30px 24px;
                border-radius: 20px;
            }

            .avatar {
                width: 52px;
                height: 52px;
                border-radius: 14px;
            }

            h1 {
                font-size: 28px;
            }

            p.desc {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="avatar">AE</div>

        <h1>
            Welcome back,<br>
            <span>Alex Ethan</span>
        </h1>

        <p class="desc">
            Access your student records, academic details,
            and personal information anytime.
        </p>

        <?php if (isset($_SESSION['access_denied_msg'])): ?>

            <div class="alert">
                <?= $_SESSION['access_denied_msg'] ?>
            </div>

            <?php unset($_SESSION['access_denied_msg']); ?>

        <?php endif; ?>

        <a class="btn" href="<?= site_url('student/profile') ?>">
            View Profile
            <span>&#8594;</span>
        </a>

        <div class="footer">
            <span class="dot"></span>
            <span>Student Portal</span>
            <span>&middot;</span>
            <span>Online</span>
        </div>

    </div>

</body>
</html>