<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <div class="row">
            <div class="col-8 offset-2">
                <img src="<?php echo e(asset("/$product->image")); ?>" alt="">
                <h1><?php echo e($product->name); ?></h1>
                <p>Price: <?php echo e($product->price); ?> Tk</p>
                <p><?php echo e($product->description); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\day-1\Task-2\fashion\resources\views/frontend/productDetail.blade.php ENDPATH**/ ?>