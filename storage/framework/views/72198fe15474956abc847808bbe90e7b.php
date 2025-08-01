<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Easy Learning </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon --> 
    <link rel="icon" sizes="16x16" href="<?php echo e(asset('frontend/images/favicon.png')); ?>">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/line-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/fancybox.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/tooltipster.bundle.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/plyr.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <!-- end inject -->



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
  <?php echo $__env->make('frontend.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--======================================
        END HEADER AREA
======================================-->

 <?php echo $__env->yieldContent('home'); ?>

<!-- ================================
         END FOOTER AREA
================================= -->
   <?php echo $__env->make('frontend.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->



<!-- template js files -->
<script src="<?php echo e(asset('frontend/js/jquery-3.4.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/isotope.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/waypoint.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/datedropper.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/emojionearea.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/tooltipster.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/plyr.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.lazy.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>

<script>
    var player = new Plyr('#player');
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
<?php echo $__env->make('frontend.body.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH D:\learning management system\Studyli-lms\resources\views/frontend/master.blade.php ENDPATH**/ ?>