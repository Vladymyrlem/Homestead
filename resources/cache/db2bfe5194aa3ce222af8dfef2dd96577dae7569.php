<?php $__env->startSection('content'); ?>
    <form action="/posts/store" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="<?php echo e($_SESSION['data']['title'] ?? ''); ?>">
            <?php if (isset($_SESSION['errors']['title'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['title'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $title): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($title); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
                   value="<?php echo e($_SESSION['data']['slug'] ?? ''); ?>">
            <?php if (isset($_SESSION['errors']['slug'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['slug'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $slug): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($slug); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="input-group">
            <span class="input-group-text">Body</span>
            <textarea class="form-control" aria-label="With textarea" id="body" name="body"
                      value="<?php echo e($_SESSION['data']['body'] ?? ''); ?>"></textarea>
            <?php if (isset($_SESSION['errors']['body'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['body'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $body): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($body); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id">
                <?php $__currentLoopData = $categories;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if (isset($_SESSION['errors']['category_id'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['category_id'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($error); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select multiple aria-label="multiple select example" name="tags[]" id="tags">
                <?php $__currentLoopData = $tags;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $tag): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->title); ?></option>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if (isset($_SESSION['errors']['tag_id'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['tag_id'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($error); ?>

                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
unset($_SESSION['errors']);
unset($_SESSION['data']);
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/homework10/resources/views/posts/form.blade.php ENDPATH**/ ?>
