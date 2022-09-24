


<?php $__env->startSection('title'); ?>
    Creating tag
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-4">

<form action="" method="post">
    <div class="form-group">
        <label for="tag-name">Tag name</label>
        <input id="tag-name" type="text" class="form-control" name="title" value="" placeholder="Tag Name"/>
    </div>
    <div class="form-group">
        <label for="tag-slug">Tag slug</label>
        <input id="tag-slug" type="text" class="form-control" name="slug" value="" placeholder="Tag Slug"/>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-5">Add Tag</button>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/tags/createtag.blade.php ENDPATH**/ ?>