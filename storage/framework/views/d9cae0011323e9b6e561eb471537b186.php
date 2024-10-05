<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
</head>
<body>
    <h1>All restaurants</h1>
    <!-- create, initialization, of variables -->
    <?php
        $age = 15;
        $a = 3;
        $posts = ['test', 'function', 'laravel']
    ?>
    
    <!-- <?php if($age >= 18): ?> -->
        <!-- <p>You are an adult.</p> -->
    <!-- <?php else: ?> -->
        <!-- <p>You are a teenager.</p> -->
    <!-- <?php endif; ?> -->

    <!-- <?php for($i = 1; $i <= $a; $i++): ?> -->
        <!-- <p>The current value is <?php echo e($i); ?></p> -->
    <!-- <?php endfor; ?> -->

    <!-- <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> -->
        <!-- <p>Title: <?php echo e($post); ?></p> -->
    <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
    
    <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($restaurant->name); ?></h2>
    <ul>
        <li><strong>Address:</strong></li> 
        <ul>
            <li> <strong>Name of the street:</strong> <?php echo e($restaurant->address); ?></li>
            <li><strong>The zip code:</strong> <?php echo e($restaurant->zipCode); ?></li>
            <li><strong>The town:</strong> <?php echo e($restaurant->town); ?></li>
            <li><strong>The country:</strong> <?php echo e($restaurant->country); ?></li>
        </ul>
        <li><strong>Description:</strong> <?php echo e($restaurant->description); ?></li>
        <li><strong>Description:</strong> <?php echo e($restaurant->review); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH /var/www/html/resources/views/restaurants/index.blade.php ENDPATH**/ ?>