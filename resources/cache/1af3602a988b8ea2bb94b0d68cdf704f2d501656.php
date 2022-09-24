


<?php $__env->startSection('title'); ?>
    Creating category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="" method="post">
    <div class="form-group">
        <label for="category-name">Category name</label>
        <input id="category-name" type="text" class="form-control" name="title" value="" placeholder="Category Name"/>
    </div>
    <div class="form-group">
        <label for="category-slug">Category slug</label>
        <input id="category-slug" type="text" class="form-control" name="slug" value="" placeholder="Category Slug"/>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-5">Добавить</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/categories/create.blade.php ENDPATH**/ ?>