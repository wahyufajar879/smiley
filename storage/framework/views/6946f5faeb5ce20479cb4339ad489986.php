

<?php $__env->startSection('content'); ?>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>blog</h2>
                        <p>home . blog</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                
                                <?php if($blog->image): ?>
                                    <img class="card-img rounded-0" src="<?php echo e(asset('/blog_images/' . $blog->image)); ?>" alt="<?php echo e($blog->title); ?>">
                                <?php else: ?>
                                    <img class="card-img rounded-0" src="<?php echo e(asset('assets/img/default_blog.png')); ?>" alt="Default Image">
                                <?php endif; ?>
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo e(date('d', strtotime($blog->date))); ?></h3>
                                    <p><?php echo e(date('M', strtotime($blog->date))); ?></p>
                                </a>
                                
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo e(route('singleblog', ['id' => $blog->id])); ?>">
                                    <h2><?php echo e($blog->title); ?></h2>
                                </a>
                                <p><?php echo e(Str::limit($blog->description, 200)); ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> <?php echo e($blog->category); ?></a></li>
                                    
                                </ul>
                            </div>
                        </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <?php if($blogs->onFirstPage()): ?>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?php echo e($blogs->previousPageUrl()); ?>" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                        
                                <?php $__currentLoopData = $blogs->getUrlRange(max($blogs->currentPage() - 3, 1), min($blogs->currentPage() + 3, $blogs->lastPage())); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="page-item <?php echo e($blogs->currentPage() == $page ? 'active' : ''); ?>">
                                        <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                                <?php if($blogs->hasMorePages()): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?php echo e($blogs->nextPageUrl()); ?>" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="<?php echo e(route('blog.search')); ?>" method="GET">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            name="search" value="<?php echo e(request('search')); ?>" 
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p><?php echo e($category->category); ?></p>
                                        <p>(<?php echo e($category->total); ?>)</p>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media post_item">
                                <?php if($post->image): ?>
                                    <img src="<?php echo e(asset('/blog_images/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/default_blog.png')); ?>" alt="Default Image">
                                <?php endif; ?>
                                <div class="media-body">
                                    <a href="<?php echo e(route('singleblog', ['id' => $post->id])); ?>">
                                        <h3><?php echo e($post->title); ?></h3>
                                    </a>
                                    <p><?php echo e(date('F d, Y', strtotime($post->date))); ?></p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Smiley\resources\views/pages/blog.blade.php ENDPATH**/ ?>