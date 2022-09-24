

<?php $__env->startSection('title'); ?>
  Update Tag Value
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col"><?php echo e($tag->id); ?></th>
            <th scope="col"><?php echo e($tag->title); ?></th>
            <th scope="col"><?php echo e($tag->slug); ?></th>
            <th scope="col"><?php echo e($tag->created_at); ?></th>
            <th scope="col"><?php echo e($tag->updated_at); ?></th>
        </tr>
        </tbody>
    </table>
    <div class="container-fluid mt-4">
        <form action="" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo e($tag->id); ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($tag->title); ?>">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($tag->slug); ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Update Tag</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/lesson-7/resources/views/tags/update.blade.php ENDPATH**/ ?>