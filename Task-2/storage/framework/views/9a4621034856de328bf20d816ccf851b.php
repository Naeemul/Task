<?php $__env->startSection('title'); ?>
    Update-Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <form action="<?php echo e(route('update.category.complete',['id' => $category->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label text-primary-emphasis fs-4">Category-Name*</label>
                            <input class="form-control" type="text" name="categoryName" id="categoryName" value="<?php echo e($category->name); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-primary-emphasis fs-4">Description*</label>
                            <input class="form-control " type="text" name="description" id="description" value="<?php echo e($category->description); ?>"
                                rows="8" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-primary-emphasis fs-4">Image*</label>
                            <img src="<?php echo e(asset("/$category->image")); ?>" width="300px" height="200px">
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

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\day-1\Task-2\fashion\resources\views/backend/updateCategory.blade.php ENDPATH**/ ?>