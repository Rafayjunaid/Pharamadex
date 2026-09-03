<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaDex | Pharmacy Management</title>

    <style>
        .pharmadex-home {
            min-height: 100vh;
            background: #f5fbfd;
            font-family: Arial, Helvetica, sans-serif;
            color: #03045e;
            display: flex;
            flex-direction: column;
        }

        .pharmadex-home__nav {
            height: 72px;
            padding: 0 55px;
            background: #ffffff;
            border-bottom: 1px solid #dbecef;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
        }

        .pharmadex-home__brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .pharmadex-home__logo {
            width: 38px;
            height: 38px;
            background: #03045e;
            color: #caf0f8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
        }

        .pharmadex-home__brand-name {
            color: #03045e;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: -0.2px;
        }

        .pharmadex-home__brand-subtitle {
            display: block;
            margin-top: 2px;
            color: #7a8b94;
            font-size: 9px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .pharmadex-home__nav-link {
            color: #03045e;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 10px 17px;
            border: 1px solid #d5e7ec;
            transition: background-color 0.2s ease,
                        color 0.2s ease,
                        border-color 0.2s ease;
        }

        .pharmadex-home__nav-link:hover {
            background: #0077b6;
            border-color: #0077b6;
            color: #ffffff;
        }

        .pharmadex-home__hero {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 70px 55px;
            box-sizing: border-box;
        }

        .pharmadex-home__hero-content {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 80px;
            align-items: center;
        }

        .pharmadex-home__eyebrow {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 18px;
            color: #0077b6;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .pharmadex-home__eyebrow-line {
            width: 28px;
            height: 1px;
            background: #0077b6;
        }

        .pharmadex-home__title {
            max-width: 650px;
            margin: 0;
            color: #03045e;
            font-size: 48px;
            line-height: 1.12;
            font-weight: 600;
            letter-spacing: -1.5px;
        }

        .pharmadex-home__title span {
            color: #0077b6;
        }

        .pharmadex-home__description {
            max-width: 570px;
            margin: 22px 0 0;
            color: #64748b;
            font-size: 15px;
            line-height: 1.7;
        }

        .pharmadex-home__actions {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-top: 32px;
        }

        .pharmadex-home__primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 46px;
            padding: 0 25px;
            background: #0077b6;
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: background-color 0.2s ease,
                        transform 0.2s ease;
        }

        .pharmadex-home__primary:hover {
            background: #03045e;
            transform: translateY(-1px);
        }

        .pharmadex-home__secondary {
            color: #03045e;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
        }

        .pharmadex-home__secondary:hover {
            color: #0077b6;
        }

        .pharmadex-home__panel {
            background: #03045e;
            padding: 28px;
            min-height: 300px;
            box-sizing: border-box;
            position: relative;
        }

        .pharmadex-home__panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(202, 240, 248, 0.15);
        }

        .pharmadex-home__panel-title {
            color: #ffffff;
            font-size: 13px;
            font-weight: 600;
        }

        .pharmadex-home__panel-status {
            color: #caf0f8;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .pharmadex-home__stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-top: 25px;
        }

        .pharmadex-home__stat {
            padding: 18px 0;
            border-bottom: 1px solid rgba(202, 240, 248, 0.12);
        }

        .pharmadex-home__stat:nth-child(odd) {
            padding-right: 20px;
            border-right: 1px solid rgba(202, 240, 248, 0.12);
        }

        .pharmadex-home__stat:nth-child(even) {
            padding-left: 20px;
        }

        .pharmadex-home__stat:nth-child(3),
        .pharmadex-home__stat:nth-child(4) {
            border-bottom: 0;
        }

        .pharmadex-home__stat-value {
            color: #ffffff;
            font-size: 24px;
            font-weight: 600;
        }

        .pharmadex-home__stat-label {
            display: block;
            margin-top: 6px;
            color: #caf0f8;
            font-size: 10px;
            letter-spacing: 0.3px;
        }

        .pharmadex-home__panel-accent {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #0077b6;
        }

        .pharmadex-home__footer {
            padding: 18px 55px;
            border-top: 1px solid #dbecef;
            background: #ffffff;
            color: #82939b;
            text-align: center;
            font-size: 11px;
        }

        @media (max-width: 850px) {
            .pharmadex-home__nav {
                padding: 0 25px;
            }

            .pharmadex-home__hero {
                padding: 50px 25px;
            }

            .pharmadex-home__hero-content {
                grid-template-columns: 1fr;
                gap: 45px;
            }

            .pharmadex-home__title {
                font-size: 40px;
            }

            .pharmadex-home__footer {
                padding: 18px 25px;
            }
        }

        @media (max-width: 500px) {
            .pharmadex-home__nav {
                height: 65px;
            }

            .pharmadex-home__brand-subtitle {
                display: none;
            }

            .pharmadex-home__hero {
                padding: 40px 18px;
            }

            .pharmadex-home__title {
                font-size: 34px;
            }

            .pharmadex-home__description {
                font-size: 14px;
            }

            .pharmadex-home__actions {
                align-items: flex-start;
                flex-direction: column;
            }

            .pharmadex-home__primary {
                width: 100%;
            }

            .pharmadex-home__panel {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <div class="pharmadex-home">

        <nav class="pharmadex-home__nav">

            <div class="pharmadex-home__brand">
                <div class="pharmadex-home__logo">
                    PD
                </div>

                <div>
                    <div class="pharmadex-home__brand-name">
                        PharmaDex
                    </div>

                    <span class="pharmadex-home__brand-subtitle">
                        Pharmacy Management
                    </span>
                </div>
            </div>

            <a href="/loginPage" class="pharmadex-home__nav-link">
                Login
            </a>

        </nav>

        <main class="pharmadex-home__hero">

            <div class="pharmadex-home__hero-content">

                <section>

                    <div class="pharmadex-home__eyebrow">
                        <span class="pharmadex-home__eyebrow-line"></span>
                        Pharmacy Management System
                    </div>

                    <h1 class="pharmadex-home__title">
                        Manage your pharmacy with <span>clarity.</span>
                    </h1>

                    <p class="pharmadex-home__description">
                        PharmaDex provides a centralized workspace for managing
                        medicine sales, stock, returns, damaged products and
                        expired medicine records.
                    </p>

                    <div class="pharmadex-home__actions">
                        <a href="/loginPage" class="pharmadex-home__primary">
                            Access Dashboard
                        </a>

                        <!-- <a href="{{route('admin.manage')}}" class="pharmadex-home__secondary">
                            admin
                        </a> -->
                    </div>

                </section>

                <section class="pharmadex-home__panel">

                    <div class="pharmadex-home__panel-header">
                        <span class="pharmadex-home__panel-title">
                            Pharmacy Overview
                        </span>

                        <span class="pharmadex-home__panel-status">
                            System Ready
                        </span>
                    </div>

                    <div class="pharmadex-home__stats">

                        <div class="pharmadex-home__stat">
                            <div class="pharmadex-home__stat-value">24/7</div>
                            <span class="pharmadex-home__stat-label">
                                System Access
                            </span>
                        </div>

                        <div class="pharmadex-home__stat">
                            <div class="pharmadex-home__stat-value">01</div>
                            <span class="pharmadex-home__stat-label">
                                Central Dashboard
                            </span>
                        </div>

                        <div class="pharmadex-home__stat">
                            <div class="pharmadex-home__stat-value">05</div>
                            <span class="pharmadex-home__stat-label">
                                Record Categories
                            </span>
                        </div>

                        <div class="pharmadex-home__stat">
                            <div class="pharmadex-home__stat-value">100%</div>
                            <span class="pharmadex-home__stat-label">
                                Centralized Records
                            </span>
                        </div>

                    </div>

                    <div class="pharmadex-home__panel-accent"></div>

                </section>

            </div>

        </main>

        <footer class="pharmadex-home__footer">
            PharmaDex Pharmacy Management System
        </footer>

    </div>

</body>
</html>