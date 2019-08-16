<?php $__env->startSection('content'); ?>
<h1 class="row justify-content-center align-self-center"><?php echo e($author->name); ?> <?php echo e($author->surname); ?> books</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Pages</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $author->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->name); ?></td>
                <td><?php echo e($book->description); ?></td>
                <td><?php echo e($book->pages); ?></td>
                <td><?php echo e($book->price); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bookshop\resources\views/authors/show.blade.php ENDPATH**/ ?>