<?php $__env->startSection('title'); ?>
update category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class="table table-bordered table-hover table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">slug</th>
        <th scope="col">body</th>
        <th scope="col">category</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col"><?php echo e($posts->id); ?></th>
        <th scope="col"><?php echo e($posts->title); ?></th>
        <th scope="col"><?php echo e($posts->slug); ?></th>
        <th scope="col"><?php echo e($posts->body); ?></th>
        <th scope="col"><?php echo e($posts->category_id); ?></th>
        <th scope="col"><?php echo e($posts->created_at); ?></th>
        <th scope="col"><?php echo e($posts->updated_at); ?></th>
    </tr>
    </tbody>
</table>
<div class="container mt-4">
    <form action="" method="POST">
        <input type="hidden" id="id" name="id" value="<?php echo e($posts->id); ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($posts->title); ?>">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($posts->slug); ?>">
        </div>
        <div class="form-group">
            <label for="slug">Body</label>
            <input type="text" class="form-control" id="slug" name="body" value="<?php echo e($posts->body); ?>">
        </div>
        <div class="form-group">
            <label for="slug">Category</label>
            <input type="text" class="form-control" id="slug" name="category"
                   value="<?php echo e($posts->category_id); ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Update post</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/posts/update.blade.php ENDPATH**/ ?>
