<?php $__env->startSection('content'); ?>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Pemesanan Snorkling</h4>
        <a href="<?php echo e(route('snorklings.create')); ?>" class="btn btn-primary">Tambah Pemesanan</a>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Phone</th>
                    <th>Select Package</th>
                    <th>Destination</th>
                    <th>Person</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $snorklings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $snorkling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($snorkling->name); ?></td>
                    <td><?php echo e($snorkling->no_phone); ?></td>
                    <td><?php echo e($snorkling->select_package); ?></td>
                    <td><?php echo e($snorkling->destination); ?></td>
                    <td><?php echo e($snorkling->person); ?> Pax</td>
                    <td>
                        <a href="<?php echo e(route('snorklings.show', $snorkling->id)); ?>" class="btn btn-sm btn-info">Lihat</a>
                        <a href="<?php echo e(route('snorklings.edit', $snorkling->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('snorklings.destroy', $snorkling->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Smiley\resources\views/snorkling/index.blade.php ENDPATH**/ ?>