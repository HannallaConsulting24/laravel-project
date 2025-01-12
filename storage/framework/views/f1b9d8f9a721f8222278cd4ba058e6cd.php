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
    <?php if($data->isEmpty()): ?>
    <div class="alert alert-warning" role="alert">
        No insurance data available for <?php echo e($request->drug_name); ?> with NDC <?php echo e($request->ndc); ?>

    </div>

    <?php endif; ?>
<a href="<?php echo e(route('searchPage')); ?>"><button > Go Back</button></a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <?php if($data && count($data) > 0): ?>
                <th>Drug Name</th>
                <th>Ins Results</th>
                <th>NDC Results</th>
                <th>Class</th>
                <th>Date</th>
                <th>Script</th>
                <th>Net Profit</th>
                <th>ACQ</th>
                <th>QTY</th>
                <th>INS PAY</th>
                <th>pat_pay</th>

            <?php elseif(isset($drug_data) && count($drug_data) > 0): ?>
                <th>Drug Name</th>
                <th>NDC</th>               
             <th>Class</th>
                <th>Form</th>
                <th>Strength</th>
                <th>Manufacturer</th>
                <th>Acquisition Cost</th>
            <?php else: ?>
                <th colspan="5" class="text-center">No Data Available</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php if($data && count($data) > 0): ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($request->drug_name); ?></td>
                    <td><?php echo e($request->insurance); ?></td>
                    <td><?php echo e($item->NDC); ?></td>
                    <td><?php echo e($class); ?></td>
                    <td>
<?php echo e($item->Date); ?></td>                    <td><?php echo e($item->Script); ?></td>
                    <td><?php echo e($item->Net_profit); ?></td>
                    <td><?php echo e($item->ACQ); ?></td>
                    <td><?php echo e($item->Qty); ?></td>
                    <td><?php echo e($item->Ins_Pay); ?></td>
                    <td><?php echo e($item->Pat_Pay); ?></td>


                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php elseif(isset($drug_data) && count($drug_data) > 0): ?>
            <?php $__currentLoopData = $drug_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($request->drug_name); ?></td>
                    <td><?php echo e($item->ndc); ?></td>
                    <td><?php echo e($item->drug_class); ?></td>
                    <td><?php echo e($item->form); ?></td>
                    <td><?php echo e($item->strength); ?></td>
                    <td><?php echo e($item->mfg); ?></td>
                    <td><?php echo e($item->acq); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No Data Available</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



    
    <h3>Alternative Drugs in Same Insurance</h3>
<p>Found <?php echo e($script->count()); ?> alternatives in the same class.</p>

<form id="filterForm" method="post" action="<?php echo e(route('searchDrug')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="drug_name" value="<?php echo e($request->drug_name); ?>">
    <input type="hidden" name="ndc" value="<?php echo e($request->ndc); ?>">
    <input type="hidden" name="insurance" value="<?php echo e($request->insurance); ?>">

    <label for="sort_by">Sort Alternatives By:</label>
    <select name="sort_by" id="sort_by" class="form-select" onchange="this.form.submit()">
        <option value="">-- Select --</option>
        <option value="net_profit_desc" <?php echo e(request('sort_by') === 'net_profit_desc' ? 'selected' : ''); ?>>
            Highest Net Profit
        </option>
       <option value="awp_asc" <?php echo e(request('sort_by') === 'awp_asc' ? 'selected' : ''); ?>>
            Lowest AWP
        </option>
        
    </select>
</form>


    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>class Name</th>
                <th>drug Name</th>
                <th>drug NDC</th>
                <th>Insurance </th>
                <th>Script </th>
                <th>Date </th>
                <th>RxCui </th>
                <th>Net_Profit </th>
                <th>ACQ</th>
                <th>QTY</th>
                <th>INS PAY</th>
                <th>pat_pay</th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <!-- Drug Name -->
                  
                    <?php $__currentLoopData = $script; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                    
                    <tr>
                     <?php if($i->Drug_Name == $request->drug_name && $i->NDC == $request->ndc && $i->Ins == $request->insurance): ?>
                        
                        <?php else: ?>
                    <td><?php echo e($i->Class); ?></td>
                    <td><?php echo e($i->Drug_Name); ?></td>
                    <td><?php echo e($i->NDC); ?></td>
                    <td><?php echo e($i->Ins); ?></td>
                    <td><?php echo e($i->Script); ?></td>
                    <td>
<?php echo e($i->Date); ?>                    </td>
                    <td><?php echo e($i->RxCui); ?></td>
                    <td><?php echo e($i->Net_profit); ?></td>
                    <td><?php echo e($i->ACQ); ?></td>
                    <td><?php echo e($i->Qty); ?></td>
                    <td><?php echo e($i->Ins_Pay); ?></td>
                    <td><?php echo e($i->Pat_Pay); ?></td>

                    </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 
                    
                    <!-- Ins Results -->
             
                </tr>
            
        </tbody>
    </table>

    <?php if(($drugs)): ?>
    <h5>Alternative Drugs with no insurance Data</h5>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>class Name</th>
                <th>drug Name</th>
                <th>drug NDC</th>
                <th>form </th>
                <th>strength </th>
                <th>awp </th>
                <th>mfg </th>
                <th>rxCUI </th>
                <th>acq </th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <!-- Drug Name -->
                  
                    <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                    
                    <tr>
                     <?php if($drug->drug_name == $request->drug_name && $drug->ndc == $request->ndc ): ?>
                        
                        <?php else: ?>
                    <td><?php echo e($drug->drug_class); ?></td>
                    <td><?php echo e($drug->drug_name); ?></td>
                    <td><?php echo e($drug->ndc); ?></td>
                    <td><?php echo e($drug->form); ?></td>
                    <td><?php echo e($drug->strength); ?></td>
                    <td><?php echo e($drug->awp); ?></td>
                    <td><?php echo e($drug->mfg); ?></td>
                    <td><?php echo e($drug->rxCUI); ?></td>
                    <td><?php echo e($drug->acq); ?></td>


                    </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 
                    
                 
                </tr>
            
        </tbody>
    </table>
    <?php endif; ?>
</div>




<!--- newwwwwwwwwwwwww    testing        -->



</body>
</html>
<?php /**PATH C:\PharmacyTool\resources\views/drugResult.blade.php ENDPATH**/ ?>