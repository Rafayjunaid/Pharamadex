<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expired Medicine | PharmaDex</title>

    <style>
        .expired-page {
            margin-left: 245px;
            min-height: 100vh;
            background: #f5fbfd;
            padding: 35px 40px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            color: #03045e;
        }

        .expired-page__header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 30px;
        }

        .expired-page__heading h1 {
            margin: 0;
            color: #03045e;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .expired-page__heading p {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }

        .expired-page__status {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 9px 13px;
            border: 1px solid #d9edf2;
            background: #ffffff;
            color: #0077b6;
            font-size: 12px;
            font-weight: 500;
        }

        .expired-page__status-dot {
            width: 7px;
            height: 7px;
            background: #0077b6;
            border-radius: 50%;
        }

        .expired-report {
            max-width: 850px;
            background: #ffffff;
            border: 1px solid #dbecef;
            box-shadow: 0 8px 25px rgba(3, 4, 94, 0.06);
        }

        .expired-report__top {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 20px 24px;
            border-bottom: 1px solid #e5f1f4;
        }

        .expired-report__avatar {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #03045e;
            color: #caf0f8;
            font-size: 14px;
            font-weight: 600;
        }

        .expired-report__identity h3 {
            margin: 0;
            color: #03045e;
            font-size: 14px;
            font-weight: 600;
        }

        .expired-report__identity span {
            display: block;
            margin-top: 4px;
            color: #7a8b94;
            font-size: 12px;
        }

        .expired-report__conversation {
            padding: 28px 24px 30px;
        }

        .expired-report__message {
            max-width: 620px;
            margin-bottom: 28px;
        }

        .expired-report__message p {
            margin: 0;
            padding: 15px 18px;
            background: #f0faff;
            border-left: 3px solid #0077b6;
            color: #334155;
            font-size: 14px;
            line-height: 1.6;
        }

        .expired-report__field {
            margin-bottom: 20px;
        }

        .expired-report__label {
            display: block;
            margin-bottom: 8px;
            color: #03045e;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .expired-report__input,
        .expired-report__textarea {
            width: 100%;
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

        .expired-report__input {
            height: 44px;
            padding: 0 13px;
        }

        .expired-report__textarea {
            min-height: 105px;
            padding: 13px;
            resize: vertical;
            line-height: 1.5;
        }

        .expired-report__input::placeholder,
        .expired-report__textarea::placeholder {
            color: #9aaeb7;
        }

        .expired-report__input:focus,
        .expired-report__textarea:focus {
            border-color: #0077b6;
            box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.08);
        }

        .expired-report__row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .expired-report__footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 18px;
            margin-top: 8px;
            padding-top: 22px;
            border-top: 1px solid #e5f1f4;
        }

        .expired-report__note {
            margin-right: auto;
            color: #82939b;
            font-size: 11px;
        }

        .expired-report__button {
            height: 43px;
            padding: 0 22px;
            border: 0;
            background: #0077b6;
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease,
                        transform 0.2s ease;
        }

        .expired-report__button:hover {
            background: #03045e;
        }

        .expired-report__button:active {
            transform: translateY(1px);
        }

        /* SUCCESS ALERT */
        .expired-success {
            position: fixed;
            top: 25px;
            right: 25px;
            width: 340px;
            background: #ffffff;
            border: 1px solid #d6ebf0;
            border-left: 4px solid #0077b6;
            box-shadow: 0 12px 35px rgba(3, 4, 94, 0.15);
            padding: 17px 18px;
            display: flex;
            align-items: flex-start;
            gap: 13px;
            opacity: 0;
            visibility: hidden;
            transform: translateX(30px);
            transition: opacity 0.3s ease,
                        transform 0.3s ease,
                        visibility 0.3s ease;
            z-index: 9999;
        }

        .expired-success--show {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        .expired-success__icon {
            width: 28px;
            height: 28px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #caf0f8;
            color: #0077b6;
            font-size: 15px;
            font-weight: 700;
        }

        .expired-success__content strong {
            display: block;
            color: #03045e;
            font-size: 13px;
            font-weight: 600;
        }

        .expired-success__content span {
            display: block;
            margin-top: 4px;
            color: #687b84;
            font-size: 12px;
            line-height: 1.4;
        }

        .expired-success__close {
            margin-left: auto;
            padding: 0;
            border: 0;
            background: transparent;
            color: #82939b;
            font-size: 17px;
            cursor: pointer;
        }

        @media (max-width: 900px) {
            .expired-page {
                margin-left: 210px;
                padding: 28px;
            }

            .expired-page__header {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }
        }

        @media (max-width: 650px) {
            .expired-page {
                margin-left: 0;
                padding: 22px 16px;
            }

            .expired-report__conversation {
                padding: 22px 18px;
            }

            .expired-report__row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .expired-report__footer {
                align-items: flex-start;
                flex-direction: column;
            }

            .expired-report__note {
                margin-right: 0;
            }

            .expired-report__button {
                width: 100%;
            }

            .expired-success {
                left: 16px;
                right: 16px;
                width: auto;
            }
        }
    </style>
</head>

<body>

    @include('Dashboard/Staff/sidebar');

  @if (!session()->has('user_id') || !session()->has('user_role'))
    <script>
        window.location.href = "/loginPage";
    </script>
@endif

    <main class="expired-page">

        <header class="expired-page__header">
            <div class="expired-page__heading">
                <h1>Expired Medicine</h1>
                <p>Submit an expired medicine record for review by the administration team.</p>
            </div>

            <div class="expired-page__status">
                <span class="expired-page__status-dot"></span>
                Staff Portal
            </div>
        </header>

        <section class="expired-report">

            <div class="expired-report__top">
                <div class="expired-report__avatar">ST</div>

                <div class="expired-report__identity">
                    <h3>Staff Member</h3>
                    <span>New expiry report</span>
                </div>
            </div>

            <div class="expired-report__conversation">

                <div class="expired-report__message">
                    <p>
                        Please provide the details of the expired medicine below.
                        This report will be forwarded to the admin for review and record keeping.
                    </p>
                </div>

                <form action="/Expired_Medicine" method="POST">
                    @csrf

                    <div class="expired-report__field">
                        <label class="expired-report__label" for="Medicine_Name">
                            Medicine Name
                        </label>

                        <input
                            class="expired-report__input"
                            type="text"
                            id="Medicine_Name"
                            name="Medicine_Name"
                            placeholder="Enter medicine name"
                            required
                        >
                    </div>

                    <div class="expired-report__field">
                        <label class="expired-report__label" for="Type">
                            Medicine Type
                        </label>

                        <select
                            class="expired-report__input"
                            id="Type"
                            name="Type"
                            required
                        >
                            <option value="" disabled selected>Select medicine type</option>
                            <option value="Syrup">Syrup</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Injection">Injection</option>
                            <option value="Drop">Drop</option>
                            <option value="Cream">Cream</option>
                            <option value="Capsule">Capsule</option>
                            <option value="Ointment">Ointment</option>
                            <option value="Suspension">Suspension</option>
                            <option value="Lotion">Lotion</option>
                            <option value="Powder">Powder</option>
                            <option value="Inhaler">Inhaler</option>
                            <option value="Spray">Spray</option>
                            <option value="Gel">Gel</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="expired-report__row">

                        <div class="expired-report__field">
                            <label class="expired-report__label" for="Quantity">
                                Quantity
                            </label>

                            <input
                                class="expired-report__input"
                                type="number"
                                id="Quantity"
                                name="Quantity"
                                placeholder="Enter quantity"
                                min="1"
                                required
                            >
                        </div>

                        <div class="expired-report__field">
                            <label class="expired-report__label" for="Expiry_Date">
                                Expiry Date
                            </label>

                            <input
                                class="expired-report__input"
                                type="date"
                                id="Expiry_Date"
                                name="Expiry_Date"
                                required
                            >
                        </div>

                    </div>

                    <div class="expired-report__field">
                        <label class="expired-report__label" for="Date_Discovered">
                            Date Discovered
                        </label>

                        <input
                            class="expired-report__input"
                            type="date"
                            id="Date_Discovered"
                            name="Date_Discovered"
                            required
                        >
                    </div>

                    <div class="expired-report__field">
                        <label class="expired-report__label" for="Notes">
                            Notes
                        </label>

                        <textarea
                            class="expired-report__textarea"
                            id="Notes"
                            name="Notes"
                            placeholder="Add any additional information about the expired medicine..."
                            required
                        ></textarea>
                    </div>

                    <div class="expired-report__footer">
                        <span class="expired-report__note">
                            The record will be sent directly to admin.
                        </span>

                        <button class="expired-report__button" type="submit">
                            Send Report to Admin
                        </button>
                    </div>

                </form>

            </div>

        </section>

    </main>

    <!-- SUCCESS POPUP -->
    <div class="expired-success" id="expiredSuccess">
        <div class="expired-success__icon">✓</div>

        <div class="expired-success__content">
            <strong>Report Sent Successfully</strong>
            <span>The expired medicine record has been submitted to admin.</span>
        </div>

        <button
            class="expired-success__close"
            type="button"
            onclick="closeExpiredSuccess()"
        >
            ×
        </button>
    </div>

    <script>
        function showExpiredSuccess() {
            const alertBox = document.getElementById('expiredSuccess');

            if (alertBox) {
                alertBox.classList.add('expired-success--show');

                setTimeout(function () {
                    alertBox.classList.remove('expired-success--show');
                }, 5000);
            }
        }

        function closeExpiredSuccess() {
            const alertBox = document.getElementById('expiredSuccess');

            if (alertBox) {
                alertBox.classList.remove('expired-success--show');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {

            @if(session('success'))
                showExpiredSuccess();
            @endif

        });
    </script>

</body>
</html>