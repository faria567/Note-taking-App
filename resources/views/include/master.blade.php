<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicon.png">
    {{-- <title>{{$setting->site_title}}</title> --}}
    <!-- Custom CSS -->
    <link href="{{asset('dist')}}/css/style.min.css" rel="stylesheet">

    <!-- DATA TABLE -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets')}}/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets')}}/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('include._preloader')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('include._header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('include._sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- .row -->



                @yield('content')





                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <!-- .row -->

                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Comment - table -->
                <!-- ============================================================== -->
                <!-- row -->
               

                
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                @include('include._rightsidebar')

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        @include('include._footer')

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{asset('assets')}}/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets')}}/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('dist')}}/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist')}}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist')}}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist')}}/js/custom.min.js"></script>
    <!-- ============================================================== -->
    
    
     <!-- This is data table -->
     <script src="{{asset('assets')}}/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
     <script src="{{asset('assets')}}/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
     <!-- start - This is for export functionality only -->
     <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
     <!-- end - This is for export functionality only -->

     <script>
         $(function () {
             $('#myTable').DataTable();
             var table = $('#example').DataTable({
                 "columnDefs": [{
                     "visible": false,
                     "targets": 2, 
                     
                 }],
                 "order": [
                     [2, 'asc']
                 ],
                 "displayLength": 25,
                 "paging": false,
                 "drawCallback": function (settings) {
                     var api = this.api();
                     var rows = api.rows({
                         page: 'current'
                     }).nodes();
                     var last = null;
                     api.column(2, {
                         page: 'current'
                     }).data().each(function (group, i) {
                         if (last !== group) {
                             $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                             last = group;
                         }
                     });
                 }
             });
             // Order by the grouping
             $('#example tbody').on('click', 'tr.group', function () {
                 var currentOrder = table.order()[0];
                 if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                     table.order([2, 'desc']).draw();
                 } else {
                     table.order([2, 'asc']).draw();
                 }
             });
             // responsive table
             $('#config-table').DataTable({
                 responsive: true,
                
             });
             $('#example23').DataTable({
                 dom: 'Bfrtip',
                 paging: false, // Enable pagination
                 info: false,
                 buttons: [
                     'copy', 'csv', 'excel', 'pdf', 'print'
                 ],

             });
             $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
         });
 
     </script>

<script>
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });

            $(document).ready(function(){
            $('.js-switch').change(function () {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                 
                    data: {'status': status, 'id': userId},
                    success: function (data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                    }
                });
            });
        });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" 
integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('message') || Session::has('update') || Session::has('delete'))
<script>
    toastr.options = {
        "progressBar" : true,
        "closeButton" : true,
    }

    @if(Session::has('message'))
    toastr.success("{{ Session::get('message') }}",'Success!',{timeOut:2200});
    @elseif(Session::has('update'))
    toastr.info("{{ Session::get('update') }}",'Success!',{timeOut:2200});
    @elseif(Session::has('delete'))
    toastr.error("{{ Session::get('delete') }}",'Success!',{timeOut:2200});
    @endif
</script>
@endif
 
</body>

</html>