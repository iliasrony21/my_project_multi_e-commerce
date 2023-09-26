<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('backend')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	
	<!-- loader-->
	<link href="{{asset('backend')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('backend')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('backend')}}/assets/css/icons.css" rel="stylesheet">
	<!-- DataTable CSS -->
	<link href="{{asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<!-- Toaster -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <!-- Toaster   -->
	
	<!-- FORM ELEMENTS CSS -->
	<link href="{{ asset('backend/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
	 <link href="{{asset('backend')}}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" /> 
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{asset('backend')}}/assets/css/header-colors.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
	<title>vendor Dashboard</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('vendor.body.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('vendor.body.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('vendor')
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('vendor.body.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<!-- @include('vendor.body.switcher') -->
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{asset('backend')}}/assets/js/index.js"></script>
	  <script src="{{asset('backend')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	  <script src="{{asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	 <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script> 
	<!-- FORM ELEMENTS CSS -->
	<script src="{{ asset('backend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>
    <!-- Text Area js -->
 	<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>

	<script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>
	<!--app JS-->
	<script src="{{asset('backend')}}/assets/js/app.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script>
			@if(Session::has('message'))
			var type = "{{ Session::get('alert-type','info') }}"
			toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
			switch(type){
				case 'info':
				toastr.info(" {{ Session::get('message') }} ");
				break;

				case 'success':
				toastr.success(" {{ Session::get('message') }} ");
				break;

				case 'warning':
				toastr.warning(" {{ Session::get('message') }} ");
				break;

				case 'error':
				toastr.error(" {{ Session::get('message') }} ");
				break; 
			}
			@endif 
	</script>

	<script>
        jQuery(function(){
			jQuery(document).on('click','#delete' ,function(e){
				e.preventDefault();
				var url = $(this).attr('href');

				Swal.fire({
				title: 'Are you sure?',
				text: "You want to Delete this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				if (result.isConfirmed) {
					window.location.href = url;
					Swal.fire(
					'Deleted!',
					'Your file has been deleted.',
					'success'
					)
				}
				});
			});
		});

		
	</script>
</body>

</html>