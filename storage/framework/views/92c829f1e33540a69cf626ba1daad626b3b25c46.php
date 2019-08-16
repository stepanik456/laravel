<?php $__env->startSection('content'); ?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Pages</th>
            <th>Price</th>
            <th>Author</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/books/<?php echo e($book->id); ?>"><?php echo e($book->name); ?></a></td>
                <td><?php echo e($book->description); ?></td>
                <td><?php echo e($book->pages); ?></td>
                <td><?php echo e($book->price); ?></td>
                <td><a href="/authors/<?php echo e($book->author->id); ?>"> <?php echo e($book->author->name); ?> <?php echo e($book->author->surname); ?></a></td>
                <td>
                    <form method="GET" action="/books/<?php echo e($book->id); ?>/edit">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="/books/<?php echo e($book->id); ?>">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<a class="btn-success float-right"  href="/books/create">Create book</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bookshop\resources\views/books/index.blade.php ENDPATH**/ ?>