@extends('admin.index')
@section('content')

<!--begin::Tables Widget 12-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Log Actiity</span>
        </h3>
    </div>
    <!--end::Header-->

    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-sm btn-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="" title="Filter">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                        </svg>
                    </span> Filter
                </button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Content-->
                    <div class="px-7 py-5">
                        <form action="{{ route('log-activity.index') }}" method="GET">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-5 fw-bold mb-3">Duration :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="duration" class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-dropdown-parent="#kt-toolbar-filter">
                                    <option></option>
                                    <option value="1">1 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="24">24 Hours</option>
                                    <option value="72">3 Days</option>
                                    <option value="168">7 Days</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-5 fw-bold mb-3">Status Code :</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="status_code">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="status_code" value="all" checked="checked" />
                                        <span class="form-check-label text-gray-600">All</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="status_code" value="success" checked="checked" />
                                        <span class="form-check-label text-gray-600">Success</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="status_code" value="error" />
                                        <span class="form-check-label text-gray-600">Error</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-5 fw-bold mb-3">Action :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="action" class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-dropdown-parent="#kt-toolbar-filter">
                                    <option></option>
                                    @foreach ($filter_value['actions'] as $action)
                                        <option value="{{ $action }}">{{ $action }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-5 fw-bold mb-3">Module :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="module" class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-dropdown-parent="#kt-toolbar-filter">
                                    <option></option>
                                    @foreach ($filter_value['modules'] as $module)
                                        <option value="{{ $module }}">{{ $module }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('log-activity.index') }}" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</a>
                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
                <!--end::Filter-->

                <!--begin::Export-->
                <a href="{{ route('log-activity-export') }}" class="btn btn-sm btn-light-primary" target="_blank">
                    <span class="svg-icon svg-icon-primary svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M16,17 L16,21 C16,21.5522847 15.5522847,22 15,22 L9,22 C8.44771525,22 8,21.5522847 8,21 L8,17 L5,17 C3.8954305,17 3,16.1045695 3,15 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,15 C21,16.1045695 20.1045695,17 19,17 L16,17 Z M17.5,11 C18.3284271,11 19,10.3284271 19,9.5 C19,8.67157288 18.3284271,8 17.5,8 C16.6715729,8 16,8.67157288 16,9.5 C16,10.3284271 16.6715729,11 17.5,11 Z M10,14 L10,20 L14,20 L14,14 L10,14 Z" fill="currentColor"/>
                                <rect fill="currentColor" opacity="0.3" x="8" y="2" width="8" height="2" rx="1"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                    </span>
                    Export
                </a>
                <!--end::Export-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->

        <!--begin::Compact form-->
        <div class="d-flex align-items-center">    
            {{-- <div class="my-1">
                <!--begin::Select-->
                <select class="form-select form-select-sm form-select-solid w-200px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                    <option value="1" selected="selected">1 Hours</option>
                    <option value="2">6 Hours</option>
                    <option value="3">12 Hours</option>
                    <option value="4">24 Hours</option>
                </select>
                <!--end::Select-->
            </div> --}}
        </div>
        <!--end::Compact form-->
    </div>
    <!--end::Card header-->

    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-muted bg-light">
                        <th class="ps-4 min-w-5% rounded-start" style="text-align: center;">NO</th>
                        <th class="min-w-10%">STATUS CODE</th>
                        <th class="min-w-30%">ACTION - MODUL</th>
                        <th class="min-w-25%">IP ADDRESS / USER AGENT</th>
                        <th class="min-w-30%">DESCRIPTION</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @forelse ($activities as $activity)
                    <tr>
                        <td style="text-align: center;">{{ ++$i }}</td>
                        <td>
                            @if ( (int) $activity->status_code != 200 )
                                <div class="badge badge-light-danger">{{ $activity->status_code }} ERR</div>
                            @else
                                <div class="badge badge-light-success">{{ $activity->status_code }} OK</div>
                            @endif
                        </td>
                        <td>{{ $activity->action }} - {{ $activity->module }}</td>
                        <td>
                            [<label style="color: red;">{{ $activity->ip_address }}</label>] - {{ $activity->user_agent }}
                        </td>
                        <td>
                            {{ $activity->description }} <br>
                            <i>( {{ $activity->created_at->format('d/M/Y H:i') }} WIB )</i>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4">There are no data.</td></tr>
                @endforelse
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{ $activities->links('vendor.pagination.bootstrap-5') }}
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 12-->

@endsection