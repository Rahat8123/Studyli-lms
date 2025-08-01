<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo e(asset('backend/assets/images/favicon-32x32.png')); ?>" type="image/png"/>

	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!--tagsinput-->
	<link href="<?php echo e(asset('backend/assets/plugins/input-tags/css/tagsinput.css')); ?>" rel="stylesheet" />
<!--tagsinput-->

	<!--plugins-->
	<link href="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
	<link href="<?php echo e(asset('backend/assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet"/>
	<!-- loader-->
	<link href="<?php echo e(asset('backend/assets/css/pace.min.css')); ?>" rel="stylesheet"/>
	<script src="<?php echo e(asset('backend/assets/js/pace.min.js')); ?>"></script>
	<!-- Bootstrap CSS -->
	<link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('backend/assets/css/bootstrap-extended.css')); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?php echo e(asset('backend/assets/css/app.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('backend/assets/css/icons.css')); ?>" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/dark-theme.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/semi-dark.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/header-colors.css')); ?>"/>
	<!-- Datatable -->
	<link href="<?php echo e(asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" />
	<!-- End Datatable -->


	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


	<title>Admin Dashboard </title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<?php echo $__env->yieldContent('admin'); ?>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
	<!--end wrapper-->


	<!-- search modal -->

	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('backend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
	<!--plugins-->
	<script src="<?php echo e(asset('backend/assets/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/assets/plugins/chartjs/js/chart.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/assets/js/index.js')); ?>"></script>
	<!--app JS-->
	<script src="<?php echo e(asset('backend/assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/validate.min.js')); ?>"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


	<script src="<?php echo e(asset('backend/assets/js/code.js')); ?>"></script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>
</body>

</html>
<?php /**PATH D:\learning management system\Studyli-lms\resources\views/admin/admin_dashboard.blade.php ENDPATH**/ ?>