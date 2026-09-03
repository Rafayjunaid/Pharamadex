```blade
{{-- resources/views/Dashboard/Admin/sidebar.blade.php --}}

<aside class="pd-sidebar" id="pdSidebar">

    {{-- BRAND --}}
    <div class="pd-sidebar-brand">
        <div class="pd-brand-mark">
            P
        </div>

        <div class="pd-brand-name">
            Pharma<span>Dex</span>
        </div>
    </div>


    {{-- NAVIGATION --}}
    <nav class="pd-sidebar-nav">

        <div class="pd-nav-label">
            Menu
        </div>


        {{-- DASHBOARD --}}
        <a
            href="{{ route('admin.manage') }}"
            class="pd-nav-link {{ request()->routeIs('admin.manage') ? 'pd-active' : '' }}"
        >
            <span class="pd-nav-icon">
                DB
            </span>

            <span>
                Operation
            </span>
        </a>


        {{-- MEDICINES --}}
        <a
            href="{{ route('admin.medicine') }}"
            class="pd-nav-link {{ request()->routeIs('admin.medicine') ? 'pd-active' : '' }}"
        >
            <span class="pd-nav-icon">
                💊
            </span>

            <span>
                Medicines
            </span>
        </a>

        <a
            href="{{ route('admin.user') }}"
            class="pd-nav-link {{ request()->routeIs('admin.user') ? 'pd-active' : '' }}"
        >
            <span class="pd-nav-icon">
                👤
            </span>

            <span>
                Staff
            </span>
        </a>

    </nav>


    {{-- ADMIN USER --}}
    <div class="pd-sidebar-user">

        <div class="pd-user-card">

            <div class="pd-user-avatar">
                AD
            </div>

            <div class="pd-user-info">

                <div class="pd-user-name">
                    Administrator
                </div>

                <div class="pd-user-role">
                    System Administrator
                </div>

            </div>

        </div>

    </div>

</aside>


{{-- MOBILE OVERLAY --}}
<div
    class="pd-sidebar-overlay"
    id="pdSidebarOverlay">
</div>


<style>
    /* =====================================================
       PHARMADEX SIDEBAR
    ===================================================== */

    .pd-sidebar {
        position: fixed;
        left: 0;
        top: 0;

        width: 235px;
        height: 100vh;

        background: #071426;

        display: flex;
        flex-direction: column;

        z-index: 200;

        border-right: 1px solid #122944;

        font-family: "Inter", sans-serif;
    }


    /* =====================================================
       BRAND
    ===================================================== */

    .pd-sidebar-brand {
        height: 76px;

        display: flex;
        align-items: center;

        padding: 0 21px;

        border-bottom: 1px solid #142a43;
    }


    .pd-brand-mark {
        width: 37px;
        height: 37px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #38bdf8;
        color: #071426;

        border-radius: 9px;

        font-size: 17px;
        font-weight: 800;

        margin-right: 11px;
    }


    .pd-brand-name {
        color: #ffffff;

        font-size: 19px;
        font-weight: 800;

        letter-spacing: -0.5px;
    }


    .pd-brand-name span {
        color: #60cfff;
    }


    /* =====================================================
       NAVIGATION
    ===================================================== */

    .pd-sidebar-nav {
        padding: 25px 13px;
    }


    .pd-nav-label {
        color: #668096;

        font-size: 9px;
        font-weight: 800;

        text-transform: uppercase;
        letter-spacing: 1.2px;

        padding: 0 11px;

        margin-bottom: 9px;
    }


    .pd-nav-link {
        min-height: 45px;

        display: flex;
        align-items: center;

        padding: 0 11px;

        margin-bottom: 5px;

        border-radius: 8px;

        color: #a9bfd2;

        font-size: 12px;
        font-weight: 600;

        transition:
            background 0.2s ease,
            color 0.2s ease;
    }


    .pd-nav-link:hover {
        background: #102b4a;
        color: #ffffff;
    }


    .pd-nav-link.pd-active {
        background: #123655;
        color: #ffffff;
    }


    /* =====================================================
       NAV ICON
    ===================================================== */

    .pd-nav-icon {
        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-right: 10px;

        border-radius: 7px;

        background: #102b4a;
        color: #7fd8ff;

        font-size: 9px;
        font-weight: 800;

        flex-shrink: 0;
    }


    .pd-nav-link.pd-active .pd-nav-icon {
        background: #38bdf8;
        color: #071426;
    }


    /* =====================================================
       ADMIN USER
    ===================================================== */

    .pd-sidebar-user {
        margin-top: auto;

        padding: 14px;

        border-top: 1px solid #142a43;
    }


    .pd-user-card {
        padding: 11px;

        display: flex;
        align-items: center;

        background: #0d2945;

        border: 1px solid #173b5c;

        border-radius: 9px;
    }


    .pd-user-avatar {
        width: 35px;
        height: 35px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 8px;

        background: #38bdf8;
        color: #071426;

        font-size: 11px;
        font-weight: 800;
    }


    .pd-user-info {
        min-width: 0;

        margin-left: 9px;
    }


    .pd-user-name {
        color: #ffffff;

        font-size: 11px;
        font-weight: 700;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .pd-user-role {
        color: #7e9bb1;

        font-size: 9px;
        font-weight: 500;

        margin-top: 2px;
    }


    /* =====================================================
       MOBILE OVERLAY
    ===================================================== */

    .pd-sidebar-overlay {
        display: none;

        position: fixed;
        inset: 0;

        background: rgba(7, 20, 38, 0.35);

        z-index: 150;
    }


    .pd-sidebar-overlay.pd-overlay-active {
        display: block;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 900px) {

        .pd-sidebar {
            transform: translateX(-100%);

            transition:
                transform 0.25s ease;
        }


        .pd-sidebar.pd-sidebar-open {
            transform: translateX(0);
        }

    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function () {

        const sidebar =
            document.getElementById("pdSidebar");

        const overlay =
            document.getElementById("pdSidebarOverlay");

        const mobileMenu =
            document.getElementById("pdMobileMenu");


        function toggleSidebar() {

            if (!sidebar || !overlay) {
                return;
            }

            sidebar.classList.toggle(
                "pd-sidebar-open"
            );

            overlay.classList.toggle(
                "pd-overlay-active"
            );
        }


        if (mobileMenu) {
            mobileMenu.addEventListener(
                "click",
                toggleSidebar
            );
        }


        if (overlay) {
            overlay.addEventListener(
                "click",
                toggleSidebar
            );
        }


        /* Close sidebar after clicking a link on mobile */

        document
            .querySelectorAll(".pd-sidebar .pd-nav-link")
            .forEach(function (link) {

                link.addEventListener(
                    "click",
                    function () {

                        if (
                            window.innerWidth <= 900 &&
                            sidebar
                        ) {

                            sidebar.classList.remove(
                                "pd-sidebar-open"
                            );

                            overlay.classList.remove(
                                "pd-overlay-active"
                            );

                        }

                    }
                );

            });

    });
</script>
```
