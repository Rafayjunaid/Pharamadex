<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Received | PharmaDex</title>

    <style>
        .stock-page {
            margin-left: 245px;
            min-height: 100vh;
            background: #f5fbfd;
            padding: 35px 40px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            color: #03045e;
        }

        .stock-page__header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 30px;
        }

        .stock-page__heading h1 {
            margin: 0;
            color: #03045e;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .stock-page__heading p {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }

        .stock-page__status {
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

        .stock-page__status-dot {
            width: 7px;
            height: 7px;
            background: #0077b6;
            border-radius: 50%;
        }

        .stock-report {
            max-width: 850px;
            background: #ffffff;
            border: 1px solid #dbecef;
            box-shadow: 0 8px 25px rgba(3, 4, 94, 0.06);
        }

        .stock-report__top {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 20px 24px;
            border-bottom: 1px solid #e5f1f4;
        }

        .stock-report__avatar {
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

        .stock-report__identity h3 {
            margin: 0;
            color: #03045e;
            font-size: 14px;
            font-weight: 600;
        }

        .stock-report__identity span {
            display: block;
            margin-top: 4px;
            color: #7a8b94;
            font-size: 12px;
        }

        .stock-report__conversation {
            padding: 28px 24px 30px;
        }

        .stock-report__message {
            max-width: 620px;
            margin-bottom: 28px;
        }

        .stock-report__message p {
            margin: 0;
            padding: 15px 18px;
            background: #f0faff;
            border-left: 3px solid #0077b6;
            color: #334155;
            font-size: 14px;
            line-height: 1.6;
        }

        .stock-report__field {
            margin-bottom: 20px;
        }

        .stock-report__label {
            display: block;
            margin-bottom: 8px;
            color: #03045e;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .stock-report__input {
            width: 100%;
            height: 44px;
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

        .stock-report__input::placeholder {
            color: #9aaeb7;
        }

        .stock-report__input:focus {
            border-color: #0077b6;
            box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.08);
        }

        .stock-report__row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .stock-report__footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 18px;
            margin-top: 8px;
            padding-top: 22px;
            border-top: 1px solid #e5f1f4;
        }

        .stock-report__note {
            margin-right: auto;
            color: #82939b;
            font-size: 11px;
        }

        .stock-report__button {
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

        .stock-report__button:hover {
            background: #03045e;
        }

        .stock-report__button:active {
            transform: translateY(1px);
        }

        /* SUCCESS POPUP */
        .stock-success {
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

        .stock-success--show {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        .stock-success__icon {
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

        .stock-success__content strong {
            display: block;
            color: #03045e;
            font-size: 13px;
            font-weight: 600;
        }

        .stock-success__content span {
            display: block;
            margin-top: 4px;
            color: #687b84;
            font-size: 12px;
            line-height: 1.4;
        }

        .stock-success__close {
            margin-left: auto;
            padding: 0;
            border: 0;
            background: transparent;
            color: #82939b;
            font-size: 17px;
            cursor: pointer;
        }

        @media (max-width: 900px) {
            .stock-page {
                margin-left: 210px;
                padding: 28px;
            }

            .stock-page__header {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }
        }

        @media (max-width: 650px) {
            .stock-page {
                margin-left: 0;
                padding: 22px 16px;
            }

            .stock-report__conversation {
                padding: 22px 18px;
            }

            .stock-report__row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .stock-report__footer {
                align-items: flex-start;
                flex-direction: column;
            }

            .stock-report__note {
                margin-right: 0;
            }

            .stock-report__button {
                width: 100%;
            }

            .stock-success {
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

    <main class="stock-page">

        <header class="stock-page__header">

            <div class="stock-page__heading">
                <h1>Stock Received</h1>
                <p>
                    Submit newly received medicine stock for review by the administration team.
                </p>
            </div>

            <div class="stock-page__status">
                <span class="stock-page__status-dot"></span>
                Staff Portal
            </div>

        </header>

        <section class="stock-report">

            <div class="stock-report__top">

                <div class="stock-report__avatar">
                    ST
                </div>

                <div class="stock-report__identity">
                    <h3>Staff Member</h3>
                    <span>New stock receiving report</span>
                </div>

            </div>

            <div class="stock-report__conversation">

                <div class="stock-report__message">

                    <p>
                        Please provide the details of the medicine stock received.
                        This report will be forwarded to the admin for review and inventory records.
                    </p>

                </div>

                <form action="/Stock_Received" method="POST">

                    @csrf

                    <div class="stock-report__field">

                        <label class="stock-report__label" for="Medicine_Name">
                            Medicine Name
                        </label>

                        <input
                            class="stock-report__input"
                            type="text"
                            id="Medicine_Name"
                            name="Medicine_Name"
                            placeholder="Enter medicine name"
                            required
                        >

                    </div>

                    <div class="stock-report__field">

                        <label class="stock-report__label" for="Type">
                            Medicine Type
                        </label>

                        <select
                            class="stock-report__input"
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

                    <div class="stock-report__field">

                        <label class="stock-report__label" for="Supplier">
                            Supplier
                        </label>

                        <input
                            class="stock-report__input"
                            type="text"
                            id="Supplier"
                            name="Supplier"
                            placeholder="Enter supplier name"
                            required
                        >

                    </div>

                    <div class="stock-report__row">

                        <div class="stock-report__field">

                            <label class="stock-report__label" for="Batch_Number">
                                Batch Number
                            </label>

                            <input
                                class="stock-report__input"
                                type="number"
                                id="Batch_Number"
                                name="Batch_Number"
                                placeholder="Enter batch number"
                                required
                            >

                        </div>

                        <div class="stock-report__field">

                            <label class="stock-report__label" for="Quantity_Received">
                                Quantity Received
                            </label>

                            <input
                                class="stock-report__input"
                                type="number"
                                id="Quantity_Received"
                                name="Quantity_Received"
                                placeholder="Enter quantity"
                                min="1"
                                required
                            >

                        </div>

                    </div>

                    <div class="stock-report__footer">

                        <span class="stock-report__note">
                            The stock record will be sent directly to admin.
                        </span>

                        <button class="stock-report__button" type="submit">
                            Send Stock to Admin
                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

    <!-- SUCCESS POPUP -->

    <div class="stock-success" id="stockSuccess">

        <div class="stock-success__icon">
            ✓
        </div>

        <div class="stock-success__content">

            <strong>
                Stock Sent Successfully
            </strong>

            <span>
                The received stock record has been submitted to admin.
            </span>

        </div>

        <button
            class="stock-success__close"
            type="button"
            onclick="closeStockSuccess()"
        >
            ×
        </button>

    </div>

    <script>

        function showStockSuccess() {

            const alertBox = document.getElementById('stockSuccess');

            if (alertBox) {

                alertBox.classList.add('stock-success--show');

                setTimeout(function () {

                    alertBox.classList.remove('stock-success--show');

                }, 5000);

            }
        }


        function closeStockSuccess() {

            const alertBox = document.getElementById('stockSuccess');

            if (alertBox) {

                alertBox.classList.remove('stock-success--show');

            }

        }


        document.addEventListener('DOMContentLoaded', function () {

            @if(session('success'))
                showStockSuccess();
            @endif

        });

    </script>

</body>
</html>