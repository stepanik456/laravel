<?php $__env->startSection('content'); ?>

<body>
    <h1 class="row justify-content-center align-self-center">Create new book</h1>

    <form method="POST" action="/books">
        <?php echo csrf_field(); ?>
        <div>
            <input type="text" name="name" placeholder="Book name" class="form-control <?php echo e($errors->has('name') ? ("is-invalid") : ''); ?>" value="<?php echo e(old('name')); ?>">
        </div>
        <div>
            <textarea name="description" placeholder="Book description" class="form-control <?php echo e($errors->has('description') ? ("is-invalid") : ''); ?>"><?php echo e(old('description')); ?></textarea>
        </div>
        <div>
            <input type="number" name="pages" placeholder="Pages" class="form-control <?php echo e($errors->has('pages') ? ("is-invalid") : ''); ?>" value="<?php echo e(old('pages')); ?>">
        </div>
        <div>
            <input type="number" name="price" placeholder="Price" class="form-control <?php echo e($errors->has('price') ? ("is-invalid") : ''); ?>" value="<?php echo e(old('price')); ?>">
        </div>
        <div>
            <select name="author_id" class="form-control">
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?> <?php echo e($author->surname); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary float-right">Create book</button>
        </div>
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
</body>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bookshop\resources\views/books/create.blade.php ENDPATH**/ ?>