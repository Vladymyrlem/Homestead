


<?php $__env->startSection('title'); ?>
    Creating post
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="" method="post">
    <div class="form-group">
        <label for="post-name">Post name</label>
        <input id="post-name" type="text" class="form-control" name="title" value="" placeholder="Post Name"/>
    </div>
    <div class="form-group">
        <label for="post-slug">Post slug</label>
        <input id="post-slug" type="text" class="form-control" name="slug" value="" placeholder="Post Slug"/>
    </div>
    <div class="form-group">
        <label for="post-slug">Post Body</label>
        <input id="post-slug" type="text" class="form-control" name="body" value="" placeholder="post Body"/>
    </div>
    <div class="form-group">
        <label for="post-slug">Category Id</label>
        <input id="post-slug" type="text" class="form-control" name="id" value="" placeholder="Category Id"/>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-5">Добавить</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/posts/create.blade.php ENDPATH**/ ?>