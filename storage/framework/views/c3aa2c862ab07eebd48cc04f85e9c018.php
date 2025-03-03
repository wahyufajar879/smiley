<div class="booking_form">
    <form action="<?php echo e(route('trip.submit')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-row">
            <div class="form_colum">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form_colum">
                <div class="input-group">
                    <input type="number" name="no_phone" placeholder="Phone Number" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <select class="nc_select" name="type_vehicle" id="tour_type" required>
                    <option selected disabled value="">Type Of Vehicle</option>
                    <?php if(isset($typeVehicles)): ?>
                        <?php $__currentLoopData = $typeVehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeVehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($typeVehicle); ?>"><?php echo e($typeVehicle); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form_colum">
                <input type="number" name="people" placeholder="Number Of People" id="tour_person" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <select class="nc_select" name="destination" id="tour_destination" required>
                    <option selected disabled value="">Choose Trip</option>
                    <?php if(isset($tourDestinations)): ?>
                        <?php $__currentLoopData = $tourDestinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($destination); ?>"><?php echo e($destination); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form_colum">
                <input type="text" name="place_to_go" id="place_to_go" placeholder="Place To Go" readonly required>
            </div>
        </div>
        <div class="form-row">
            <div class="form_btn">
                <button type="submit" class="btn_1">Book Now</button>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // $('.nc_select').niceSelect(); // Inisialisasi Nice Select

        $('#tour_destination').change(function() {
            var destination = $(this).val();

            if (destination) {
                $.ajax({
                    url: "<?php echo e(route('get.place-to-go')); ?>",
                    type: "GET",
                    data: {
                        destination: destination
                    },
                    dataType: "json",
                    success: function(data) {
                        $('#place_to_go').val(data);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error: " + status + " - " + error);
                    }
                });
            } else {
                $('#place_to_go').val(''); // Kosongkan jika destination tidak dipilih
            }
        });
    });
</script><?php /**PATH D:\Project\Smiley\resources\views/form/tour_island.blade.php ENDPATH**/ ?>