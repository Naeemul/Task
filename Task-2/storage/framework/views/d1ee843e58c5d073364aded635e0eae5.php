<?php $__env->startSection('title'); ?>
    Manage-Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h3 align="center"><?php echo e(Session::get('msg')); ?></h3>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 align="center">Product</h3>
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo e(asset("/$product->image")); ?>" width="250px" height="120px">
                                    </td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->id == $product->categoryID): ?>
                                            <td><?php echo e($category->name); ?></td>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e($product->price); ?></td>
                                    <td width="20%">
                                        <a class="btn btn-primary" href="<?php echo e(route('update.product', ['id' => $product->id])); ?>">
                                            Update
                                        </a>
                                        <a class="btn btn-danger" href="<?php echo e(route('delete.product', ['id' => $product->id])); ?>"
                                            onclick="return confirm('Are you sure to delete this category')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\day-1\Task-2\fashion\resources\views/backend/manageProduct.blade.php ENDPATH**/ ?>