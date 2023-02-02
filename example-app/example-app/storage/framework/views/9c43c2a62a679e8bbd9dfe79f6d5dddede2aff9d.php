TÜM POSTLAR BURDA GÖRÜNÜYOR.
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <article>
        <h1>
            <a href="/posts/<?php echo e($post->slug); ?>">
                <?php echo e($post->title); ?>

            </a>
        </h1>
<p>
    <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
</p>
        <div><?php echo e($post->excerpt); ?></div>

    </article>
<HR>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/blog\posts.blade.php ENDPATH**/ ?>