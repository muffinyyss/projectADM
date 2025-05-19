<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                @include('_partials.macros', ['height' => 20])
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">{{ config('variables.templateName') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="menu-toggle-icon d-xl-block align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-header mt-7">
            <span class="menu-header-text">เมนูหลัก</span>
        </li>

        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link">
                <i class="bx bx-home-alt"></i>
                <div>แดชบอร์ด</div>
            </a>
        </li>

        <li class="menu-header mt-7">
            <span class="menu-header-text">การจัดการผู้ใช้งาน</span>
        </li>

        <li class="menu-item open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="bx bx-user"></i>
                <div>ผู้ใช้งาน</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item active">
                    <a href="javascript:void(0);" class="menu-link">
                        <div>รายการผู้ใช้งาน</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div>เพิ่มผู้ใช้งาน</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="bx bx-shield-alt"></i>
                <div>สิทธิ์การใช้งาน</div>
            </a>
        </li>

        <li class="menu-header mt-7">
            <span class="menu-header-text">การตั้งค่า</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="bx bx-cog"></i>
                <div>โปรไฟล์</div>
            </a>
        </li>

    </ul>

</aside>
