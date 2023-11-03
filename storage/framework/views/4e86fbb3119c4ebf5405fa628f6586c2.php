

<style>
    form{
        margin: 15px;
        padding: 10px;
    }
</style>

<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php if($errors -> any()): ?>
    <ul>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($item); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </ul>
<?php endif; ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container">
        
        <form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

            <div class="mb-5">
              <label for="exampleInputEmail1" class="form-label">Product's Name:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Category:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="category">
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Company:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="company">
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Description:</label>
                <textarea id="" cols="137" rows="3"  name="description"></textarea>
            </div>

            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Product's Image:</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image">
            </div>


                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>

          </form>


    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/products/create.blade.php ENDPATH**/ ?>