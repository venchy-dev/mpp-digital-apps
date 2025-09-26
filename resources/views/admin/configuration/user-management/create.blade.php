@extends('admin.index')
@section('content')

<style>
    /* Hide the select elements initially */
    #inputDapilClass {
        display: none;
    }

</style>

<!--begin::Content-->
<div class="col-xl-12">
    <!--begin::Contacts-->
    <div class="card card-flush h-lg-100" id="kt_contacts_main">
        <!--begin::Card header-->
        <div class="card-header pt-7" id="kt_chat_contacts_header">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                <!--end::Svg Icon-->
                <h2>Add User</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-5">
            <!--begin::Form-->
            <form id="kt_ecommerce_settings_general_form" class="form" action="{{ route('user-management.store') }}" method="POST">
                @csrf
                
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mt-3">
                            <span class="required">Role</span>
                        </label>
                        <!--end::Label-->
                        <div class="w-100">
                            <div class="form-floating border rounded">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid lh-1 py-3 @error('role') is-invalid @enderror"
                                    data-control="select2" data-hide-search="true"
                                    name="role"
                                    id="inputRole">
                                        <option value="-" selected disabled hidden>Pilih Role</option>
                                        <option value="super_admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Col-->
                <!--begin::Input group-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mt-3">
                            <span class="required">Name</span>
                            <!-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the contact's name."></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input 
                            type="text" 
                            class="form-control form-control-solid @error('name') is-invalid @enderror" 
                            id="inputName"
                            name="name" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                        <span class="required">Email</span>
                        <!-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the contact's name."></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input 
                            type="email" 
                            class="form-control form-control-solid @error('email') is-invalid @enderror" 
                            id="inputEmail"
                            name="email" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mt-3">
                            <span class="required">Password</span>
                            <!-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the contact's name."></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input 
                            type="password" 
                            class="form-control form-control-solid @error('password') is-invalid @enderror" 
                            id="inputPassword"
                            name="password" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mt-3">
                        <span class="required">Confirm Password</span>
                        <!-- <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the contact's name."></i> -->
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input 
                            type="password" 
                            class="form-control form-control-solid @error('password_confirm') is-invalid @enderror" 
                            id="inputPasswordConfirm"
                            name="password_confirm" value="" oninput="passwordCheck()"/>
                        <!--end::Input-->

                        <div id="messageConfirm" class="mt-2">
                            <span id="message" class=""></span>
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Separator-->
                <div class="separator mb-6"></div>
                <!--end::Separator-->
                <!--begin::Action buttons-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{ route('user-management.index') }}" data-kt-contacts-type="cancel" class="btn btn-sm btn-light me-3">Batal</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="createBTN" data-kt-contacts-type="submit" class="btn btn-sm btn-danger me-3">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Action buttons-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Contacts-->
</div>
<!--end::Content-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function passwordCheck() {
        let password            = document.getElementById("inputPassword").value;
        let confirmPassword     = document.getElementById("inputPasswordConfirm").value;
        let message             = document.getElementById("message");
        let messageConfirm      = document.getElementById("messageConfirm");
        let createBTN           = document.getElementById("createBTN");

        if (confirmPassword === "") {
            messageConfirm.style.display = "none";
            console.log('1');
        } else if (confirmPassword === password) {
            messageConfirm.style.display = "block";
            message.textContent          = "Passwords match !";
            message.className            = "text-success fw-bold";
            createBTN.className          = "btn btn-sm btn-danger";

            console.log('2');
        } else {
            messageConfirm.style.display = "block";
            message.textContent          = "Passwords don't match !";
            message.className            = "text-danger fw-bold";
            createBTN.className          = "btn btn-sm btn-danger disabled";

            console.log('3');
        }
    }
</script>

@endsection