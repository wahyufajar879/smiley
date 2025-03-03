

<?php $__env->startSection('content'); ?>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Detail Data Blog</h4>
    </div>
    <div class="pd-20">
        <p><strong>Date:</strong> <?php echo e($dataBlog->date); ?></p>
        <p><strong>Title:</strong> <?php echo e($dataBlog->title); ?></p>
        <p><strong>Description:</strong> <?php echo e($dataBlog->description); ?></p>
        <p><strong>Category:</strong> <?php echo e($dataBlog->category); ?></p>
        <p><strong>Image:</strong>
            <?php if($dataBlog->image): ?>
                 <img src="<?php echo e(asset('/blog_images/' . $dataBlog->image)); ?>" alt="<?php echo e($dataBlog->title); ?>" width="200">
            <?php else: ?>
                No Image
            <?php endif; ?>
        </p>
        <a href="<?php echo e(route('data_blogs.index')); ?>" class="btn btn-secondary">Kembali</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Smiley\resources\views/data/blog/show.blade.php ENDPATH**/ ?>