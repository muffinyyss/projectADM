@php
    $currentUrl = url()->current(); // เช่น users หรือ users/create
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                {{-- @include('_partials.macros', ['height' => 20]) --}}
                <img src="./assets/adm.png" class="rounded" width="35" height="35">
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">{{ session('site') }}</span>
        </a>

        {{-- <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="menu-toggle-icon d-xl-block align-middle"></i>
        </a> --}}

    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        {{-- Dynamic menu header --}}
        @foreach ($menuData->menu as $menuItem)
            @if (isset($menuItem->header) && $menuItem->header === true)
                <li class="menu-header mt-7">
                    <span class="menu-header-text">{{ $menuItem->name }}</span>
                </li>
                @continue
            @endif

            @php
                $str = \Illuminate\Support\Str::class;
                $isOpen = false;

                if (isset($menuItem->submenu)) {
                    foreach ($menuItem->submenu as $sub) {
                        if (isset($sub->url) && $str::startsWith($currentUrl, url($sub->url))) {
                            $isOpen = true;
                            break;
                        }
                    }
                }
            @endphp

            <li class="menu-item {{ isset($menuItem->submenu) ? ($isOpen ? 'open' : '') : '' }}">
                <a href="{{ $menuItem->url ?? 'javascript:void(0);' }}"
                    class="menu-link {{ isset($menuItem->submenu) ? 'menu-toggle' : '' }}">
                    <i class="{{ $menuItem->icon ?? 'bx bx-circle' }} "></i>
                    <div>{{ $menuItem->name }}</div>
                </a>

                @if (isset($menuItem->submenu))
                    <ul class="menu-sub">
                        @foreach ($menuItem->submenu as $sub)
                            @php
                                $isActiveSub = isset($sub->url) && $currentUrl === url($sub->url);
                            @endphp
                            <li class="menu-item {{ $isActiveSub ? 'active' : '' }}">
                                <a href="{{ $sub->url ?? 'javascript:void(0);' }}"
                                    class="menu-link {{ $isActiveSub ? 'active' : '' }}">
                                    <div>{{ $sub->name }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach

    </ul>
</aside>
