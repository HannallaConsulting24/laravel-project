<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Search Results</h2>
    
<a href="<?php echo e(route('searchPage')); ?>"><button > Go Back</button></a>
  

    
    <?php if($relatedRows->isNotEmpty()): ?>
        <h2>All NDCs Data Related to "<?php echo e($drugName); ?>"</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- Dynamically list table headers based on model fields -->
                    <?php $__currentLoopData = array_keys($relatedRows->first()->toArray()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e(ucfirst(str_replace('_', ' ', $column))); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $relatedRows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <!-- Dynamically list table data -->
                        <?php $__currentLoopData = $row->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td><?php echo e($value); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No related data found for this drug name.</p>
    <?php endif; ?>
    
    
</div>
</body>
</html>
<?php /**PATH C:\Users\HD\Desktop\PharmacyTool\resources\views/ndcResult.blade.php ENDPATH**/ ?>