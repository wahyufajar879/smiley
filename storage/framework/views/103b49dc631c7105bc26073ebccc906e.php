

<?php $__env->startSection('content'); ?>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Blog</h4>
        <a href="<?php echo e(route('data_blogs.create')); ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dataBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($dataBlog->date); ?></td>
                    <td><?php echo e($dataBlog->title); ?></td>
                    <td><?php echo e(Str::limit($dataBlog->description, 50)); ?></td> <!-- Batasi deskripsi -->
                    <td><?php echo e($dataBlog->category); ?></td>
                    <td>
                        <?php if($dataBlog->image): ?>
                            <img src="<?php echo e(asset('/blog_images/' . $dataBlog->image)); ?>" alt="<?php echo e($dataBlog->title); ?>" width="100">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('data_blogs.show', $dataBlog->id)); ?>" class="btn btn-sm btn-info">Lihat</a>
                        <a href="<?php echo e(route('data_blogs.edit', $dataBlog->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('data_blogs.destroy', $dataBlog->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Smiley\resources\views/data/blog/index.blade.php ENDPATH**/ ?>