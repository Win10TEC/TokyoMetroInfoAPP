<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrainOpeStatus</title>
</head>
<body>
<div class="content">
    <div class="list-group">
        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>
            <?php echo e($items); ?>

        </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH /Users/junichi/IdeaProjects/TokyoMetroInfoAPP/TokyoMetroInfoAPP/resources/views/status/index.blade.php ENDPATH**/ ?>