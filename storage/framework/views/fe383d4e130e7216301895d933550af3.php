

<?php $__env->startSection('content'); ?>
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="<?php echo e(asset('assets/admin/vendors/images/banner-img.png')); ?>" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back
                        <div class="weight-600 font-30 text-blue"><?php echo e(Auth::user()->name); ?>!</div>
                    </h4>
                    <p class="font-18 max-width-600">Selamat Datang Di Dashboard admin <?php echo e(Auth::user()->name); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?php echo e($totalSnorklings); ?></div>
                            <div class="weight-600 font-14">Snorkling</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart2"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?php echo e($totalTickets); ?></div>
                            <div class="weight-600 font-14">Ticket</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart3"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?php echo e($totalRents); ?></div>
                            <div class="weight-600 font-14">Rent Motor</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart4"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0"><?php echo e($totalTrips); ?></div>
                            <div class="weight-600 font-14">Trip Island</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Activity</h2>
                    <div id="chart5"></div>
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Lead Target</h2>
                    <div id="chart6"></div>
                </div>
            </div>
        </div>
        
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways"
                target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Smiley\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>