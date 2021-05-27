<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo e($post->title); ?> - <small>by <?php echo e($post->user->name); ?></small>

                        <span class="pull-right">
                            <?php echo e($post->created_at->toDayDateTimeString()); ?>

                        </span>
                    </div>

                    <div class="panel-body">
                        <p><?php echo $post->body; ?></p>
                        <p>
                            Category: <span class="label label-success"><?php echo e($post->category->name); ?></span> <br>
                            Tags:
                            <?php $__empty_1 = true; $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <span class="label label-default"><?php echo e($tag->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <span class="label label-danger">No tag found.</span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <?php echo $__env->renderWhen(Auth::user(), 'frontend._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

                <?php echo $__env->make('frontend._comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

        </dev>
    </dev>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dylan-tracy/Desktop/websites/txt-utility/public/resources/views/frontend/post.blade.php ENDPATH**/ ?>