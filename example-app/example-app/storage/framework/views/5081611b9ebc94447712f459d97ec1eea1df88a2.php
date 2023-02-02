SADECE 1 POST GÖRÜNTÜLEME EKRANI.
    <article>
        <h1>
            <a href="/posts/<?php echo e($post->slug); ?>">
                <?php echo e($post->title); ?>

            </a>
        </h1>

        <div><?php echo e($post->excerpt); ?></div>
    </article>


<?php /**PATH C:\xampp\htdocs\example-app\resources\views/blog\post.blade.php ENDPATH**/ ?>