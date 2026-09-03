<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Return | PharmaDex</title>

    <style>
        .success-popup {
            position: fixed;
            top: 25px;
            right: 25px;
            background: #023e8a;
            color: white;
            padding: 15px 22px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 9999;
            animation: slideIn 0.4s ease;
        }

        .success-popup span {
            color: #caf0f8;
            font-size: 20px;
            font-weight: bold;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .return-page {
            margin-left: 245px;
            min-height: 100vh;
            background: #f5fbfd;
            padding: 35px 40px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            color: #03045e;
        }

        .return-page__header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 30px;
        }

        .return-page__heading h1 {
            margin: 0;
            color: #03045e;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .return-page__heading p {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }

        .return-page__status {
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

        .return-page__status-dot {
            width: 7px;
            height: 7px;
            background: #0077b6;
            border-radius: 50%;
        }

        .return-report {
            max-width: 850px;
            background: #ffffff;
            border: 1px solid #dbecef;
            box-shadow: 0 8px 25px rgba(3, 4, 94, 0.06);
        }

        .return-report__top {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 20px 24px;
            border-bottom: 1px solid #e5f1f4;
        }

        .return-report__avatar {
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

        .return-report__identity h3 {
            margin: 0;
            color: #03045e;
            font-size: 14px;
            font-weight: 600;
        }

        .return-report__identity span {
            display: block;
            margin-top: 4px;
            color: #7a8b94;
            font-size: 12px;
        }

        .return-report__conversation {
            padding: 28px 24px 30px;
        }

        .return-report__message {
            max-width: 620px;
            margin-bottom: 28px;
        }

        .return-report__message p {
            margin: 0;
            padding: 15px 18px;
            background: #f0faff;
            border-left: 3px solid #0077b6;
            color: #334155;
            font-size: 14px;
            line-height: 1.6;
        }

        .return-report__field {
            margin-bottom: 20px;
        }

        .return-report__label {
            display: block;
            margin-bottom: 8px;
            color: #03045e;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .return-report__input,
        .return-report__select,
        .return-report__textarea {
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

        .return-report__input,
        .return-report__select {
            height: 44px;
            padding: 0 13px;
        }

        .return-report__textarea {
            min-height: 105px;
            padding: 13px;
            resize: vertical;
            line-height: 1.5;
        }

        .return-report__input::placeholder,
        .return-report__textarea::placeholder {
            color: #9aaeb7;
        }

        .return-report__input:focus,
        .return-report__select:focus,
        .return-report__textarea:focus {
            border-color: #0077b6;
            box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.08);
        }

        .return-report__row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .return-report__footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 18px;
            margin-top: 8px;
            padding-top: 22px;
            border-top: 1px solid #e5f1f4;
        }

        .return-report__note {
            margin-right: auto;
            color: #82939b;
            font-size: 11px;
        }

        .return-report__button {
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

        .return-report__button:hover {
            background: #03045e;
        }

        .return-report__button:active {
            transform: translateY(1px);
        }

        .return-success {
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

        .return-success--show {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        .return-success__icon {
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

        .return-success__content strong {
            display: block;
            color: #03045e;
            font-size: 13px;
            font-weight: 600;
        }

        .return-success__content span {
            display: block;
            margin-top: 4px;
            color: #687b84;
            font-size: 12px;
            line-height: 1.4;
        }

        .return-success__close {
            margin-left: auto;
            padding: 0;
            border: 0;
            background: transparent;
            color: #82939b;
            font-size: 17px;
            cursor: pointer;
        }

        @media (max-width: 900px) {
            .return-page {
                margin-left: 210px;
                padding: 28px;
            }

            .return-page__header {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }
        }

        @media (max-width: 650px) {
            .return-page {
                margin-left: 0;
                padding: 22px 16px;
            }

            .return-report__conversation {
                padding: 22px 18px;
            }

            .return-report__row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .return-report__footer {
                align-items: flex-start;
                flex-direction: column;
            }

            .return-report__note {
                margin-right: 0;
            }

            .return-report__button {
                width: 100%;
            }

            .return-success {
                left: 16px;
                right: 16px;
                width: auto;
            }
        }
    </style>
</head>

<body>

    @include('Dashboard/Staff/sidebar')
@if (!session()->has('user_id') || !session()->has('user_role'))
    <script>
        window.location.href = "/loginPage";
    </script>
@endif

    <main class="return-page">

        <header class="return-page__header">
            <div class="return-page__heading">
                <h1>Medicine Return</h1>
                <p>Submit a medicine return record for review by the administration team.</p>
            </div>

            <div class="return-page__status">
                <span class="return-page__status-dot"></span>
                Staff Portal
            </div>
        </header>

        <section class="return-report">

            <div class="return-report__top">
                <div class="return-report__avatar">ST</div>

                <div class="return-report__identity">
                    <h3>Staff Member</h3>
                    <span>New medicine return report</span>
                </div>
            </div>

            <div class="return-report__conversation">

                <div class="return-report__message">
                    <p>
                        Please provide the details of the returned medicine below.
                        This report will be forwarded to the admin for review and record keeping.
                    </p>
                </div>

                <form action="/Medicine_Return" method="POST">
                    @csrf

                    <div class="return-report__field">
                        <label class="return-report__label" for="Medicine_Name">
                            Medicine Name
                        </label>

                        <input
                            class="return-report__input"
                            type="text"
                            id="Medicine_Name"
                            name="Medicine_Name"
                            placeholder="Enter medicine name"
                            required
                        >
                    </div>

                    <div class="return-report__field">
                        <label class="return-report__label" for="Type">
                            Medicine Type
                        </label>

                        <select
                            class="return-report__select"
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

                    <div class="return-report__row">

                        <div class="return-report__field">
                            <label class="return-report__label" for="Batch_Number">
                                Batch Number
                            </label>

                            <input
                                class="return-report__input"
                                type="number"
                                id="Batch_Number"
                                name="Batch_Number"
                                placeholder="Enter batch number"
                                required
                            >
                        </div>

                        <div class="return-report__field">
                            <label class="return-report__label" for="Quantity">
                                Quantity
                            </label>

                            <input
                                class="return-report__input"
                                type="number"
                                id="Quantity"
                                name="Quantity"
                                placeholder="Enter quantity"
                                min="1"
                                required
                            >
                        </div>

                    </div>

                    <div class="return-report__field">
                        <label class="return-report__label" for="Customer">
                            Customer
                        </label>

                        <input
                            class="return-report__input"
                            type="text"
                            id="Customer"
                            name="Customer"
                            placeholder="Enter customer name"
                            required
                        >
                    </div>

                    <div class="return-report__field">
                        <label class="return-report__label" for="Condition_Of_Medicine">
                            Condition of Medicine
                        </label>

                        <select
                            class="return-report__select"
                            name="Condition_Of_Medicine"
                            id="Condition_Of_Medicine"
                            required
                        >
                            <option value="" disabled selected>Select condition</option>
                            <option value="Opened">Good condition</option>
                            <option value="Un Opened">Damaged packaging</option>
                        </select>
                    </div>

                    <div class="return-report__field">
                        <label class="return-report__label" for="Reason_for_Return">
                            Reason for Return
                        </label>

                        <textarea
                            class="return-report__textarea"
                            id="Reason_for_Return"
                            name="Reason_for_Return"
                            placeholder="Describe the reason for returning the medicine..."
                            required
                        ></textarea>
                    </div>

                    <div class="return-report__footer">
                        <span class="return-report__note">
                            The return record will be sent directly to admin.
                        </span>

                        <button class="return-report__button" type="submit">
                            Send Return to Admin
                        </button>
                    </div>

                </form>

            </div>

        </section>

    </main>

    <!-- SUCCESS POPUP -->
    <div class="return-success" id="returnSuccess">

        <div class="return-success__icon">✓</div>

        <div class="return-success__content">
            <strong>Return Sent Successfully</strong>
            <span>
                The medicine return record has been submitted to admin.
            </span>
        </div>

        <button
            class="return-success__close"
            type="button"
            onclick="closeReturnSuccess()"
        >
            ×
        </button>

    </div>

    <script>

        function showReturnSuccess() {

            const alertBox = document.getElementById('returnSuccess');

            if (alertBox) {

                alertBox.classList.add('return-success--show');

                setTimeout(function () {
                    alertBox.classList.remove('return-success--show');
                }, 5000);

            }
        }

        function closeReturnSuccess() {

            const alertBox = document.getElementById('returnSuccess');

            if (alertBox) {
                alertBox.classList.remove('return-success--show');
            }

        }

        document.addEventListener('DOMContentLoaded', function () {

            @if(session('success'))
                showReturnSuccess();
            @endif

        });

    </script>

</body>
</html>