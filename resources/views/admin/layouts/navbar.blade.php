<!--begin::Wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
    <!--begin::Navbar-->
    <div class="d-flex align-items-stretch" id="kt_header_nav">
        <!--begin::Menu wrapper-->
        <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}"></div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Navbar-->
    <!--begin::Toolbar wrapper-->
    <div class="topbar d-flex align-items-stretch flex-shrink-0">
        <!--begin::Search-->
        <div class="d-flex align-items-stretch">
        </div>
        <!--end::Search-->
        <!--begin::Notifications-->
        <div class="d-flex align-items-stretch">
            <!--begin::Menu wrapper-->
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                <!--begin::Heading-->
                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                    <!--begin::Title-->
                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                    <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
                    <!--end::Title-->
                    <!--begin::Tabs-->
                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                        </li>
                    </ul>
                    <!--end::Tabs-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Menu-->
            <!--end::Menu wrapper-->
        </div>
        <!--end::Notifications-->
        <!--begin::Chat-->
        <div class="d-flex align-items-stretch">
            <!--begin::Menu wrapper-->
            <div class="topbar-item px-3 px-lg-4 position-relative" id="kt_drawer_chat_toggle">
                <i class="ki-outline ki-tablet-text-down fs-1"></i>
                <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 mt-4 start-50 animation-blink"></span>
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::Chat-->
        <!--begin::Theme mode-->
        <div class="d-flex align-items-center">
            <!--begin::Menu toggle-->
            <a href="#" class="topbar-item px-3 px-lg-4" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <i class="ki-outline ki-night-day theme-light-show fs-1"></i>
                <i class="ki-outline ki-moon theme-dark-show fs-1"></i>
            </a>
            <!--begin::Menu toggle-->
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                <!--begin::Menu item-->
                <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                        <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-night-day fs-2"></i>
                        </span>
                        <span class="menu-title">Light</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                        <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-moon fs-2"></i>
                        </span>
                        <span class="menu-title">Dark</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                        <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-screen fs-2"></i>
                        </span>
                        <span class="menu-title">System</span>
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Theme mode-->
        <!--begin::User-->
        <div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                <img src="{{ asset('general/media/icons/user-1.png') }}" alt="metronic" />
            </div>
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="{{ asset('general/media/icons/user-1.png') }}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Active</span>
                            </div>
                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                {{-- <div class="menu-item px-5">
                    <a href="../../demo13/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                </div> --}}
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-light-danger" style="border: none;">Sign Out</button>
                    </form>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
            <!--end::Menu wrapper-->
        </div>
        <!--end::User -->
        <!--begin::Heaeder menu toggle-->
        <div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
            <div class="topbar-item" id="kt_header_menu_mobile_toggle">
                <i class="ki-outline ki-burger-menu-2 fs-1"></i>
            </div>
        </div>
        <!--end::Heaeder menu toggle-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
<!--end::Wrapper-->