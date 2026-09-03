<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damaged Medicine | PharmaDex</title>

    <style>
        .damage-page {
            margin-left: 245px;
            min-height: 100vh;
            background: #f5fbfd;
            font-family: Arial, Helvetica, sans-serif;
            color: #03045e;
            padding: 35px 40px;
            box-sizing: border-box;
        }

        .damage-page__header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 30px;
        }

        .damage-page__heading h1 {
            margin: 0;
            color: #03045e;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .damage-page__heading p {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }

        .damage-page__status {
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

        .damage-page__status-dot {
            width: 7px;
            height: 7px;
            background: #0077b6;
            border-radius: 50%;
        }

        .damage-report {
            max-width: 850px;
            background: #ffffff;
            border: 1px solid #dbecef;
            box-shadow: 0 8px 25px rgba(3, 4, 94, 0.06);
        }

        .damage-report__top {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 20px 24px;
            border-bottom: 1px solid #e5f1f4;
        }

        .damage-report__avatar {
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

        .damage-report__identity h3 {
            margin: 0;
            color: #03045e;
            font-size: 14px;
            font-weight: 600;
        }

        .damage-report__identity span {
            display: block;
            margin-top: 4px;
            color: #7a8b94;
            font-size: 12px;
        }

        .damage-report__conversation {
            padding: 28px 24px 30px;
        }

        .damage-report__message {
            max-width: 620px;
            margin-bottom: 28px;
        }

        .damage-report__message p {
            margin: 0;
            padding: 15px 18px;
            background: #f0faff;
            border-left: 3px solid #0077b6;
            color: #334155;
            font-size: 14px;
            line-height: 1.6;
        }

        .damage-report__label {
            display: block;
            margin: 0 0 8px;
            color: #03045e;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .damage-report__field {
            margin-bottom: 20px;
        }

        .damage-report__input,
        .damage-report__textarea {
            width: 100%;
            border: 1px solid #d5e7ec;
            background: #ffffff;
            color: #172b4d;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s ease,
                        box-shadow 0.2s ease;
            box-sizing: border-box;
        }

        .damage-report__input {
            height: 44px;
            padding: 0 13px;
        }

        .damage-report__textarea {
            min-height: 105px;
            padding: 13px;
            resize: vertical;
            line-height: 1.5;
        }

        .damage-report__input::placeholder,
        .damage-report__textarea::placeholder {
            color: #9aaeb7;
        }

        .damage-report__input:focus,
        .damage-report__textarea:focus {
            border-color: #0077b6;
            box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.08);
        }

        .damage-report__row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .damage-report__footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 18px;
            margin-top: 8px;
            padding-top: 22px;
            border-top: 1px solid #e5f1f4;
        }

        .damage-report__note {
            margin-right: auto;
            color: #82939b;
            font-size: 11px;
        }

        .damage-report__button {
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

        .damage-report__button:hover {
            background: #03045e;
        }

        .damage-report__button:active {
            transform: translateY(1px);
        }

        .damage-success {
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

        .damage-success--show {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        .damage-success__icon {
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

        .damage-success__content strong {
            display: block;
            color: #03045e;
            font-size: 13px;
            font-weight: 600;
        }

        .damage-success__content span {
            display: block;
            margin-top: 4px;
            color: #687b84;
            font-size: 12px;
            line-height: 1.4;
        }

        .damage-success__close {
            margin-left: auto;
            padding: 0;
            border: 0;
            background: transparent;
            color: #82939b;
            font-size: 17px;
            cursor: pointer;
        }

        @media (max-width: 900px) {
            .damage-page {
                margin-left: 210px;
                padding: 28px;
            }

            .damage-page__header {
                align-items: flex-start;
                gap: 20px;
                flex-direction: column;
            }
        }

        @media (max-width: 650px) {
            .damage-page {
                margin-left: 0;
                padding: 22px 16px;
            }

            .damage-report__row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .damage-report__conversation {
                padding: 22px 18px;
            }

            .damage-report__footer {
                align-items: flex-start;
                flex-direction: column;
            }

            .damage-report__note {
                margin-right: 0;
            }

            .damage-report__button {
                width: 100%;
            }

            .damage-success {
                left: 16px;
                right: 16px;
                width: auto;
            }
        }
        .success-popup {
    position: fixed;
    top: 25px;
    right: 25px;
    background: #111;
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
    color: #4ade80;
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
    </style>
</head>

<body>
@if (!session()->has('user_id') || !session()->has('user_role'))
    <script>
        window.location.href = "/loginPage";
    </script>
@endif

@if(session('success'))
    <div class="success-popup" id="successPopup">
        <span>✓</span>
        {{ session('success') }}
    </div>
@endif
    @include('Dashboard/Staff/sidebar')

    <main class="damage-page">

        <header class="damage-page__header">
            <div class="damage-page__heading">
                <h1>Damaged Medicine</h1>
                <p>Submit a damaged medicine record for review by the administration team.</p>
            </div>

            <div class="damage-page__status">
                <span class="damage-page__status-dot"></span>
                Staff Portal
            </div>
        </header>

        <section class="damage-report">

            <div class="damage-report__top">
                <div class="damage-report__avatar">ST</div>

                <div class="damage-report__identity">
                    <h3>Staff Member</h3>
                    <span>New medicine damage report</span>
                </div>
            </div>

            <div class="damage-report__conversation">

                <div class="damage-report__message">
                    <p>
                        Please provide the details of the damaged medicine below.
                        This report will be forwarded to the admin for review and record keeping.
                    </p>
                </div>

                <form action="/Damaged_Medicine" method="POST">
                    @csrf

                    <div class="damage-report__field">
                        <label class="damage-report__label" for="Medicine_Name">
                            Medicine Name
                        </label>

                        <input
                            class="damage-report__input"
                            type="text"
                            id="Medicine_Name"
                            name="Medicine_Name"
                            placeholder="Enter medicine name"
                            required
                        >
                    </div>

                    <div class="damage-report__field">
                        <label class="damage-report__label" for="Type">
                            Medicine Type
                        </label>

                        <select
                            class="damage-report__input"
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

                    <div class="damage-report__row">

                        <div class="damage-report__field">
                            <label class="damage-report__label" for="Quantity_Damaged">
                                Quantity Damaged
                            </label>

                            <input
                                class="damage-report__input"
                                type="number"
                                id="Quantity_Damaged"
                                name="Quantity_Damaged"
                                placeholder="Enter quantity"
                                min="1"
                                required
                            >
                        </div>

                        <div class="damage-report__field">
                            <label class="damage-report__label" for="Batch_Number">
                                Batch Number
                            </label>

                            <input
                                class="damage-report__input"
                                type="text"
                                id="Batch_Number"
                                name="Batch_Number"
                                placeholder="Enter batch number"
                                required
                            >
                        </div>

                    </div>

                    <div class="damage-report__field">
                        <label class="damage-report__label" for="Reason_for_Damage">
                            Reason for Damage
                        </label>

                        <textarea
                            class="damage-report__textarea"
                            id="Reason_for_Damage"
                            name="Reason_for_Damage"
                            placeholder="Describe what happened to the medicine..."
                            required
                        ></textarea>
                    </div>

                    <div class="damage-report__footer">
                        <span class="damage-report__note">
                            The record will be sent directly to admin.
                        </span>

                        <button class="damage-report__button" type="submit">
                            Send Report to Admin
                        </button>
                    </div>

                </form>

            </div>

        </section>

    </main>

    <div class="damage-success" id="damageSuccess">
        <div class="damage-success__icon">✓</div>

        <div class="damage-success__content">
            <strong>Report Sent Successfully</strong>
            <span>The damaged medicine record has been submitted to admin.</span>
        </div>

        <button class="damage-success__close" type="button" onclick="closeDamageSuccess()">
            ×
        </button>
    </div>

    <script>
        // function showDamageSuccess() {
        //     const alertBox = document.getElementById('damageSuccess');

        //     if (alertBox) {
        //         alertBox.classList.add('damage-success--show');

        //         setTimeout(function () {
        //             alertBox.classList.remove('damage-success--show');
        //         }, 5000);
        //     }
        // }

        // function closeDamageSuccess() {
        //     const alertBox = document.getElementById('damageSuccess');

        //     if (alertBox) {
        //         alertBox.classList.remove('damage-success--show');
        //     }
        // }

        // @if(session('success'))
        //     showDamageSuccess();
        // @endif

    setTimeout(() => {
        const popup = document.getElementById('successPopup');

        if (popup) {
            popup.style.opacity = '0';
            popup.style.transform = 'translateX(100px)';

            setTimeout(() => {
                popup.remove();
            }, 400);
        }
    }, 3000);
</script>
   

</body>
</html>