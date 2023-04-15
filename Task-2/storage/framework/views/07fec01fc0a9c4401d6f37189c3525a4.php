<?php $__env->startSection('title'); ?>
    Update-Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="py-4">
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <form action="<?php echo e(route('update.product.complete', ['id' => $product->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="productName" class="form-label text-primary-emphasis fs-4">Product-Name*</label>
                            <input class="form-control" type="text" name="productName" id="productName" value="<?php echo e($product->name); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control " type="text" name="description" id="description" value="<?php echo e($product->description); ?>" rows="8" required>
                        </div>
                        <div class="mb-3">
                            <label for="productName" class="form-label text-primary-emphasis fs-4">Category*</label>
                            <select class="form-select" aria-label="Default select example" name="categoryID" required>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($category->id == $product->categoryID): ?>
                                        <option selected value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>  
                                        <?php break; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($category->id != $product->categoryID): ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>  
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label text-primary-emphasis fs-4">Price*</label>
                            <input class="form-control" type="number" name="price" id="price" value="<?php echo e($product->price); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label>
                            <img src="<?php echo e(asset("/$product->image")); ?>" width="300px" height="200px">
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\day-1\Task-2\fashion\resources\views/backend/updateProduct.blade.php ENDPATH**/ ?>