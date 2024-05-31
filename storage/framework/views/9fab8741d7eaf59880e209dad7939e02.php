<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/Admin/css/vertical-layout-light/style.css">


    <link rel="shortcut icon" href="<?php echo e(asset('assets')); ?>/Admin/images/favicon.png"/>
    <?php echo $__env->yieldContent("head"); ?>
</head>
<body>
<div class="container-scroller">
    <?php echo $__env->make('user.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid page-body-wrapper">
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php echo $__env->yieldContent('foot'); ?>
<!-- plugins:js -->
<script src="<?php echo e(asset('assets')); ?>/Admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo e(asset('assets')); ?>/Admin/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo e(asset('assets')); ?>/Admin/js/off-canvas.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/js/hoverable-collapse.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/js/template.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/js/settings.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo e(asset('assets')); ?>/Admin/js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/js/dashboard.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/js/Chart.roundedBarCharts.js"></script>
<script src="<?php echo e(asset('assets')); ?>/Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

</body>

</html>
<?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/layouts/userbase.blade.php ENDPATH**/ ?>