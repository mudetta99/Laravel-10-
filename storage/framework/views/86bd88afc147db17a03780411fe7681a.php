

<style>
    .header h1{
        text-align: center;
        margin-top:5px;
    }
</style>


<?php $__env->startSection('title'); ?>
    Add new article
<?php $__env->stopSection(); ?>

<?php if($errors -> any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($item); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


<?php $__env->startSection('content'); ?>
    

    <div class="container">
        <div class="header">
            <h1 class="text text-info">Add New Article</h1>
        </div>

        <form action="<?php echo e(route('articles.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Title:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Title" name="title">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Entery-header:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Entery-header" name="entry_header">
        </div>


        
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Category:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Category" name="category">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Content:</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Article's Content" name="article"></textarea>
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Image:</label>
            <input type="file" class="form-control" id="formGroupExampleInput" name="image" >
        </div>


        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('articles.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/articles/create.blade.php ENDPATH**/ ?>