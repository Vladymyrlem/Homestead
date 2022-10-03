<?php $__env->startSection('content'); ?>
    <form action="/post/update" method="post">
        <input type="hidden" value="<?php echo e($post->id); ?>" name="id">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
<<<<<<< HEAD
            <?php if (isset($_SESSION['errors']['title'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['title'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $title): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
=======
            <?php if(isset($_SESSION['errors']['title'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['title']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($title); ?>

                    </div>
<<<<<<< HEAD
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
=======
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($post->slug); ?>">
<<<<<<< HEAD
            <?php if (isset($_SESSION['errors']['slug'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['slug'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $slug): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
=======
            <?php if(isset($_SESSION['errors']['slug'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['slug']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($slug); ?>

                    </div>
<<<<<<< HEAD
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
=======
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" class="form-control" id="body" name="body" value="<?php echo e($post->body); ?>">
<<<<<<< HEAD
            <?php if (isset($_SESSION['errors']['body'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['body'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $body): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
=======
            <?php if(isset($_SESSION['errors']['body'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['body']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $body): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($body); ?>

                    </div>
<<<<<<< HEAD
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
=======
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id">
<<<<<<< HEAD
                <?php $__currentLoopData = $categories;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <option <?php if ($category->id == $post->category_id): ?> selected <?php endif; ?>
                            value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if (isset($_SESSION['errors']['category_id'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['category_id'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
=======
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if($category->id == $post->category_id): ?> selected <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if(isset($_SESSION['errors']['category_id'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['category_id']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($error); ?>

                    </div>
<<<<<<< HEAD
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
=======
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Category</label>
            <select multiple aria-label="multiple select example" name="tags[]" id="tags">
<<<<<<< HEAD
                <?php $__currentLoopData = $tags;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $tag): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <option <?php if (in_array($tag->id, $post->tags->pluck('id')->toArray())): ?> selected <?php endif; ?>
                            value="<?php echo e($tag->id); ?>"><?php echo e($tag->title); ?></option>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if (isset($_SESSION['errors']['tag_id'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['tag_id'];
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
=======
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if(in_array($tag->id, $post->tags->pluck('id')->toArray())): ?> selected <?php endif; ?> value="<?php echo e($tag->id); ?>"><?php echo e($tag->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php if(isset($_SESSION['errors']['tag_id'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['tag_id']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($error); ?>

                    </div>
<<<<<<< HEAD
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
=======
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> 5f35dec (Init Project)
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<<<<<<< HEAD
<?php
unset($_SESSION['errors']);
unset($_SESSION['data']);
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/homework10/resources/views/post/form-edit.blade.php ENDPATH**/ ?>
=======
    <?php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test/homework10/resources/views/post/form-edit.blade.php ENDPATH**/ ?>
>>>>>>> 5f35dec (Init Project)
