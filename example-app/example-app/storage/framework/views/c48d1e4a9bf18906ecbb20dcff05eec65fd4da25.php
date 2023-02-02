<h1>Post page <?php echo $veri1." ".$veri2 ?></h1>
<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    <script>alert('hello visitor <?php echo $veri1." ".$veri2 ?>')</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/showPost.blade.php ENDPATH**/ ?>