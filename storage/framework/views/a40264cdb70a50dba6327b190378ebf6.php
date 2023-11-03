

<style>
    .header h1{
        text-align: center;
        margin-top:5px;
    }

    .article-name{
      text-align: center;
      color: #000000;
    }
    .article-name:hover{
      color: #00000050;
    }

    .btn-article:hover{
      transform: scale(1.1)
    }
    .article-image:hover{
      transform: scale(1.02);
      transition: 2s;

    }

  .card-text{
    height: 50px;
    overflow: hidden;

    }
</style>

<?php $__env->startSection('title'); ?>
    Articles
<?php $__env->stopSection(); ?>

<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success"> <?php echo e($message); ?> </div>
<?php endif; ?>



<?php $__env->startSection('content'); ?>
    

    <div class="container">

        <div class="header">
            <h1 class="text text-danger">Articles</h1>
            <img src="" alt="">
        </div>


        <br>

        <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

        <div class="col">
          <div class="card shadow-sm">
            
            <img src="images/<?php echo e($item->image); ?>" width="100%" height="225" class="article-image"  alt="<?php echo e($item->title); ?>">
            <div class="card-body">
            <a style="text-decoration: none" href="<?php echo e(route('articles.show', $item->id)); ?>"><h4 class="article-name"> <?php echo e($item->title); ?> </h4></a>
            

              <p class="card-text" > <?php echo e($item->entry_header); ?> </p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <?php if(auth()->guard()->check()): ?>
                      
                <form action="<?php echo e(route('articles.destroy', $item->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger btn-sm btn-article">Delete</button>
                  <a href="<?php echo e(route('articles.edit', $item->id)); ?>" class="btn btn-primary btn-sm btn-article">Edit</a>

                <?php endif; ?>
                  <a href="<?php echo e(route('articles.show', $item->id)); ?>" class="btn btn-success btn-sm btn-article">View</a>
                </form>


                </div>
                <small class="text-muted"> <?php echo e($item->updated_at); ?> </small>
              </div>
            </div>
          </div>
        </div>
      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
      </div>
    </div>
  </div>

  
  

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('articles.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/articles/index.blade.php ENDPATH**/ ?>