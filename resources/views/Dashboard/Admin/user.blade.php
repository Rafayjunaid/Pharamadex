```blade
{{-- resources/views/Dashboard/Admin/show.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Staff Management | PharmaDex</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =====================================================
           GLOBAL
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            font-family: "Inter", Arial, sans-serif;
            background: #f4f9fc;
            color: #091620;
        }

        .pd-page {
            margin-left: 235px;
            min-height: 100vh;
            width: calc(100% - 235px);
        }

        .pd-content {
            width: 100%;
            max-width: 1450px;
            margin: 0 auto;
            padding: 38px;
        }

        /* =====================================================
           HEADER
        ===================================================== */

        .pd-page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
            margin-bottom: 28px;
        }

        .pd-header-title h1 {
            color: #082c4c;
            font-size: 27px;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .pd-header-title p {
            margin-top: 7px;
            color: #6c8496;
            font-size: 13px;
            line-height: 1.5;
        }

        .pd-header-badge {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 9px 14px;
            border-radius: 8px;
            background: #e1f4fb;
            border: 1px solid #c2e8f5;
            color: #08658f;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        .pd-header-icon {
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            background: #0b668f;
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
        }

        /* =====================================================
           CARD
        ===================================================== */

        .pd-card {
            background: #ffffff;
            border: 1px solid #dceaf2;
            border-radius: 11px;
            box-shadow: 0 5px 20px rgba(8, 44, 76, 0.055);
            overflow: hidden;
            margin-bottom: 28px;
        }

        .pd-card-header {
            padding: 21px 25px;
            border-bottom: 1px solid #e2edf3;
            background: #fbfdfe;
        }

        .pd-card-header h2 {
            color: #082c4c;
            font-size: 16px;
            font-weight: 700;
        }

        .pd-card-header p {
            margin-top: 5px;
            color: #718898;
            font-size: 12px;
        }

        .pd-card-body {
            padding: 25px;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .pd-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .pd-form-group {
            display: flex;
            flex-direction: column;
        }

        .pd-form-group label {
            margin-bottom: 7px;
            color: #294b62;
            font-size: 12px;
            font-weight: 600;
        }

        .pd-form-group input,
        .pd-form-group select {
            width: 100%;
            height: 44px;
            padding: 0 12px;

            border: 1px solid #cbdde8;
            border-radius: 7px;

            background: #ffffff;
            color: #183b55;

            outline: none;

            font-family: "Inter", Arial, sans-serif;
            font-size: 12px;

            transition: 0.2s ease;
        }

        .pd-form-group input::placeholder {
            color: #9aadb9;
        }

        .pd-form-group input:focus,
        .pd-form-group select:focus {
            border-color: #1686b8;
            box-shadow: 0 0 0 3px #e0f4fb;
        }

        .pd-error {
            margin-top: 6px;
            color: #9c2f2f;
            font-size: 11px;
        }

        /* =====================================================
           FORM ACTIONS
        ===================================================== */

        .pd-form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 9px;

            margin-top: 23px;
            padding-top: 21px;

            border-top: 1px solid #e5eef3;
        }

        .pd-btn {
            height: 41px;
            padding: 0 19px;

            border-radius: 7px;
            font-family: "Inter", Arial, sans-serif;
            font-size: 12px;
            font-weight: 600;

            cursor: pointer;
            transition: 0.2s ease;
        }

        .pd-btn-clear {
            background: #ffffff;
            color: black;
            border: 1px solid #cbdde8;
        }

        .pd-btn-clear:hover {
            background: #f1f7fa;
        }

        .pd-btn-create {
            background: black;
            color: #ffffff;
            border: 1px solid black;
        }

        .pd-btn-create:hover {
            background: black;
            border-color: black;
        }

        /* =====================================================
           USERS CARD
        ===================================================== */

        .pd-users-card {
            background: #ffffff;
            border: 1px solid #dceaf2;
            border-radius: 11px;
            box-shadow: 0 5px 20px rgba(8, 44, 76, 0.055);
            overflow: hidden;
        }

        .pd-users-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;

            padding: 21px 25px;

            border-bottom: 1px solid #e2edf3;
            background: #fbfdfe;
        }

        .pd-users-title h2 {
            color: #082c4c;
            font-size: 16px;
            font-weight: 700;
        }

        .pd-users-title p {
            margin-top: 5px;
            color: #718898;
            font-size: 12px;
        }

        .pd-user-count {
            padding: 7px 11px;

            background: #e1f4fb;
            color: #08658f;

            border: 1px solid #c2e8f5;
            border-radius: 6px;

            font-size: 11px;
            font-weight: 700;

            white-space: nowrap;
        }

        /* =====================================================
           TABLE
        ===================================================== */

        .pd-table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .pd-users-table {
            width: 100%;
            border-collapse: collapse;
        }

        .pd-users-table th {
            padding: 14px 19px;

            background: #f2f8fb;

            border-bottom: 1px solid #dceaf2;

            color: #365970;

            font-size: 10px;
            font-weight: 700;

            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.35px;

            white-space: nowrap;
        }

        .pd-users-table td {
            padding: 15px 19px;

            border-bottom: 1px solid #edf3f6;

            color: #456276;

            font-size: 12px;

            vertical-align: middle;
        }

        .pd-users-table tbody tr {
            transition: 0.15s ease;
        }

        .pd-users-table tbody tr:hover {
            background: #f8fcfe;
        }

        .pd-users-table tbody tr:last-child td {
            border-bottom: none;
        }

        /* =====================================================
           USER
        ===================================================== */

        .pd-user-info-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .pd-avatar {
            width: 35px;
            height: 35px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            background: #e1f4fb;
            color: #08658f;

            border-radius: 7px;

            font-size: 11px;
            font-weight: 700;
        }

        .pd-user-name {
            color: #183b55;
            font-weight: 600;
            white-space: nowrap;
        }

        .pd-email {
            color: #6e8798;
        }

        /* =====================================================
           ROLE
        ===================================================== */

        .pd-role {
            display: inline-flex;

            padding: 6px 9px;

            border-radius: 5px;

            font-size: 10px;
            font-weight: 700;

            text-transform: capitalize;
        }

        .pd-role-admin {
            background: #dcebf6;
            color: black;
        }

        .pd-role-staff {
            background: #e1f4fb;
            color: black;
        }

        /* =====================================================
           STATUS
        ===================================================== */

        .pd-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            padding: 6px 9px;

            border-radius: 5px;

            font-size: 10px;
            font-weight: 700;
        }

        .pd-status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;
            background: currentColor;
        }

        .pd-status-active {
            background: #e1f4fb;
            color: black;
        }

        .pd-status-blocked {
            background: #e5eef3;
            color: #526d7e;
        }

        /* =====================================================
           ACTIONS
        ===================================================== */

        .pd-action-form {
            display: inline;
        }

        .pd-action-btn {
            height: 31px;
            padding: 0 12px;

            border-radius: 6px;

            font-family: "Inter", Arial, sans-serif;
            font-size: 10px;
            font-weight: 600;

            cursor: pointer;
            transition: 0.2s ease;
        }

        .pd-block-btn {
            background: #e1f4fb;
            border: 1px solid #c6e8f3;
            color: #096b95;
        }

        .pd-block-btn:hover {
            background: #cfeef7;
        }

        .pd-unblock-btn {
            background: black;
            border: 1px solid black;
            color: #ffffff;
        }

        .pd-unblock-btn:hover {
            background: #084d6c;
        }

        .pd-protected {
            display: inline-flex;

            padding: 6px 9px;

            background: #e5eef3;
            color: #526d7e;

            border-radius: 5px;

            font-size: 10px;
            font-weight: 600;
        }

        /* =====================================================
           EMPTY STATE
        ===================================================== */

        .pd-empty {
            padding: 50px 20px;
            text-align: center;
        }

        .pd-empty-icon {
            width: 43px;
            height: 43px;

            margin: 0 auto 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #e1f4fb;
            color: #08729d;

            border-radius: 9px;

            font-size: 19px;
            font-weight: 700;
        }

        .pd-empty h3 {
            color: #365970;
            font-size: 14px;
            font-weight: 600;
        }

        .pd-empty p {
            margin-top: 5px;
            color: #8195a3;
            font-size: 11px;
        }

        /* =====================================================
           TOAST NOTIFICATION
        ===================================================== */

        .pd-toast-container {
            position: fixed;

            top: 20px;
            right: 20px;

            z-index: 9999;

            width: 350px;

            pointer-events: none;
        }

        .pd-toast {
            display: flex;
            align-items: center;
            gap: 11px;

            width: 100%;

            padding: 14px;

            margin-bottom: 9px;

            background: #ffffff;

            border: 1px solid #dceaf2;
            border-radius: 9px;

            box-shadow: 0 10px 30px rgba(8, 44, 76, 0.15);

            pointer-events: auto;

            animation: pdToastIn 0.3s ease;
        }

        .pd-toast-icon {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 7px;

            font-size: 15px;
            font-weight: 700;
        }

        .pd-success .pd-toast-icon {
            background: #e1f4fb;
            color: #08729d;
        }

        .pd-error .pd-toast-icon {
            background: #e5eef3;
            color: #426174;
        }

        .pd-toast-content {
            flex: 1;
            min-width: 0;
        }

        .pd-toast-content strong {
            display: block;

            color: #153c56;

            font-size: 12px;
            font-weight: 700;

            margin-bottom: 3px;
        }

        .pd-toast-content span {
            display: block;

            color: #708796;

            font-size: 11px;
            line-height: 1.4;
        }

        .pd-toast-close {
            width: 24px;
            height: 24px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: none;
            background: transparent;

            color: #7c929f;

            font-size: 17px;

            cursor: pointer;
        }

        .pd-toast-close:hover {
            color: #173b55;
        }

        @keyframes pdToastIn {

            from {
                opacity: 0;
                transform: translateX(25px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }

        }

        @keyframes pdToastOut {

            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(25px);
            }

        }

        /* =====================================================
           MOBILE MENU BUTTON

           Your sidebar JS already looks for:
           #pdMobileMenu

           This button gives it something to control.
        ===================================================== */

        .pd-mobile-menu {
            display: none;

            position: fixed;

            top: 15px;
            left: 15px;

            width: 40px;
            height: 40px;

            z-index: 300;

            border: 1px solid #cbdde8;
            border-radius: 7px;

            background: #ffffff;
            color: #082c4c;

            font-size: 18px;

            cursor: pointer;

            box-shadow: 0 4px 15px rgba(8, 44, 76, 0.08);
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .pd-content {
                padding: 30px;
            }

        }

        @media (max-width: 900px) {

            /*
             * Sidebar becomes a mobile drawer at 900px.
             * Therefore content no longer needs 235px offset.
             */

            .pd-page {
                margin-left: 0;
                width: 100%;
            }

            .pd-content {
                padding: 70px 22px 30px;
            }

            .pd-mobile-menu {
                display: flex;
                align-items: center;
                justify-content: center;
            }

        }

        @media (max-width: 700px) {

            .pd-page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .pd-header-badge {
                display: none;
            }

            .pd-form-grid {
                grid-template-columns: 1fr;
            }

            .pd-card-body {
                padding: 20px;
            }

            .pd-users-header {
                padding: 18px;
            }

            .pd-table-wrapper {
                overflow-x: auto;
            }

            .pd-users-table {
                min-width: 720px;
            }

            .pd-toast-container {
                left: 15px;
                right: 15px;
                top: 15px;
                width: auto;
            }

        }

        @media (max-width: 500px) {

            .pd-content {
                padding: 65px 15px 25px;
            }

            .pd-header-title h1 {
                font-size: 23px;
            }

            .pd-form-actions {
                flex-direction: column;
            }

            .pd-btn {
                width: 100%;
            }

        }

    </style>

</head>

<body>

    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    @include('Dashboard.Admin.sidebar')


    {{-- =====================================================
         MOBILE MENU BUTTON
    ====================================================== --}}

    <button
        type="button"
        class="pd-mobile-menu"
        id="pdMobileMenu"
        aria-label="Open menu"
    >
        ☰
    </button>


    {{-- =====================================================
         TOASTS
    ====================================================== --}}

    <div class="pd-toast-container">

        @if(session('success'))

            <div
                class="pd-toast pd-success"
                id="pdSuccessToast"
            >

                <div class="pd-toast-icon">
                    ✓
                </div>

                <div class="pd-toast-content">

                    <strong>
                        Success
                    </strong>

                    <span>
                        {{ session('success') }}
                    </span>

                </div>

                <button
                    type="button"
                    class="pd-toast-close"
                    onclick="closePdToast('pdSuccessToast')"
                >
                    ×
                </button>

            </div>

        @endif


        @if(session('error'))

            <div
                class="pd-toast pd-error"
                id="pdErrorToast"
            >

                <div class="pd-toast-icon">
                    !
                </div>

                <div class="pd-toast-content">

                    <strong>
                        Action Not Allowed
                    </strong>

                    <span>
                        {{ session('error') }}
                    </span>

                </div>

                <button
                    type="button"
                    class="pd-toast-close"
                    onclick="closePdToast('pdErrorToast')"
                >
                    ×
                </button>

            </div>

        @endif

    </div>


    {{-- =====================================================
         PAGE
    ====================================================== --}}

    <div class="pd-page">

        <main class="pd-content">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <header class="pd-page-header">

                <div class="pd-header-title">

                    <h1>
                        Staff Management
                    </h1>

                    <p>
                        Create and manage accounts for your pharmacy management system.
                    </p>

                </div>


                <div class="pd-header-badge">

                    <div class="pd-header-icon">
                        +
                    </div>

                    PharmaDex Administration

                </div>

            </header>


            {{-- =================================================
                 CREATE STAFF
            ================================================== --}}

            <section class="pd-card">

                <div class="pd-card-header">

                    <h2>
                        Staff Account Information
                    </h2>

                    <p>
                        Enter employee details and assign the appropriate system role.
                    </p>

                </div>


                <div class="pd-card-body">

                    <form
                        action="{{ route('admin.user.store') }}"
                        method="POST"
                    >

                        @csrf


                        <div class="pd-form-grid">


                            {{-- NAME --}}

                            <div class="pd-form-group">

                                <label for="name">
                                    Staff Name
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Enter staff name"
                                    required
                                >

                                @error('name')

                                    <span class="pd-error">
                                        {{ $message }}
                                    </span>

                                @enderror

                            </div>


                            {{-- EMAIL --}}

                            <div class="pd-form-group">

                                <label for="email">
                                    Staff Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="staff@example.com"
                                    required
                                >

                                @error('email')

                                    <span class="pd-error">
                                        {{ $message }}
                                    </span>

                                @enderror

                            </div>


                            {{-- ROLE --}}

                            <div class="pd-form-group">

                                <label for="role">
                                    System Role
                                </label>

                                <select
                                    name="role"
                                    id="role"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        {{ old('role') ? '' : 'selected' }}
                                    >
                                        Select Role
                                    </option>

                                    <option
                                        value="staff"
                                        {{ old('role') == 'staff' ? 'selected' : '' }}
                                    >
                                        Staff
                                    </option>

                                    <option
                                        value="admin"
                                        {{ old('role') == 'admin' ? 'selected' : '' }}
                                    >
                                        Admin
                                    </option>

                                </select>

                                @error('role')

                                    <span class="pd-error">
                                        {{ $message }}
                                    </span>

                                @enderror

                            </div>


                            {{-- PASSWORD --}}

                            <div class="pd-form-group">

                                <label for="password">
                                    Account Password
                                </label>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Enter secure password"
                                    required
                                >

                                @error('password')

                                    <span class="pd-error">
                                        {{ $message }}
                                    </span>

                                @enderror

                            </div>


                        </div>


                        {{-- FORM BUTTONS --}}

                        <div class="pd-form-actions">

                            <button
                                type="reset"
                                class="pd-btn pd-btn-clear"
                            >
                                Clear
                            </button>

                            <button
                                type="submit"
                                class="pd-btn pd-btn-create"
                            >
                                Create Account
                            </button>

                        </div>

                    </form>

                </div>

            </section>


            {{-- =================================================
                 USERS
            ================================================== --}}

            <section class="pd-users-card">


                <div class="pd-users-header">

                    <div class="pd-users-title">

                        <h2>
                            System Users
                        </h2>

                        <p>
                            Manage staff accounts and access status.
                        </p>

                    </div>


                    <div class="pd-user-count">

                        {{ $users->count() }} Users

                    </div>

                </div>


                <div class="pd-table-wrapper">

                    <table class="pd-users-table">

                        <thead>

                            <tr>

                                <th>
                                    User
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Role
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @forelse($users as $user)

                                <tr>


                                    {{-- USER --}}

                                    <td>

                                        <div class="pd-user-info-cell">

                                            <div class="pd-avatar">

                                                {{ strtoupper(substr($user->name, 0, 1)) }}

                                            </div>

                                            <div class="pd-user-name">

                                                {{ $user->name }}

                                            </div>

                                        </div>

                                    </td>


                                    {{-- EMAIL --}}

                                    <td>

                                        <span class="pd-email">

                                            {{ $user->email }}

                                        </span>

                                    </td>


                                    {{-- ROLE --}}

                                    <td>

                                        <span
                                            class="pd-role
                                            {{ $user->role === 'admin'
                                                ? 'pd-role-admin'
                                                : 'pd-role-staff' }}"
                                        >

                                            {{ $user->role }}

                                        </span>

                                    </td>


                                    {{-- STATUS --}}

                                    <td>

                                        @if($user->status === 'blocked')

                                            <span class="pd-status pd-status-blocked">

                                                <span class="pd-status-dot"></span>

                                                Blocked

                                            </span>

                                        @else

                                            <span class="pd-status pd-status-active">

                                                <span class="pd-status-dot"></span>

                                                Active

                                            </span>

                                        @endif

                                    </td>


                                    {{-- ACTION --}}

                                    <td>

                                        @if($user->role === 'admin')

                                            <span class="pd-protected">
                                                Protected
                                            </span>

                                        @elseif($user->status === 'blocked')

                                            <form
                                                class="pd-action-form"
                                                action="{{ route('admin.user.unblock', $user->id) }}"
                                                method="POST"
                                            >

                                                @csrf

                                                @method('PUT')

                                                <button
                                                    type="submit"
                                                    class="pd-action-btn pd-unblock-btn"
                                                >
                                                    Unblock
                                                </button>

                                            </form>

                                        @else

                                            <form
                                                class="pd-action-form"
                                                action="{{ route('admin.user.block', $user->id) }}"
                                                method="POST"
                                            >

                                                @csrf

                                                @method('PUT')

                                                <button
                                                    type="submit"
                                                    class="pd-action-btn pd-block-btn"
                                                >
                                                    Block
                                                </button>

                                            </form>

                                        @endif

                                    </td>


                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5">

                                        <div class="pd-empty">

                                            <div class="pd-empty-icon">
                                                +
                                            </div>

                                            <h3>
                                                No Users Found
                                            </h3>

                                            <p>
                                                There are currently no staff accounts in the system.
                                            </p>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse


                        </tbody>

                    </table>

                </div>

            </section>


        </main>

    </div>


    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}

    <script>

        function closePdToast(id) {

            const toast = document.getElementById(id);

            if (!toast) {
                return;
            }

            toast.style.animation = "pdToastOut 0.3s ease forwards";

            setTimeout(function () {

                if (toast) {
                    toast.remove();
                }

            }, 300);

        }


        // Success notification
        setTimeout(function () {

            closePdToast("pdSuccessToast");

        }, 4000);


        // Error notification
        setTimeout(function () {

            closePdToast("pdErrorToast");

        }, 5000);

    </script>

</body>

</html>
```
