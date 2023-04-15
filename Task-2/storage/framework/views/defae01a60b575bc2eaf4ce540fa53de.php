<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <div class="row">
            <div class="col-8 offset-2">
                <h1 align='center'><?php echo e(Session::get('msg')); ?></h1>
                <form action="<?php echo e(route('contact.form.submit')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label text-primary-emphasis fs-4">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-primary-emphasis fs-4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-primary-emphasis fs-4">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label text-primary-emphasis fs-4">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-primary-emphasis fs-4">Message</label>
                        <textarea class="form-control " type="text" name="message" id="message" rows="8" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\day-1\Task-2\fashion\resources\views/frontend/contact.blade.php ENDPATH**/ ?>