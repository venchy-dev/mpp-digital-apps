<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

<!--begin::Sweet Alert-->
@if(session()->get('error'))
    <script type="text/javascript">
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "{{ session()->get('error') }}"
        });
    </script>
@endif

@if(session()->get('insert'))
    <script type="text/javascript">
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "Data created successfully",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

@if(session()->get('update'))
    <script type="text/javascript">
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "Data updated successfully",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

<script type="text/javascript">
    function confirmDeletion(id) {
        Swal.fire({
            title: "Are you sure ?",
            html: `<label style="color: #E42217;"> Make sure to check the data before deleting it ! </label>`,
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#5578eb',
            cancelButtonColor: '#aaaaaa',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
                Swal.fire({
                    title: "Success !",
                    text: "Data deleted successfully",
                    icon: "success"
                });
            }
        })
    }
</script>
<!--end::Sweet Alert-->