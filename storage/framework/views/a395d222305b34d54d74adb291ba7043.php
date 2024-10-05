<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
</head>
<body>
    <h1>Selected restaurant</h1>
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
</body>
</html><?php /**PATH /var/www/html/resources/views/restaurants/show.blade.php ENDPATH**/ ?>