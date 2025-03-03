

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
            <div class="row">
                  <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                              <div class="breadcrumb_iner_item text-center">
                                    <h2>blog details</h2>
                                    <p>home . blog details</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      </section>
      <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <?php if($blog->image): ?>
                            <img class="card-img rounded-0" src="<?php echo e(asset('/blog_images/' . $blog->image)); ?>" alt="<?php echo e($blog->title); ?>">
                        <?php else: ?>
                            <img class="card-img rounded-0" src="<?php echo e(asset('assets/img/default_blog.png')); ?>" alt="Default Image">
                        <?php endif; ?>
                        </div>
                        <div class="blog_details">
                            <h2><?php echo e($blog->title); ?></h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i> <?php echo e($blog->category); ?></a></li>
                                <li><a href="#"><i class="far fa-calendar"></i> <?php echo e($blog->date); ?></a></li>
                            </ul>
                            <p class="excert">
                                <?php echo e($blog->description); ?>

                            </p>
                        </div>
                    </div>
    </section>
    <!--================ Blog Area end =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Smiley\resources\views/pages/singleblog.blade.php ENDPATH**/ ?>