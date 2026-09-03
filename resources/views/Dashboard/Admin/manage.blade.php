<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | PharmaDex</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        /* =====================================================
           GLOBAL
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --sidebar-width: 250px;

            --navy-950: #071426;
            --navy-900: #0b1f38;
            --navy-800: #102b4a;
            --navy-700: #163b61;

            --blue-500: #38bdf8;
            --blue-400: #60cfff;
            --blue-100: #e8f7ff;
            --blue-50: #f3fbff;

            --white: #ffffff;
            --border: #dbeaf3;
            --text: #102a43;
            --muted: #668096;

            --shadow-sm: 0 2px 8px rgba(7, 20, 38, 0.04);
            --shadow-md: 0 8px 24px rgba(7, 20, 38, 0.07);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", sans-serif;
            background: #f5faff;
            color: var(--text);
            line-height: 1.5;
            min-height: 100vh;
        }

        button,
        select {
            font-family: inherit;
        }


        /* =====================================================
           TOP NAVIGATION
        ===================================================== */

        .topbar {
            width: calc(100% - var(--sidebar-width));
            height: 74px;

            background: var(--white);
            border-bottom: 1px solid var(--border);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 42px;

            position: sticky;
            top: 0;
            margin-left: var(--sidebar-width);

            z-index: 100;

            box-shadow: var(--shadow-sm);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--navy-900);
            color: var(--blue-400);

            border-radius: 9px;

            font-size: 18px;
            font-weight: 800;
        }

        .brand-name {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: var(--navy-900);
        }

        .brand-name span {
            color: var(--blue-500);
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .system-status {
            display: flex;
            align-items: center;
            gap: 8px;

            padding: 8px 12px;

            border: 1px solid var(--border);
            border-radius: 8px;

            color: var(--muted);

            font-size: 12px;
            font-weight: 600;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--blue-500);
        }

        .admin-badge {
            padding: 9px 14px;

            background: var(--navy-900);
            color: white;

            border-radius: 8px;

            font-size: 12px;
            font-weight: 700;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            width: auto;
            max-width: 1480px;

            margin-left: calc(var(--sidebar-width) + 32px);
            margin-right: 32px;

            padding: 42px 0 70px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 30px;
            margin-bottom: 32px;
        }

        .page-title-area {
            max-width: 650px;
        }

        .eyebrow {
            color: var(--blue-500);

            font-size: 11px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 1.3px;

            margin-bottom: 8px;
        }

        .page-header h1 {
            color: var(--navy-950);

            font-size: 30px;
            line-height: 1.2;

            letter-spacing: -1px;

            margin-bottom: 7px;
        }

        .page-header p {
            color: var(--muted);
            font-size: 14px;
        }


        /* =====================================================
           FILTER
        ===================================================== */

        .filter-box {
            position: relative;
        }

        .filter-select {
            appearance: none;

            min-width: 205px;

            background-color: white;

            border: 1px solid var(--border);
            border-radius: 9px;

            padding: 12px 40px 12px 15px;

            color: var(--navy-900);

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;
            outline: none;

            background-image:
                linear-gradient(
                    45deg,
                    transparent 50%,
                    var(--navy-700) 50%
                ),
                linear-gradient(
                    135deg,
                    var(--navy-700) 50%,
                    transparent 50%
                );

            background-position:
                calc(100% - 17px) 16px,
                calc(100% - 12px) 16px;

            background-size:
                5px 5px,
                5px 5px;

            background-repeat: no-repeat;

            transition: 0.2s ease;
        }

        .filter-select:hover,
        .filter-select:focus {
            border-color: var(--blue-500);

            box-shadow:
                0 0 0 3px rgba(56, 189, 248, 0.12);
        }


        /* =====================================================
           ALERTS
        ===================================================== */

        .alert {
            display: flex;
            align-items: center;

            padding: 13px 16px;
            margin-bottom: 22px;

            border-radius: 9px;

            background: var(--blue-100);
            border: 1px solid #c9edff;

            color: var(--navy-800);

            font-size: 13px;
            font-weight: 600;
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(5, 1fr);

            gap: 14px;

            margin-bottom: 34px;
        }

        .stat-card {
            position: relative;

            background: white;

            border: 1px solid var(--border);
            border-radius: 11px;

            padding: 20px;

            min-height: 126px;

            box-shadow: var(--shadow-sm);

            cursor: pointer;

            transition:
                transform 0.2s ease,
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);

            border-color: #a9dff5;

            box-shadow: var(--shadow-md);
        }

        .stat-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background: var(--blue-500);

            border-radius: 11px 11px 0 0;
        }

        .stat-label {
            color: var(--muted);

            font-size: 12px;
            font-weight: 700;

            text-transform: uppercase;
            letter-spacing: 0.4px;

            margin-bottom: 12px;
        }

        .stat-number {
            color: var(--navy-950);

            font-size: 29px;
            line-height: 1;

            font-weight: 800;

            letter-spacing: -1px;
        }

        .stat-link {
            color: var(--blue-500);

            font-size: 11px;
            font-weight: 700;

            margin-top: 12px;

            display: block;
        }


        /* =====================================================
           SECTIONS
        ===================================================== */

        .records {
            display: flex;
            flex-direction: column;

            gap: 22px;
        }

        .section {
            background: white;

            border: 1px solid var(--border);
            border-radius: 12px;

            overflow: hidden;

            box-shadow: var(--shadow-sm);

            scroll-margin-top: 100px;

            opacity: 1;
            transform: translateY(0);

            transition:
                opacity 0.35s ease,
                transform 0.35s ease,
                box-shadow 0.25s ease,
                border-color 0.25s ease;
        }

        .section.highlight {
            border-color: var(--blue-500);

            box-shadow:
                0 12px 30px rgba(56, 189, 248, 0.12);
        }

        .section.fade-target {
            animation: sectionFocus 0.6s ease;
        }

        @keyframes sectionFocus {
            0% {
                opacity: 0.2;
                transform: translateY(-8px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* =====================================================
           SECTION HEADER
        ===================================================== */

        .section-header {
            min-height: 68px;

            padding: 16px 20px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid var(--border);

            background: #fbfdff;
        }

        .section-heading {
            display: flex;
            align-items: center;

            gap: 11px;
        }

        .section-icon {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--blue-100);
            color: var(--navy-800);

            border-radius: 8px;

            font-size: 13px;
            font-weight: 800;
        }

        .section-header h2 {
            color: var(--navy-900);

            font-size: 15px;
            font-weight: 800;

            letter-spacing: -0.2px;
        }

        .section-subtitle {
            color: var(--muted);

            font-size: 11px;
            font-weight: 500;

            margin-top: 2px;
        }

        .pending-count {
            background: var(--blue-100);
            color: var(--navy-800);

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 800;
        }


        /* =====================================================
           TABLE
        ===================================================== */

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 720px;
        }

        th {
            padding: 12px 18px;

            background: #f8fcff;

            border-bottom: 1px solid var(--border);

            color: #71879a;

            text-align: left;

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 0.65px;

            white-space: nowrap;
        }

        td {
            padding: 15px 18px;

            border-bottom: 1px solid #edf4f8;

            color: var(--text);

            font-size: 12px;
            font-weight: 500;

            vertical-align: middle;
        }

        tbody tr {
            transition: background 0.15s ease;
        }

        tbody tr:hover {
            background: var(--blue-50);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .medicine-name {
            color: var(--navy-900);
            font-weight: 700;
        }

        .batch-number {
            color: var(--muted);

            font-family: monospace;

            font-size: 12px;
            font-weight: 600;
        }

        .quantity {
            color: var(--navy-900);
            font-weight: 800;
        }


        /* =====================================================
           STATUS
        ===================================================== */

        .status {
            display: inline-flex;
            align-items: center;

            gap: 6px;

            padding: 5px 9px;

            border-radius: 20px;

            background: var(--blue-100);
            color: var(--navy-800);

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .status::before {
            content: "";

            width: 5px;
            height: 5px;

            border-radius: 50%;

            background: var(--blue-500);
        }


        /* =====================================================
           ACTIONS
        ===================================================== */

        .actions {
            display: flex;
            align-items: center;

            gap: 7px;
        }

        .actions form {
            margin: 0;
        }

        button {
            border: none;

            cursor: pointer;

            font-family: inherit;

            transition:
                background 0.2s ease,
                color 0.2s ease,
                transform 0.15s ease;
        }

        .approve,
        .reject {
            padding: 7px 11px;

            border-radius: 6px;

            font-size: 10px;
            font-weight: 800;
        }

        .approve {
            background: var(--navy-900);
            color: white;
        }

        .approve:hover {
            background: var(--navy-700);
            transform: translateY(-1px);
        }

        .reject {
            background: white;

            border: 1px solid #b9d8e8;

            color: var(--navy-800);
        }

        .reject:hover {
            background: var(--blue-100);

            border-color: var(--blue-500);

            transform: translateY(-1px);
        }


        /* =====================================================
           EMPTY
        ===================================================== */

        .empty {
            padding: 42px 20px;

            text-align: center;

            color: var(--muted);

            font-size: 12px;
            font-weight: 500;
        }

        .empty-icon {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 10px;

            border-radius: 50%;

            background: var(--blue-100);
            color: var(--navy-800);

            font-size: 13px;
            font-weight: 800;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            margin-top: 30px;

            padding-top: 20px;

            border-top: 1px solid var(--border);

            display: flex;
            align-items: center;
            justify-content: space-between;

            color: var(--muted);

            font-size: 11px;
        }

        .footer strong {
            color: var(--navy-800);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1200px) {

            .stats {
                grid-template-columns: repeat(3, 1fr);
            }
        }


        @media (max-width: 800px) {

            :root {
                --sidebar-width: 0px;
            }

            .topbar {
                width: 100%;
                margin-left: 0;

                padding: 0 20px;
            }

            .system-status {
                display: none;
            }

            .main {
                width: calc(100% - 32px);

                margin-left: 16px;
                margin-right: 16px;

                padding-top: 28px;
            }

            .page-header {
                align-items: flex-start;

                flex-direction: column;
            }

            .filter-select {
                width: 100%;
            }

            .filter-box {
                width: 100%;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }


        @media (max-width: 520px) {

            .topbar {
                height: 66px;

                padding: 0 14px;
            }

            .brand {
                gap: 8px;
            }

            .brand-mark {
                width: 34px;
                height: 34px;

                font-size: 16px;
            }

            .brand-name {
                font-size: 18px;
            }

            .admin-badge {
                padding: 8px 10px;

                font-size: 10px;
            }

            .main {
                width: calc(100% - 24px);

                margin-left: 12px;
                margin-right: 12px;

                padding-top: 22px;
            }

            .page-header h1 {
                font-size: 25px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .section-header {
                align-items: flex-start;

                gap: 12px;
            }

            .pending-count {
                flex-shrink: 0;
            }

            .footer {
                flex-direction: column;

                align-items: flex-start;

                gap: 5px;
            }
        }
    </style>
</head>


<body>

    {{-- SIDEBAR --}}
    @include('Dashboard.Admin.sidebar')


    {{-- TOPBAR --}}
    <header class="topbar">

        <div class="brand">

            <div class="brand-mark">
                P
            </div>

            <div class="brand-name">
                Pharma<span>Dex</span>
            </div>

        </div>


        <div class="topbar-right">

            <div class="system-status">
                <span class="status-dot"></span>
                Pharmacy System Online
            </div>

            <div class="admin-badge">
                Administrator
            </div>

        </div>

    </header>


    {{-- =====================================================
         MAIN
    ====================================================== --}}

    <main class="main">


        {{-- PAGE HEADER --}}

        <div class="page-header">

            <div class="page-title-area">

                <div class="eyebrow">
                    Pharmacy Management
                </div>

                <h1>
                    Manage Operations
                </h1>

                <p>
                    Review, verify and manage pharmacy records submitted by staff.
                </p>

            </div>


            {{-- FILTER --}}

            <div class="filter-box">

                <select
                    id="recordFilter"
                    class="filter-select"
                    aria-label="Filter records">

                    <option value="overview">
                        View all records
                    </option>

                    <option value="medicine-sold">
                        Medicine Sold
                    </option>

                    <option value="stock-received">
                        Stock Received
                    </option>

                    <option value="damaged-medicine">
                        Damaged Medicine
                    </option>

                    <option value="expired-medicine">
                        Expired Medicine
                    </option>

                    <option value="medicine-returns">
                        Medicine Returns
                    </option>

                </select>

            </div>

        </div>


        {{-- ALERTS --}}

        @if(session('success'))

            <div class="alert">
                {{ session('success') }}
            </div>

        @endif


        @if(session('error'))

            <div class="alert">
                {{ session('error') }}
            </div>

        @endif


        {{-- =====================================================
             STATISTICS
        ====================================================== --}}

        <div class="stats">


            <div class="stat-card" data-target="medicine-sold">

                <div class="stat-label">
                    Medicine Sold
                </div>

                <div class="stat-number">
                    {{ $sold->count() }}
                </div>

                <span class="stat-link">
                    View records →
                </span>

            </div>


            <div class="stat-card" data-target="stock-received">

                <div class="stat-label">
                    Stock Received
                </div>

                <div class="stat-number">
                    {{ $received->count() }}
                </div>

                <span class="stat-link">
                    View records →
                </span>

            </div>


            <div class="stat-card" data-target="damaged-medicine">

                <div class="stat-label">
                    Damaged
                </div>

                <div class="stat-number">
                    {{ $damaged->count() }}
                </div>

                <span class="stat-link">
                    View records →
                </span>

            </div>


            <div class="stat-card" data-target="expired-medicine">

                <div class="stat-label">
                    Expired
                </div>

                <div class="stat-number">
                    {{ $expired->count() }}
                </div>

                <span class="stat-link">
                    View records →
                </span>

            </div>


            <div class="stat-card" data-target="medicine-returns">

                <div class="stat-label">
                    Returns
                </div>

                <div class="stat-number">
                    {{ $returned->count() }}
                </div>

                <span class="stat-link">
                    View records →
                </span>

            </div>

        </div>


        {{-- =====================================================
             RECORD SECTIONS
        ====================================================== --}}

        <div class="records">


            {{-- =================================================
                 MEDICINE SOLD
            ================================================== --}}

            <section
                id="medicine-sold"
                class="section">

                <div class="section-header">

                    <div class="section-heading">

                        <div class="section-icon">
                            MS
                        </div>

                        <div>

                            <h2>
                                Medicine Sold
                            </h2>

                            <div class="section-subtitle">
                                Staff-submitted sales awaiting verification
                            </div>

                        </div>

                    </div>

                    <span class="pending-count">
                        {{ $sold->count() }} Pending
                    </span>

                </div>


                @if($sold->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>
                                    <th>Medicine</th>
                                    <th>Batch</th>
                                    <th>Customer</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach($sold as $record)

                                    <tr>

                                        <td class="medicine-name">
                                            {{ $record->Medicine_Name }}
                                        </td>

                                        <td class="batch-number">
                                            {{ $record->Batch_Number }}
                                        </td>

                                        <td>
                                            {{ $record->Customer_Name }}
                                        </td>

                                        <td class="quantity">
                                            {{ $record->Quantity_Sold }}
                                        </td>

                                        <td>

                                            <span class="status">
                                                {{ ucfirst($record->status) }}
                                            </span>

                                        </td>

                                        <td>

                                            <div class="actions">

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.medicine.sold.approve', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="approve">

                                                        Accept

                                                    </button>

                                                </form>


                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.medicine.sold.reject', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="reject">

                                                        Reject

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            ✓
                        </div>

                        No pending medicine sales.

                    </div>

                @endif

            </section>


            {{-- =================================================
                 STOCK RECEIVED
            ================================================== --}}

            <section
                id="stock-received"
                class="section">

                <div class="section-header">

                    <div class="section-heading">

                        <div class="section-icon">
                            SR
                        </div>

                        <div>

                            <h2>
                                Stock Received
                            </h2>

                            <div class="section-subtitle">
                                Incoming pharmacy inventory awaiting verification
                            </div>

                        </div>

                    </div>

                    <span class="pending-count">
                        {{ $received->count() }} Pending
                    </span>

                </div>


                @if($received->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>
                                    <th>Medicine</th>
                                    <th>Batch</th>
                                    <th>Supplier</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach($received as $record)

                                    <tr>

                                        <td class="medicine-name">
                                            {{ $record->Medicine_Name }}
                                        </td>

                                        <td class="batch-number">
                                            {{ $record->Batch_Number }}
                                        </td>

                                        <td>
                                            {{ $record->Supplier }}
                                        </td>

                                        <td class="quantity">
                                            {{ $record->Quantity_Received }}
                                        </td>

                                        <td>

                                            <span class="status">
                                                {{ ucfirst($record->status) }}
                                            </span>

                                        </td>

                                        <td>

                                            <div class="actions">

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.stock.received.approve', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="approve">

                                                        Accept

                                                    </button>

                                                </form>


                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.stock.received.reject', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="reject">

                                                        Reject

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            ✓
                        </div>

                        No pending stock received records.

                    </div>

                @endif

            </section>


            {{-- =================================================
                 DAMAGED MEDICINE
            ================================================== --}}

            <section
                id="damaged-medicine"
                class="section">

                <div class="section-header">

                    <div class="section-heading">

                        <div class="section-icon">
                            DM
                        </div>

                        <div>

                            <h2>
                                Damaged Medicine
                            </h2>

                            <div class="section-subtitle">
                                Damaged inventory reports submitted by staff
                            </div>

                        </div>

                    </div>

                    <span class="pending-count">
                        {{ $damaged->count() }} Pending
                    </span>

                </div>


                @if($damaged->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>
                                    <th>Medicine</th>
                                    <th>Batch</th>
                                    <th>Quantity</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach($damaged as $record)

                                    <tr>

                                        <td class="medicine-name">
                                            {{ $record->Medicine_Name }}
                                        </td>

                                        <td class="batch-number">
                                            {{ $record->Batch_Number }}
                                        </td>

                                        <td class="quantity">
                                            {{ $record->Quantity_Damaged }}
                                        </td>

                                        <td>
                                            {{ $record->Reason_for_Damage }}
                                        </td>

                                        <td>

                                            <span class="status">
                                                {{ ucfirst($record->status) }}
                                            </span>

                                        </td>

                                        <td>

                                            <div class="actions">

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.damaged.approve', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="approve">

                                                        Accept

                                                    </button>

                                                </form>


                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.damaged.reject', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="reject">

                                                        Reject

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            ✓
                        </div>

                        No pending damaged medicine records.

                    </div>

                @endif

            </section>


            {{-- =================================================
                 EXPIRED MEDICINE
            ================================================== --}}

            <section
                id="expired-medicine"
                class="section">

                <div class="section-header">

                    <div class="section-heading">

                        <div class="section-icon">
                            EM
                        </div>

                        <div>

                            <h2>
                                Expired Medicine
                            </h2>

                            <div class="section-subtitle">
                                Medicines requiring expiry verification
                            </div>

                        </div>

                    </div>

                    <span class="pending-count">
                        {{ $expired->count() }} Pending
                    </span>

                </div>


                @if($expired->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>
                                    <th>Medicine</th>
                                    <th>Batch</th>
                                    <th>Quantity</th>
                                    <th>Expiry Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach($expired as $record)

                                    <tr>

                                        <td class="medicine-name">
                                            {{ $record->Medicine_Name }}
                                        </td>

                                        <td class="batch-number">
                                            {{ $record->Batch_Number }}
                                        </td>

                                        <td class="quantity">
                                            {{ $record->Quantity }}
                                        </td>

                                        <td>
                                            {{ $record->Expiry_Date }}
                                        </td>

                                        <td>

                                            <span class="status">
                                                {{ ucfirst($record->status) }}
                                            </span>

                                        </td>

                                        <td>

                                            <div class="actions">

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.expired.approve', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="approve">

                                                        Accept

                                                    </button>

                                                </form>


                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.expired.reject', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="reject">

                                                        Reject

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            ✓
                        </div>

                        No pending expired medicine records.

                    </div>

                @endif

            </section>


            {{-- =================================================
                 MEDICINE RETURNS
            ================================================== --}}

            <section
                id="medicine-returns"
                class="section">

                <div class="section-header">

                    <div class="section-heading">

                        <div class="section-icon">
                            MR
                        </div>

                        <div>

                            <h2>
                                Medicine Returns
                            </h2>

                            <div class="section-subtitle">
                                Customer returns awaiting inspection
                            </div>

                        </div>

                    </div>

                    <span class="pending-count">
                        {{ $returned->count() }} Pending
                    </span>

                </div>


                @if($returned->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>
                                    <th>Medicine</th>
                                    <th>Batch</th>
                                    <th>Quantity</th>
                                    <th>Customer</th>
                                    <th>Condition</th>
                                    <th>Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @foreach($returned as $record)

                                    <tr>

                                        <td class="medicine-name">
                                            {{ $record->Medicine_Name }}
                                        </td>

                                        <td class="batch-number">
                                            {{ $record->Batch_Number }}
                                        </td>

                                        <td class="quantity">
                                            {{ $record->Quantity }}
                                        </td>

                                        <td>
                                            {{ $record->Customer }}
                                        </td>

                                        <td>
                                            {{ $record->Condition_Of_Medicine }}
                                        </td>

                                        <td>

                                            <div class="actions">

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.return.approve', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="approve">

                                                        Accept

                                                    </button>

                                                </form>


                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.return.reject', $record->id) }}">

                                                    @csrf

                                                    <button
                                                        type="submit"
                                                        class="reject">

                                                        Reject

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            ✓
                        </div>

                        No pending medicine returns.

                    </div>

                @endif

            </section>

        </div>


        {{-- =====================================================
             FOOTER
        ====================================================== --}}

        <div class="footer">

            <div>
                PharmaDex Pharmacy Management System
            </div>

            <div>
                <strong>Admin Panel</strong>
                · Secure Record Management
            </div>

        </div>

    </main>


    {{-- =========================================================
         FILTER / SCROLL INTERACTION
    ========================================================== --}}

    <script>

        const filter = document.getElementById("recordFilter");

        const sections = document.querySelectorAll(".section");

        const statCards = document.querySelectorAll(".stat-card");


        function showSection(targetId) {

            if (targetId === "overview") {

                sections.forEach(section => {
                    section.classList.remove("highlight");
                });

                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });

                return;
            }


            const target = document.getElementById(targetId);

            if (!target) return;


            sections.forEach(section => {
                section.classList.remove("highlight");
            });


            target.classList.add("highlight");


            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });


            target.classList.remove("fade-target");

            void target.offsetWidth;

            target.classList.add("fade-target");


            setTimeout(() => {

                target.classList.remove("fade-target");

            }, 700);

        }


        filter.addEventListener("change", function () {

            showSection(this.value);

        });


        statCards.forEach(card => {

            card.addEventListener("click", function () {

                const target = this.dataset.target;

                filter.value = target;

                showSection(target);

            });

        });

    </script>

</body>

</html>