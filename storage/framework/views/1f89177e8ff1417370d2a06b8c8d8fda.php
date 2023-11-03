

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">


<style>

    .container h1{
        font-family: "Sofia", sans-serif;
        text-align: center;
        margin-top: 15px; 
        text-shadow: 3px 3px 3px #ababab;
    }
    table{
        text-align: center;
        /* font-family: "Audiowide", sans-serif; */
        font-family: "Trirong", serif;
    }
    img:hover{
        transform: scale(4.5);
        transition: 5s;
        border-radius: 15%;
    }
</style>

<?php $__env->startSection('title'); ?>
    Products
<?php $__env->stopSection(); ?>

<?php if($message = Session::get('message')): ?>
    <div class="alert alert-success">
        <?php echo e($message); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <h1>Products</h1>

        <br><br><br>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Company</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <th scope="row"> <?php echo e($item->id); ?> </th>
                        <td> <?php echo e($item->name); ?> </td>
                        <td> <?php echo e($item->category); ?> </td>
                        <td> <?php echo e($item->company); ?> </td>
                        <td> <?php echo e($item->description); ?> </td>
                        <td> <img src="images/<?php echo e($item->image); ?>" alt=" <?php echo e($item->name); ?> " width="150px"> </td>
                        <td>
                            <?php if(auth()->guard()->check()): ?>
                                
                            <form action="<?php echo e(route('products.destroy', $item->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <a style="width: 70px" class="btn btn-dark" href="<?php echo e(route('products.edit', $item->id)); ?>">Edit</a>
                            <button class="btn btn-danger"> Delete </button>
                            <?php endif; ?>

                            <a style="width: 70px" class="btn btn-info" href="<?php echo e(route('products.show', $item->id)); ?>">Show</a>

                            </form>
                        </td>
                        <td></td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </tbody>
          </table>



    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Desktop\Ai-World\resources\views/products/index.blade.php ENDPATH**/ ?>