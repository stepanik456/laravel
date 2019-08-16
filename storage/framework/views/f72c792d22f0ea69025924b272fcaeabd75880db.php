<?php $__env->startSection('content'); ?>
    <h1><?php echo e($book->name); ?></h1>
    Description:
    <?php echo e($book->description); ?> <br>
    Pages:
    <?php echo e($book->pages); ?> <br>
    Price:
    <?php echo e($book->price); ?> <br>
    Author:
    <?php echo e($book->author->name); ?> <?php echo e($book->author->surname); ?> <br>

    <p>
        <a href="/books/<?php echo e($book->id); ?>/edit" class="btn btn-primary">Edit</a>
        <form method="POST" action="/books/<?php echo e($book->id); ?>">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bookshop\resources\views/books/show.blade.php ENDPATH**/ ?>