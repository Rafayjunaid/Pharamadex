<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Medicines | PharmaDex</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5faff;
            font-family: "Inter", sans-serif;
            color: #102a43;
        }

        .medicine-page {
            min-height: 100vh;
        }

        .medicine-main {
            margin-left: 235px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .medicine-topbar {
            height: 76px;
            padding: 0 34px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: white;
            border-bottom: 1px solid #dbeaf3;

            position: sticky;
            top: 0;
            z-index: 10;
        }

        .topbar-title {
            font-size: 14px;
            font-weight: 700;
            color: #0b1f38;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .system-status {
            display: flex;
            align-items: center;
            gap: 7px;

            padding: 8px 11px;

            border: 1px solid #dbeaf3;
            border-radius: 7px;

            color: #668096;

            font-size: 10px;
            font-weight: 600;
        }

        .status-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #38bdf8;
        }

        .admin-badge {
            padding: 9px 13px;

            background: #0b1f38;
            color: white;

            border-radius: 7px;

            font-size: 10px;
            font-weight: 700;
        }

        /* CONTENT */

        .medicine-content {
            width: min(1480px, calc(100% - 68px));
            margin: 0 auto;
            padding: 38px 0 60px;
        }

        /* HEADER */

        .medicine-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;

            gap: 25px;
            margin-bottom: 27px;
        }

        .eyebrow {
            color: #38bdf8;

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 1.3px;

            margin-bottom: 7px;
        }

        .medicine-header h1 {
            margin: 0 0 6px;

            color: #071426;

            font-size: 29px;
            font-weight: 800;

            letter-spacing: -1px;
        }

        .medicine-header p {
            margin: 0;

            color: #668096;

            font-size: 13px;
        }

        .total-box {
            min-width: 145px;

            padding: 13px 15px;

            background: white;

            border: 1px solid #dbeaf3;
            border-radius: 9px;

            text-align: right;
        }

        .total-label {
            color: #668096;

            font-size: 9px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .total-number {
            margin-top: 3px;

            color: #071426;

            font-size: 22px;
            font-weight: 800;
        }

        /* FILTER PANEL */

        .filter-panel {
            padding: 18px;

            margin-bottom: 20px;

            background: white;

            border: 1px solid #dbeaf3;
            border-radius: 11px;
        }

        .search-row {
            display: flex;
            gap: 10px;

            margin-bottom: 17px;
        }

        .search-wrapper {
            position: relative;
            flex: 1;
        }

        .search-icon {
            position: absolute;

            left: 14px;
            top: 50%;

            transform: translateY(-50%);

            color: #668096;

            font-size: 14px;
        }

        .search-input {
            width: 100%;
            height: 43px;

            padding: 0 14px 0 38px;

            border: 1px solid #dbeaf3;
            border-radius: 8px;

            background: #f8fcff;

            outline: none;

            color: #0b1f38;

            font-family: inherit;
            font-size: 11px;
        }

        .search-input:focus {
            background: white;
            border-color: #38bdf8;

            box-shadow: 0 0 0 3px rgba(56, 189, 248, .10);
        }

        .clear-btn {
            height: 43px;

            padding: 0 16px;

            border: 0;
            border-radius: 8px;

            background: #0b1f38;
            color: white;

            font-family: inherit;
            font-size: 10px;
            font-weight: 700;

            cursor: pointer;
        }

        .clear-btn:hover {
            background: #163b61;
        }

        /* FILTER BUTTONS */

        .filter-label {
            margin-bottom: 8px;

            color: #668096;

            font-size: 9px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .6px;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .filter-btn {
            padding: 8px 13px;

            background: white;

            border: 1px solid #dbeaf3;
            border-radius: 7px;

            color: #102b4a;

            font-family: inherit;
            font-size: 10px;
            font-weight: 700;

            cursor: pointer;

            transition: .2s;
        }

        .filter-btn:hover {
            border-color: #38bdf8;
            background: #f3fbff;
        }

        .filter-btn.active {
            background: #0b1f38;
            border-color: #0b1f38;
            color: white;
        }

        /* TABLE */

        .medicine-section {
            background: white;

            border: 1px solid #dbeaf3;
            border-radius: 11px;

            overflow: hidden;
        }

        .section-header {
            min-height: 66px;

            padding: 15px 19px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: #fbfdff;

            border-bottom: 1px solid #dbeaf3;
        }

        .section-title {
            color: #0b1f38;

            font-size: 14px;
            font-weight: 800;
        }

        .section-subtitle {
            margin-top: 3px;

            color: #668096;

            font-size: 10px;
        }

        .record-count {
            padding: 6px 10px;

            background: #e8f7ff;
            color: #102b4a;

            border-radius: 20px;

            font-size: 9px;
            font-weight: 800;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;

            min-width: 900px;

            border-collapse: collapse;
        }

        th {
            padding: 12px 17px;

            background: #f8fcff;

            border-bottom: 1px solid #dbeaf3;

            color: #71879a;

            text-align: left;

            font-size: 9px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .6px;
        }

        td {
            padding: 15px 17px;

            border-bottom: 1px solid #edf4f8;

            font-size: 11px;
            font-weight: 500;

            vertical-align: middle;
        }

        tbody tr:hover {
            background: #f3fbff;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* MEDICINE */

        .medicine-name {
            color: #0b1f38;
            font-size: 11px;
            font-weight: 800;
        }

        .medicine-sub {
            margin-top: 3px;

            color: #668096;

            font-size: 9px;
        }

        /* BATCH */

        .batch {
            color: #102b4a;

            font-family: monospace;

            font-size: 10px;
            font-weight: 700;
        }

        /* TYPE */

        .type-badge {
            display: inline-block;

            padding: 5px 9px;

            background: #f3fbff;

            border: 1px solid #d5edf8;

            border-radius: 6px;

            color: #102b4a;

            font-size: 9px;
            font-weight: 700;
        }

        /* QUANTITY */

        .quantity {
            color: #0b1f38;

            font-size: 12px;
            font-weight: 800;
        }

        /* STOCK */

        .stock {
            display: inline-flex;

            padding: 5px 8px;

            border-radius: 20px;

            font-size: 8px;
            font-weight: 800;

            text-transform: uppercase;
        }

        .stock-good {
            background: #e8f7ff;
            color: #102b4a;
        }

        .stock-low {
            background: #fff7e6;
            color: #795500;
        }

        .stock-out {
            background: #ffecec;
            color: #8a2020;
        }

        /* EXPIRY */

        .expiry {
            color: #102b4a;

            font-size: 10px;
            font-weight: 600;
        }

        .expiry-warning {
            display: block;

            margin-top: 3px;

            font-size: 8px;
            font-weight: 800;

            text-transform: uppercase;
        }

        .expired {
            color: #b42318;
        }

        .expires-soon {
            color: #a15c00;
        }

        /* EMPTY */

        .empty-state {
            display: none;

            padding: 60px 20px;

            text-align: center;

            color: #668096;

            font-size: 11px;
        }

        .empty-icon {
            width: 44px;
            height: 44px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 12px;

            border-radius: 50%;

            background: #e8f7ff;

            color: #102b4a;

            font-size: 14px;
            font-weight: 800;
        }

        /* FOOTER */

        .footer {
            margin-top: 28px;

            padding-top: 18px;

            border-top: 1px solid #dbeaf3;

            display: flex;
            justify-content: space-between;

            color: #668096;

            font-size: 9px;
        }

        .footer strong {
            color: #102b4a;
        }

        /* RESPONSIVE */

        @media (max-width: 900px) {
            .medicine-main {
                margin-left: 0;
            }
        }

        @media (max-width: 700px) {

            .medicine-topbar {
                padding: 0 18px;
            }

            .system-status {
                display: none;
            }

            .medicine-content {
                width: calc(100% - 28px);
                padding-top: 25px;
            }

            .medicine-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .total-box {
                width: 100%;
                text-align: left;
            }

            .search-row {
                flex-direction: column;
            }

            .clear-btn {
                width: 100%;
            }

            .footer {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

<div class="medicine-page">

    {{-- SIDEBAR --}}
    @include('Dashboard.Admin.sidebar')


    <div class="medicine-main">

        {{-- TOPBAR --}}
        <header class="medicine-topbar">

            <div class="topbar-title">
                Pharmacy Administration
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


        <main class="medicine-content">

            {{-- PAGE HEADER --}}

            <div class="medicine-header">

                <div>

                    <div class="eyebrow">
                        Inventory Management
                    </div>

                    <h1>
                        All Medicines
                    </h1>

                    <p>
                        Search, filter and review all medicines currently registered in the pharmacy.
                    </p>

                </div>

                <div class="total-box">

                    <div class="total-label">
                        Total Medicines
                    </div>

                    <div
                        class="total-number"
                        id="visibleCount">

                        {{ $GetMedicine->count() }}

                    </div>

                </div>

            </div>


            {{-- SEARCH + FILTER --}}

            <div class="filter-panel">

                <div class="search-row">

                    <div class="search-wrapper">

                        <span class="search-icon">
                            ⌕
                        </span>

                        <input
                            type="text"
                            id="medicineSearch"
                            class="search-input"
                            placeholder="Search medicine name or batch number..."
                        >

                    </div>

                    <button
                        type="button"
                        class="clear-btn"
                        id="clearFilters">

                        Clear Filters

                    </button>

                </div>


                <div class="filter-label">
                    Filter By Medicine Type
                </div>

                <div class="filter-buttons">

                    <button
                        type="button"
                        class="filter-btn active"
                        data-type="all">

                        All

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Tablet">

                        Tablets

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Syrup">

                        Syrups

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Capsule">

                        Capsules

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Injection">

                        Injections

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Cream">

                        Creams

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Drops">

                        Drops

                    </button>

                    <button
                        type="button"
                        class="filter-btn"
                        data-type="Other">

                        Other

                    </button>

                </div>

            </div>


            {{-- MEDICINE TABLE --}}

            <section class="medicine-section">

                <div class="section-header">

                    <div>

                        <div class="section-title">
                            Medicine Inventory
                        </div>

                        <div class="section-subtitle">
                            Complete pharmacy medicine records
                        </div>

                    </div>

                    <span
                        class="record-count"
                        id="recordCount">

                        {{ $GetMedicine->count() }} Records

                    </span>

                </div>


                @if($GetMedicine->count() > 0)

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>

                                    <th>Medicine</th>

                                    <th>Batch Number</th>

                                    <th>Type</th>

                                    <th>Quantity</th>

                                    <th>Stock</th>

                                    <th>Expiry Date</th>

                                </tr>

                            </thead>

                            <tbody id="medicineTable">

                                @foreach($GetMedicine as $medicine)

                                    @php

                                        $quantity = (int) $medicine->Quantity;

                                        $expiryDate = $medicine->Expiry_Date
                                            ? \Carbon\Carbon::parse($medicine->Expiry_Date)
                                            : null;

                                        $isExpired = $expiryDate
                                            ? $expiryDate->isPast()
                                            : false;

                                        $daysToExpiry = $expiryDate
                                            ? now()->diffInDays($expiryDate, false)
                                            : null;

                                    @endphp

                                    <tr
                                        class="medicine-row"

                                        data-name="{{ strtolower($medicine->Medicine_Name ?? '') }}"

                                        data-batch="{{ strtolower($medicine->Batch_Number ?? '') }}"

                                        data-type="{{ strtolower($medicine->Type ?? 'Other') }}"
                                    >

                                        {{-- NAME --}}

                                        <td>

                                            <div class="medicine-name">
                                                {{ $medicine->Medicine_Name }}
                                            </div>

                                            <div class="medicine-sub">
                                                Pharmacy Inventory
                                            </div>

                                        </td>


                                        {{-- BATCH --}}

                                        <td>

                                            <span class="batch">
                                                {{ $medicine->Batch_Number ?? 'N/A' }}
                                            </span>

                                        </td>


                                        {{-- TYPE --}}

                                        <td>

                                            <span class="type-badge">
                                                {{ $medicine->Type ?? 'Other' }}
                                            </span>

                                        </td>


                                        {{-- QUANTITY --}}

                                        <td>

                                            <span class="quantity">
                                                {{ number_format($quantity) }}
                                            </span>

                                        </td>


                                        {{-- STOCK --}}

                                        <td>

                                            @if($quantity <= 0)

                                                <span class="stock stock-out">
                                                    Out of Stock
                                                </span>

                                            @elseif($quantity <= 10)

                                                <span class="stock stock-low">
                                                    Low Stock
                                                </span>

                                            @else

                                                <span class="stock stock-good">
                                                    In Stock
                                                </span>

                                            @endif

                                        </td>


                                        {{-- EXPIRY --}}

                                        <td>

                                            @if($expiryDate)

                                                @if($isExpired)

                                                    <span class="expiry expired">

                                                        {{ $expiryDate->format('d M Y') }}

                                                        <span class="expiry-warning">
                                                            Expired
                                                        </span>

                                                    </span>

                                                @elseif($daysToExpiry <= 30)

                                                    <span class="expiry expires-soon">

                                                        {{ $expiryDate->format('d M Y') }}

                                                        <span class="expiry-warning">
                                                            Expires Soon
                                                        </span>

                                                    </span>

                                                @else

                                                    <span class="expiry">

                                                        {{ $expiryDate->format('d M Y') }}

                                                    </span>

                                                @endif

                                            @else

                                                <span class="expiry">
                                                    N/A
                                                </span>

                                            @endif

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>


                    {{-- NO SEARCH RESULTS --}}

                    <div
                        class="empty-state"
                        id="noResults">

                        <div class="empty-icon">
                            ⌕
                        </div>

                        No medicines match your search or selected filter.

                    </div>

                @else

                    <div
                        class="empty-state"
                        style="display:block;">

                        <div class="empty-icon">
                            MD
                        </div>

                        No medicines have been added yet.

                    </div>

                @endif

            </section>


            {{-- FOOTER --}}

            <div class="footer">

                <div>
                    PharmaDex Pharmacy Management System
                </div>

                <div>
                    <strong>Medicine Inventory</strong>
                    · Secure Record Management
                </div>

            </div>

        </main>

    </div>

</div>


<script>

    const searchInput =
        document.getElementById("medicineSearch");

    const rows =
        document.querySelectorAll(".medicine-row");

    const filterButtons =
        document.querySelectorAll(".filter-btn");

    const clearButton =
        document.getElementById("clearFilters");

    const visibleCount =
        document.getElementById("visibleCount");

    const recordCount =
        document.getElementById("recordCount");

    const noResults =
        document.getElementById("noResults");


    let selectedType = "all";


    function filterMedicines() {

        const search =
            searchInput
                ? searchInput.value
                    .toLowerCase()
                    .trim()
                : "";


        let count = 0;


        rows.forEach(row => {

            const name =
                row.dataset.name || "";

            const batch =
                row.dataset.batch || "";

            const type =
                row.dataset.type || "";


            const matchesSearch =
                name.includes(search) ||
                batch.includes(search);


            const matchesType =
                selectedType === "all" ||
                type === selectedType.toLowerCase();


            if (matchesSearch && matchesType) {

                row.style.display = "";

                count++;

            } else {

                row.style.display = "none";

            }

        });


        if (visibleCount) {
            visibleCount.textContent = count;
        }


        if (recordCount) {
            recordCount.textContent =
                count + " Records";
        }


        if (noResults) {

            noResults.style.display =
                count === 0
                    ? "block"
                    : "none";

        }

    }


    /* SEARCH */

    if (searchInput) {

        searchInput.addEventListener(
            "input",
            filterMedicines
        );

    }


    /* TYPE FILTER */

    filterButtons.forEach(button => {

        button.addEventListener(
            "click",
            function () {

                filterButtons.forEach(btn => {

                    btn.classList.remove("active");

                });


                this.classList.add("active");


                selectedType =
                    this.dataset.type;


                filterMedicines();

            }
        );

    });


    /* CLEAR */

    if (clearButton) {

        clearButton.addEventListener(
            "click",
            function () {

                if (searchInput) {
                    searchInput.value = "";
                }


                selectedType = "all";


                filterButtons.forEach(btn => {

                    btn.classList.remove("active");

                });


                const allButton =
                    document.querySelector(
                        '[data-type="all"]'
                    );


                if (allButton) {
                    allButton.classList.add("active");
                }


                filterMedicines();

            }
        );

    }

</script>

</body>
</html>