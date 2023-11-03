

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">


<style>

    .container{
        justify-content:space-between;
        position: relative;
    }
    .header{
        float: right;
        text-align: center;
        /* position: relative; */
    }
    .header h1{
        font-family: "Sofia", sans-serif;
    }
    .product-description{
        float: right;
        margin-right:100px ;
        position: fixed;
    }
    .product-info{
        float: left;
        margin-right:40px ;
        position: absolute;
    }

    .product-info img:hover{
        transform: scale(1.5);
        transition: 4s; 
        margin-right:100px ;
        border-radius: 20%;
    }
</style>

<?php $__env->startSection('title'); ?>
    <?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    
    <div class="container">

        <br><br><br>

        <div class="header">
            <h1 class="text text-info"> <?php echo e($product->name); ?> </h1>
            <h4> Product From <span class="text text-info"> <?php echo e($product->company); ?> </span> Company </h4>
            <span class="text text-info"> <?php echo e($product->category); ?> </span>
            <br><br>

            <div class="product-description">
                <h5> <?php echo e($product->description); ?> </h5>
            </div>
        </div>

        <div class="product-info">
            <img width="550px" src="/images/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/products/show.blade.php ENDPATH**/ ?>