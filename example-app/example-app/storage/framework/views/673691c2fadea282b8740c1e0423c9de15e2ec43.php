<?php $__env->startSection('content'); ?>
<h1>Content page</h1>
<?php
    if(count($people)){
        foreach($people as $person) {
            ?>
            <li> <?php echo $person;
            }?>
            </li>
<?php } ?> <br> <HR>
ŞİMDİ KISALTILMIŞ ŞEKİLDE RAZOR GİBİ YAZIYORUZ.<BR>
<?php if(count($people)): ?>
    <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo $person ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php $__env->startSection('footer'); ?>

    <script>alert('hello visitor')</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/contact.blade.php ENDPATH**/ ?>