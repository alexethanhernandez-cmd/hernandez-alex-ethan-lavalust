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
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --text: #18181b;
            --muted: #71717a;
            --border: #d4d4d8;
            --background: #fafafa;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont,
                         "Segoe UI", Roboto, Helvetica, Arial, sans-serif;

            background: var(--background);

            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 24px;

            color: var(--text);
        }

        /* Main Card */
        .card {
            width: 100%;
            max-width: 440px;

            padding: 42px;

            background: #ffffff;

            /* Border */
            border: 1px solid var(--border);

            border-radius: 20px;

            /* Subtle shadow */
            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.06),
                0 2px 8px rgba(0, 0, 0, 0.03);

            position: relative;

            animation: cardEnter 0.5s ease-out;
        }

        /* Card animation */
        @keyframes cardEnter {
            from {
                opacity: 0;
                transform: translateY(15px);
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

            border-radius: 14px;

            background: linear-gradient(
                135deg,
                #6366f1,
                #4f46e5
            );

            color: #ffffff;

            font-size: 17px;
            font-weight: 700;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 28px;

            box-shadow:
                0 6px 15px rgba(79, 70, 229, 0.22);
        }

        /* Heading */
        h1 {
            font-size: 30px;
            font-weight: 750;

            line-height: 1.25;

            letter-spacing: -0.7px;

            margin-bottom: 12px;
        }

        h1 span {
            color: var(--primary);
        }

        /* Description */
        p.desc {
            font-size: 15px;

            color: var(--muted);

            line-height: 1.65;

            margin-bottom: 30px;
        }

        /* Alert */
        .alert {
            display: flex;
            align-items: flex-start;

            gap: 10px;

            background: #fef2f2;

            color: #b91c1c;

            border: 1px solid #fecaca;

            border-radius: 10px;

            padding: 12px 14px;

            font-size: 13px;

            font-weight: 600;

            line-height: 1.5;

            margin-bottom: 20px;
        }

        .alert::before {
            content: "!";

            width: 20px;
            height: 20px;

            min-width: 20px;

            border-radius: 50%;

            background: #ef4444;

            color: #ffffff;

            font-size: 12px;
            font-weight: 700;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Button */
        a.btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 14px 22px;

            background: #18181b;

            color: #ffffff;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            border-radius: 9px;

            transition:
                background 0.2s ease,
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        a.btn:hover {
            background: var(--primary);

            transform: translateY(-2px);

            box-shadow:
                0 8px 18px rgba(79, 70, 229, 0.25);
        }

        a.btn:active {
            transform: translateY(0);
        }

        .arrow {
            transition: transform 0.2s ease;
        }

        a.btn:hover .arrow {
            transform: translateX(4px);
        }

        /* Footer */
        .footer {
            margin-top: 34px;

            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 12px;

            color: #a1a1aa;
        }

        .footer .dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #22c55e;

            box-shadow:
                0 0 0 4px rgba(34, 197, 94, 0.08);
        }

        /* Mobile */
        @media (max-width: 480px) {

            body {
                padding: 16px;
            }

            .card {
                padding: 30px 24px;

                border-radius: 18px;
            }

            .avatar {
                width: 52px;
                height: 52px;

                border-radius: 13px;

                margin-bottom: 24px;
            }

            h1 {
                font-size: 27px;
            }

            p.desc {
                font-size: 14px;

                margin-bottom: 26px;
            }

            a.btn {
                width: 100%;
            }

            .footer {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <div class="card">

        <!-- Avatar -->
        <div class="avatar">
            AE
        </div>

        <!-- Welcome Message -->
        <h1>
            Welcome back,<br>
            <span>Alex Ethan</span>
        </h1>

        <p class="desc">
            Access your student records, academic details,
            and personal information anytime.
        </p>

        <!-- Access Denied Message -->
        <?php if (isset($_SESSION['access_denied_msg'])): ?>

            <div class="alert">
                <?= $_SESSION['access_denied_msg'] ?>
            </div>

            <?php unset($_SESSION['access_denied_msg']); ?>

        <?php endif; ?>

        <!-- Profile Button -->
        <a class="btn" href="<?= site_url('student/profile') ?>">
            View Profile
            <span class="arrow">&#8594;</span>
        </a>

        <!-- Status -->
        <div class="footer">
            <span class="dot"></span>
            <span>Student Portal</span>
            <span>&middot;</span>
            <span>Online</span>
        </div>

    </div>

</body>
</html>