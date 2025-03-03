<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Smiley Dashboard</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo e(asset('assets/admin/vendors/images/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo e(asset('assets/admin/vendors/images/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo e(asset('assets/admin/vendors/images/favicon-16x16.png')); ?>">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/styles/core.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/styles/icon-font.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('assets/admin/plugins/datatables/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('assets/admin/plugins/datatables/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/styles/style.css')); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>

    <?php echo $__env->yieldContent('custom_css'); ?> <!-- Section untuk CSS custom -->
</head>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="<?php echo e(asset('assets/admin/vendors/images/deskapp-logo.svg')); ?>"
                    alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.headbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.sidebarright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.sidebarleft', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- js -->
    <script src="<?php echo e(asset('assets/admin/vendors/scripts/core.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendors/scripts/script.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendors/scripts/process.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendors/scripts/layout-settings.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/datatables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/datatables/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/datatables/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/plugins/datatables/js/responsive.bootstrap4.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('assets/admin/vendors/scripts/dashboard.js')); ?>"></script>

	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/dataTables.buttons.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/buttons.bootstrap4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/buttons.print.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/buttons.html5.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/buttons.flash.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/pdfmake.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/admin/plugins/datatables/js/vfs_fonts.js')); ?>"></script>
	<!-- Datatable Setting js -->
	<script src="<?php echo e(asset('assets/admin/vendors/scripts/datatable-setting.js')); ?>"></script>
    <?php echo $__env->yieldContent('custom_js'); ?> <!-- Section untuk JavaScript custom -->
</body>

</html><?php /**PATH D:\Project\Smiley\resources\views/layouts/main.blade.php ENDPATH**/ ?>