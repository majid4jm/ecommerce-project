<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> پنل مدیریت | @yield('title') </title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bbootstrap 4 -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
		<!-- JQVMap -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/jqvmap/jqvmap.min.css') }}">
		<!-- DataTables -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}">
		<!-- summernote -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css') }}">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<!-- Bootstrap 4 RTL -->
		<link rel="stylesheet" href="{{ asset('assets/admin/online/bootstrap-v4.2.1.css') }}">
		<!-- Custom style for RTL -->
		<link rel="stylesheet" href="{{ asset('assets/admin/dist/css/custom.css') }}">

		<!-- Tinymce -->
		<script src="https://cdn.tiny.cloud/1/00gb55rxd2yaryo68hly3v81tewlsks9btj6wsvdatf3qz1q/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

		<!-- Select2 -->
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

		<link href="{{ asset('assets/admin/plugins/toastr/toastr.min.css') }}" rel='stylesheet'>

	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">

		<!-- Navbar && Main Sidebar Container -->
		@include('admin.layouts.menu')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">@yield('head')</h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">

					@yield('content')

				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
			<b>Version</b> 3.0.0-rc.1
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 rtl -->
		<script src="{{ asset('assets/admin/online/bootstrap-v4.2.1.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


		<!-- DataTables -->
		<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
		<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>


		<!-- ChartJS -->
		<script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>
		<!-- Sparkline -->
		<script src="{{ asset('assets/admin/plugins/sparklines/sparkline.js') }}"></script>
		<!-- JQVMap -->
		<script src="{{ asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
		<script src="{{ asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
		<!-- daterangepicker -->
		<script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
		<script src="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
		<!-- Summernote -->
		<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
		<!-- overlayScrollbars -->
		<script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
		
		<!-- Select2 -->
		<script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>

		<script>
			$(function() {
				$("#example1").DataTable();
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false,
				});
				//Initialize Select2 Elements
				$('.select2').select2({
					theme: 'bootstrap4',
				});
			});
		</script>

		<script>
			$(document).ready(function(){
				setTimeout(function(){
					$(".alert-msg").slideUp();
				},3000);
			});
		</script>

		<!-- Tinymce -->
		<script>
			tinymce.init({
				selector: 'textarea',
				plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak',
				toolbar_mode: 'floating',
			});
		</script>

		<script src="{{ asset('assets/admin/plugins/toastr/toastr.min.js') }}"></script>
		<script>
			@if(Session::has('message'))
			var type = "{{ Session::get('alert-type' , 'info') }}";
			switch(type){
				case 'info':
				toastr.info("{{ Session::get('message') }}");
				break;
				case 'success':
				toastr.success("{{ Session::get('message') }}");
				break;
				case 'warning':
				toastr.warning("{{ Session::get('message') }}");
				break;
				case 'error':
				toastr.error("{{ Session::get('message') }}");
				break;
			}
			@endif
		</script>

	</body>
</html>