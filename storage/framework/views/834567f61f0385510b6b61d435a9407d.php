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
    <h2 class="mb-4"></h2>

    <form action="<?php echo e(route('search')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="drug_name" value="<?php echo e($normalizedDrugName); ?>">
        <input type="hidden" name="ndc" value="<?php echo e($normalizedNDC); ?>">
        <input type="hidden" name="insurance" value="<?php echo e($normalizedInsurance); ?>">
    <button type="submit"> Go Back</button>

    </form>
    
    <h3>Alternative Drugs due to <?php echo e($sortBy); ?>    </h3>
    <p>Found <?php echo e($scriptData->count()); ?> .</p>

    <table class="table table-striped">
        <thead>
            <?php if($sortBy === 'net_profit_desc'): ?>
            <tr>
                <th>Class Name</th>
                <th>Drug Name</th>
                <th>Drug NDC</th>
                <th>Insurance</th>
                <th>Script</th>
                <th>Date</th>
                <th>RxCui</th>
                <th>Net Profit</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $scriptData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($script->Class); ?></td>
                    <td><?php echo e($script->Drug_Name); ?></td>
                    <td><?php echo e($script->NDC); ?></td>
                    <td><?php echo e($script->Ins); ?></td>
                    <td><?php echo e($script->Script); ?></td>
                    <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $script->Date)->format('m/d/Y')); ?>

                    </td>
                    <td><?php echo e($script->RxCui); ?></td>
                    <td><?php echo e($script->Net_Profit); ?></td>
                </tr>

                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
    
    <table class="table table-striped">
        <thead>
            <?php if($sortBy == 'awp_asc'): ?>
            <tr>
                <th>Class Name</th>
                <th>Drug Name</th>
                <th>Drug NDC</th>
                <th>form</th>
                <th>awp</th>
                <th>strength</th>
                <th>RxCui</th>
                <th>acq</th>

            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $scriptData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($script->drug_class); ?></td>
                    <td><?php echo e($script->drug_name); ?></td>
                    <td><?php echo e($script->ndc); ?></td>
                    <td><?php echo e($script->form); ?></td>
                    <td><?php echo e($script->awp); ?></td>
                    <td><?php echo e($script->strength); ?></td>
                    <td><?php echo e($script->rxCUI); ?></td>
                    <td><?php echo e($script->acq); ?></td>

                </tr>

                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
    
   
    <p> <?php echo e($scriptData->count()==1 ? 'No alternatives found for the provided inputs.' :''); ?>

        </p>


<?php /**PATH C:\Users\HD\Desktop\PharmacyTool\resources\views/filteredData.blade.php ENDPATH**/ ?>