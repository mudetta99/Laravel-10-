

<style>
    .container{

    }
    .header{
        margin-top: 20px;
        width: 97%;
    }

    .header h1{
        font-size: 2.5rem;
        line-height: 1.25;
        margin: 0 0 30px;
        padding: 15px 0 0;
    }

    .article-body{
        margin-top: 20px;
        overflow: hidden;
    }
    .article-body img{
        width: 95%;
        height: 70%;
    }
    .article-body img:hover{ 
        transform: scale(1.1);
        transition: 2s;
    }



</style>


<?php $__env->startSection('title'); ?>
    Articles
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
    

    <div class="container">
        <div class="header">
            <h1> <?php echo e($article->title); ?> </h1>
            <small> <?php echo e($article->created_at); ?> </small> <br><br>
            
            <small class="text text-danger" style="font-weight: bolder;justify-content:space-around"> <?php echo e($article->category); ?> </small>
            <p style="font-weight: bolder;font-size:1.5625rem;"> <?php echo e($article->entry_header); ?> </p style="font-weight: bolder">
        </div>

        <div class="article-body">
        
            <img width="75%" src="/images/<?php echo e($article->image); ?>" alt="<?php echo e($article->title); ?>">
            <br>

            <br><br>
            <div class="article-p">
                <h5>
                    <?php echo e($article->article); ?>

                </h5>  
            </div>
        </div>
        <br><br>


        


        
    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('articles.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/articles/show.blade.php ENDPATH**/ ?>