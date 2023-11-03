

<style>
    img:hover{
        transform: scale(1.5);
        transition: 2s;
    }
</style>

<?php $__env->startSection('title'); ?>
    Edit|<?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <h1>Edit: <?php echo e($product->name); ?> </h1>

        <br><br><br>


        <form action="<?php echo e(route('products.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
    
                <div class="mb-5">
                  <label for="exampleInputEmail1" class="form-label">Product's Name:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo e($product->name); ?>">
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Category:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="category" value="<?php echo e($product->category); ?>">
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Company:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="company" value="<?php echo e($product->company); ?>">
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Description:</label>
                    <textarea id="" cols="137" rows="3"  name="description">value="<?php echo e($product->description); ?>"</textarea>
                </div>
    
                <div class="mb-5">
                    <label for="exampleInputEmail1" class="form-label">Product's Image:</label>
                    <img width="350px" src="/images/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" srcset="">
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                </div>
    
    
                    <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
    
              </form>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/products/edit.blade.php ENDPATH**/ ?>