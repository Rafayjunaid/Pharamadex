<div class="pharma-sidebar">

    <div class="pharma-sidebar__brand">
        <h2>PharmaDex</h2>
        <span>Pharmacy Management</span>
    </div>

    <nav class="pharma-sidebar__nav">

        <a href="/Medicine_Sold"
           class="pharma-sidebar__link {{ request()->is('Medicine_Sold') ? 'pharma-sidebar__link--active' : '' }}">
            Medicine Sold
        </a>

        <a href="/Stock_Received"
           class="pharma-sidebar__link {{ request()->is('Stock_Received') ? 'pharma-sidebar__link--active' : '' }}">
            Stock Received
        </a>

        <a href="/Damaged_Medicine"
           class="pharma-sidebar__link {{ request()->is('Damaged_Medicine') ? 'pharma-sidebar__link--active' : '' }}">
            Damaged Medicine
        </a>

        <a href="/Expired_Medicine"
           class="pharma-sidebar__link {{ request()->is('Expired_Medicine') ? 'pharma-sidebar__link--active' : '' }}">
            Expired Medicine
        </a>

        <a href="/Medicine_Return"
           class="pharma-sidebar__link {{ request()->is('Medicine_Return') ? 'pharma-sidebar__link--active' : '' }}">
            Medicine Returns
        </a>

    </nav>

</div>

<style>
    .pharma-sidebar {
        width: 245px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background: #03045e;
        border-right: 1px solid rgba(202, 240, 248, 0.15);
        padding: 26px 14px;
        box-sizing: border-box;
    }

    .pharma-sidebar__brand {
        padding: 4px 16px 25px;
        margin-bottom: 14px;
        border-bottom: 1px solid rgba(202, 240, 248, 0.15);
    }

    .pharma-sidebar__brand h2 {
        margin: 0;
        color: #ffffff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 21px;
        font-weight: 600;
        letter-spacing: -0.3px;
    }

    .pharma-sidebar__brand span {
        display: block;
        margin-top: 6px;
        color: #caf0f8;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0.6px;
        text-transform: uppercase;
    }

    .pharma-sidebar__nav {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .pharma-sidebar__link {
        display: flex;
        align-items: center;
        min-height: 45px;
        padding: 0 15px;
        border-left: 3px solid transparent;
        color: #caf0f8;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.1px;
        text-decoration: none;
        box-sizing: border-box;
        transition: background-color 0.2s ease,
                    color 0.2s ease,
                    border-color 0.2s ease;
    }

    .pharma-sidebar__link:hover {
        background: rgba(0, 119, 182, 0.3);
        color: #ffffff;
        border-left-color: #0077b6;
    }

    .pharma-sidebar__link--active {
        background: #0077b6;
        color: #ffffff;
        border-left-color: #caf0f8;
    }

    .pharma-sidebar__link--active:hover {
        background: #0077b6;
        color: #ffffff;
        border-left-color: #caf0f8;
    }

    @media (max-width: 768px) {
        .pharma-sidebar {
            width: 210px;
        }
    }

    @media (max-width: 600px) {
        .pharma-sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
    }
</style>