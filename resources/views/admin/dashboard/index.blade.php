@extends('admin.index')
@section('content')
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4 mb-xl-10">
            <!--begin::Lists Widget 19-->
            <div class="card card-flush h-xl-100">
                <!--begin::Heading-->
                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('admin/assets/media/svg/shapes/top-green.png" data-bs-theme="light">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bold fs-2x mb-3">My Tasks</span>
                        <div class="fs-4 text-white">
                            <span class="opacity-75">You have</span>
                            <span class="position-relative d-inline-block">
                                <a href="../../demo13/dist/pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                <!--begin::Separator-->
                                <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                <!--end::Separator-->
                            </span>
                            <span class="opacity-75">to comlete</span>
                        </div>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar pt-5">
                        <!--begin::Menu-->
                        <button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-4"></i>
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Heading-->
                <!--begin::Body-->
                <div class="card-body mt-n20">
                    <!--begin::Stats-->
                    <div class="mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-3 g-lg-6">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="ki-outline ki-flask fs-1 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="ki-outline ki-bank fs-1 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="ki-outline ki-award fs-1 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Items-->
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="ki-outline ki-timer fs-1 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Stats-->
                                    <div class="m-0">
                                        <!--begin::Number-->
                                        <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                        <!--end::Number-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Lists Widget 19-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8 mb-5 mb-xl-10">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-6 mb-xl-10">
                    <!--begin::Slider Widget 1-->
                    <div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Today’s Course</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="active ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
                                </ol>
                                <!--end::Carousel Indicators-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-6">
                            <!--begin::Carousel-->
                            <div class="carousel-inner mt-n5">
                                <!--begin::Item-->
                                <div class="carousel-item active show">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Chart-->
                                        <div class="w-80px flex-shrink-0 me-2">
                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1" style="height: 100px"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Chart-->
                                        <div class="w-80px flex-shrink-0 me-2">
                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2" style="height: 100px"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Chart-->
                                        <div class="w-80px flex-shrink-0 me-2">
                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3" style="height: 100px"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip This</a>
                                        <a href="#" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Slider Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6 mb-5 mb-xl-10">
                    <!--begin::Slider Widget 2-->
                    <div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-7">24 events on all activities</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Carousel Indicators-->
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
                                </ol>
                                <!--end::Carousel Indicators-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-6">
                            <!--begin::Carousel-->
                            <div class="carousel-inner">
                                <!--begin::Item-->
                                <div class="carousel-item active show">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-70px symbol-circle me-5">
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-outline ki-abstract-24 fs-3x text-success"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>5 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>60 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>137 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-70px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger">
                                                <i class="ki-outline ki-abstract-25 fs-3x text-danger"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>12 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="carousel-item">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-70px symbol-circle me-5">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-outline ki-abstract-36 fs-3x text-primary"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Subtitle-->
                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                            <!--end::Subtitle-->
                                            <!--begin::Items-->
                                            <div class="d-flex d-grid gap-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 Topics</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 Speakers</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column flex-shrink-0">
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <span class="d-flex align-items-center text-gray-400 fw-bold fs-7">
                                                    <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                        <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Carousel-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Slider Widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Engage widget 4-->
            <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                <!--begin::Body-->
                <div class="card-body d-flex ps-xl-15">
                    <!--begin::Wrapper-->
                    <div class="m-0">
                        <!--begin::Title-->
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                        <span class="me-2">You have got
                        <span class="position-relative d-inline-block text-danger">
                            <a href="../../demo13/dist/pages/user-profile/overview.html" class="text-danger opacity-75-hover">2300 bonus</a>
                            <!--begin::Separator-->
                            <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                            <!--end::Separator-->
                        </span></span>points.
                        <br />Feel free to use them in your lessons</div>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <div class="mb-3">
                            <a href='#' class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Get Reward</a>
                            <a href="../../demo13/dist/apps/support-center/overview.html" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">How to</a>
                        </div>
                        <!--begin::Action-->
                    </div>
                    <!--begin::Wrapper-->
                    <!--begin::Illustration-->
                    <img src="assets/media/illustrations/sigma-1/17-dark.png" class="position-absolute me-3 bottom-0 end-0 h-200px" alt="" />
                    <!--end::Illustration-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6 mb-5 mb-xl-10">
            <!--begin::Chart widget 8-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Performance Overview</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav" id="kt_chart_widget_8_tabs">
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab">Week</a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
                            <!--begin::Statistics-->
                            <div class="mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4,8%</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="d-flex flex-wrap pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                            </div>
                            <!--ed::Items-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
                            <!--begin::Statistics-->
                            <div class="mb-5">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                    <span class="badge badge-light-success fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Chart-->
                            <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="d-flex flex-wrap pt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--ed::Item-->
                                </div>
                                <!--ed::Item-->
                            </div>
                            <!--ed::Items-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart widget 8-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Card widget 18-->
            <div class="card card-flush h-xl-100">
                <!--begin::Body-->
                <div class="card-body py-9">
                    <!--begin::Row-->
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('admin/assets/media/stock/600x600/img-65.jpg')"></div>
                            <!--end::Image-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column h-100">
                                <!--begin::Header-->
                                <div class="mb-7">
                                    <!--begin::Headin-->
                                    <div class="d-flex flex-stack mb-6">
                                        <!--begin::Title-->
                                        <div class="flex-shrink-0 me-5">
                                            <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                            <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                        </div>
                                        <!--end::Title-->
                                        <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Items-->
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <img src="{{ asset('admin/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <span class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
                                                <a href="../../demo13/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label bg-success">
                                                    <i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <span class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
                                                <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="mb-6">
                                    <!--begin::Text-->
                                    <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                    <!--end::Text-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                            <!--begin::Date-->
                                            <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                            <!--end::Date-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                            <!--begin::Number-->
                                            <span class="fs-6 text-gray-700 fw-bold">$
                                            <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold text-gray-400">Budget</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack mt-auto bd-highlight">
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                            <img alt="Pic" src="{{ asset('admin/assets/media/avatars/300-2.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                            <img alt="Pic" src="{{ asset('admin/assets/media/avatars/300-3.jpg') }}" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                    </div>
                                    <!--end::Users group-->
                                    <!--begin::Actions-->
                                    <a href="../../demo13/dist/apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                    <i class="ki-outline ki-exit-right-corner fs-4 ms-1"></i></a>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card widget 18-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection