<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PharmaDex</title>

    <style>
        .pharmadex-login {
            min-height: 100vh;
            background: #f5fbfd;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .pharmadex-login__container {
            width: 100%;
            max-width: 430px;
            background: #ffffff;
            border: 1px solid #dbecef;
            box-shadow: 0 12px 35px rgba(3, 4, 94, 0.08);
        }

        .pharmadex-login__header {
            padding: 30px 32px 24px;
            border-bottom: 1px solid #e5f1f4;
        }

        .pharmadex-login__brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .pharmadex-login__logo {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #03045e;
            color: #caf0f8;
            font-size: 14px;
            font-weight: 600;
        }

        .pharmadex-login__brand-name {
            color: #03045e;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: -0.2px;
        }

        .pharmadex-login__brand-subtitle {
            display: block;
            margin-top: 3px;
            color: #7a8b94;
            font-size: 10px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .pharmadex-login__title {
            margin: 0;
            color: #03045e;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: -0.4px;
        }

        .pharmadex-login__description {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 13px;
            line-height: 1.5;
        }

        .pharmadex-login__body {
            padding: 28px 32px 32px;
        }

        .pharmadex-login__alert {
            margin-bottom: 22px;
            padding: 12px 14px;
            border: 1px solid #f0caca;
            border-left: 3px solid #c0392b;
            background: #fff8f8;
            color: #a93226;
            font-size: 12px;
            line-height: 1.5;
        }

        .pharmadex-login__field {
            margin-bottom: 20px;
        }

        .pharmadex-login__label {
            display: block;
            margin-bottom: 8px;
            color: #03045e;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.15px;
        }

        .pharmadex-login__input {
            width: 100%;
            height: 46px;
            padding: 0 13px;
            border: 1px solid #d5e7ec;
            background: #ffffff;
            color: #172b4d;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.2s ease,
                        box-shadow 0.2s ease;
        }

        .pharmadex-login__input::placeholder {
            color: #9aaeb7;
        }

        .pharmadex-login__input:focus {
            border-color: #0077b6;
            box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.08);
        }

        .pharmadex-login__error {
            margin: 7px 0 0;
            color: #b42318;
            font-size: 11px;
            line-height: 1.4;
        }

        .pharmadex-login__button {
            width: 100%;
            height: 46px;
            margin-top: 5px;
            border: 0;
            background: #0077b6;
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.1px;
            cursor: pointer;
            transition: background-color 0.2s ease,
                        transform 0.2s ease;
        }

        .pharmadex-login__button:hover {
            background: #03045e;
        }

        .pharmadex-login__button:active {
            transform: translateY(1px);
        }

        .pharmadex-login__footer {
            padding: 17px 32px;
            border-top: 1px solid #e5f1f4;
            background: #fafdfe;
            color: #82939b;
            text-align: center;
            font-size: 11px;
        }

        @media (max-width: 500px) {
            .pharmadex-login {
                padding: 18px;
            }

            .pharmadex-login__header {
                padding: 25px 22px 21px;
            }

            .pharmadex-login__body {
                padding: 24px 22px 27px;
            }

            .pharmadex-login__footer {
                padding: 15px 22px;
            }
        }
    </style>
</head>

<body>

    <main class="pharmadex-login">

        <section class="pharmadex-login__container">

            <header class="pharmadex-login__header">

                <div class="pharmadex-login__brand">
                    <div class="pharmadex-login__logo">
                        PD
                    </div>

                    <div>
                        <div class="pharmadex-login__brand-name">
                            PharmaDex
                        </div>

                        <span class="pharmadex-login__brand-subtitle">
                            Pharmacy Management
                        </span>
                    </div>
                </div>

                <h1 class="pharmadex-login__title">
                    Welcome back
                </h1>

                <p class="pharmadex-login__description">
                    Sign in to access your pharmacy management dashboard.
                </p>

            </header>

            <div class="pharmadex-login__body">

                @if(session('error'))
                    <div class="pharmadex-login__alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="/Login" method="POST">
                    @csrf

                    <div class="pharmadex-login__field">
                        <label class="pharmadex-login__label" for="email">
                            Email Address
                        </label>

                        <input
                            class="pharmadex-login__input"
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email address"
                            autocomplete="email"
                            required
                        >

                        @error('email')
                            <p class="pharmadex-login__error">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="pharmadex-login__field">
                        <label class="pharmadex-login__label" for="password">
                            Password
                        </label>

                        <input
                            class="pharmadex-login__input"
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        @error('password')
                            <p class="pharmadex-login__error">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <button
                        class="pharmadex-login__button"
                        type="submit"
                    >
                        Sign In
                    </button>
                   

                </form>

            </div>

            <footer class="pharmadex-login__footer">
                Secure access to PharmaDex Pharmacy Management System
            </footer>

        </section>

    </main>

</body>
</html>