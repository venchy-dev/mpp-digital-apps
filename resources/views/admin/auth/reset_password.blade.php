<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		@include('admin.layouts.css')
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		{{-- <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script> --}}
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" action="{{ route('reset-password') }}" method="POST">
								@csrf
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--begin::Actions-->
								<div class="d-flex flex-wrap justify-content-center pb-lg-0">
									<button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-4">
										<!--begin::Indicator label-->
										<span class="indicator-label">Submit</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
									<a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->

							@if(session()->get('reset_password'))
								<div class="notice d-flex bg-light-success rounded p-6 mt-4">
									<i class="ki-outline ki-verify fs-3tx text-success me-4 mt-2"></i>
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-semibold">
											<div class="fs-6 text-gray-700 text-success">{!! session('reset_password') !!}</div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
							@endif

							@if (session()->get('reset_password_error'))
								<div class="notice d-flex bg-light-danger rounded p-6 mt-4">
									<i class="ki-outline ki-information fs-2tx text-danger me-4"></i>
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-semibold">
											<div class="fs-6 text-gray-700 text-danger">{!! session('reset_password_error') !!}</div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
							@endif
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->
					<div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
						<!--begin::Languages-->
						<div class="me-10">
							<!--begin::Toggle-->
							<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="{{ asset('admin/assets/media/flags/indonesia.svg') }}" alt="" />
								<span data-kt-element="current-lang-name" class="me-1">Indonesia</span>
								<span class="d-flex flex-center rotate-180">
									<i class="ki-duotone ki-down fs-5 text-muted m-0"></i>
								</span>
							</button>
							<!--end::Toggle-->
						</div>
						<!--end::Languages-->
						<!--begin::Links-->
						<div class="d-flex fw-semibold text-primary fs-base gap-5">
							{{-- <a href="../../demo1/dist/pages/team.html" target="_blank">Terms</a>
							<a href="../../demo1/dist/pages/pricing/column.html" target="_blank">Plans</a> --}}
							<a href="../../demo1/dist/pages/contact.html" target="_blank" class="link-primary">Contact Us</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(admin/assets/media/misc/auth-bg.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
							<img alt="Logo" src="{{ asset('general/media/logos/auth-icon-1.png') }}" class="h-100px h-lg-115px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
							{{-- <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset('admin/assets/media/misc/auth-screens.png') }}" alt="" /> --}}
						<!--end::Image-->
						<!--begin::Title-->
							<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="d-none d-lg-block text-white fs-base text-center">
							A ready-to-use Laravel boilerplate that provides essential features such as 
							<label class="opacity-75-hover text-warning fw-bold me-1">user authentication, 
							dashboard, and modular code structure </label>. Designed to accelerate web application development 
							with clean, scalable architecture.
						</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
	</body>
	@include('admin.layouts.js')
	<!--end::Body-->

	@if(session()->get('error'))
		<script type="text/javascript">
			Swal.fire({
				icon: "error",
				title: "Oops...",
				text: "Terdapat kesalahan ! {{ session()->get('error') }}",
				// footer: '<a href="#">Why do I have this issue?</a>'
			});
		</script>
	@endif
</html>