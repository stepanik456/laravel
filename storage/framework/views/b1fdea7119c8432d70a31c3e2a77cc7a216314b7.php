<?php $__env->startSection('content'); ?>
    <h1 class="row justify-content-center align-self-center">Edit project</h1>

<form method="POST" action="/books/<?php echo e($book->id); ?>">
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>
        <div>
            <input type="text" name="name" value="<?php echo e($book->name); ?>" class="form-control <?php echo e($errors->has('name') ? ("is-invalid") : ''); ?>">
        </div>
        <div>
            <textarea name="description" class="form-control <?php echo e($errors->has('description') ? ("is-invalid") : ''); ?>"><?php echo e($book->description); ?></textarea>
        </div>
        <div>
            <input type="number" name="pages" value="<?php echo e($book->pages); ?>" class="form-control <?php echo e($errors->has('pages') ? ("is-invalid") : ''); ?>">
        </div>
        <div>
            <input type="number" name="price" value="<?php echo e($book->price); ?>" class="form-control <?php echo e($errors->has('price') ? ("is-invalid") : ''); ?>">
        </div>
        <div>
            <select name="author_id" class="form-control">
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?> <?php echo e($author->surname); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary float-right">Edit book</button>
        </div>
</form>

<form method="POST" action="/books/<?php echo e($book->id); ?>">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-danger float-right">Delete book</button>
</form>

<?php if($errors->any()): ?>
<div>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bookshop\resources\views/books/edit.blade.php ENDPATH**/ ?>