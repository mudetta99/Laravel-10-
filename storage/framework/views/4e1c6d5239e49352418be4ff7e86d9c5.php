

<style>
    .header h1{
        text-align: center;
        margin-top:5px;
    }
</style>


<?php $__env->startSection('title'); ?>
    Add new article
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    

    <div class="container">
        <div class="header">
            <h1 class="text text-info">Add New Article</h1>
        </div>

        <form action="<?php echo e(route('articles.update', $article->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Title:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo e($article->title); ?>" name="title">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Entery-header:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo e($article->entry_header); ?>" name="entry_header">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Category:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo e($article->category); ?>" name="category">
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Content:</label>
            <textarea type="text" class="form-control" id="formGroupExampleInput" name="article"><?php echo e($article->article); ?></textarea>
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Article's Image:</label>
            <img width="350px" src="/images/<?php echo e($article->image); ?>" alt="<?php echo e($article->title); ?>"><br><br>
            <label for="formGroupExampleInput" class="form-label">Choose New Article's Image:</label>

            <input type="file" class="form-control" id="formGroupExampleInput" name="image" >
        </div>


        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('articles.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/articles/edit.blade.php ENDPATH**/ ?>