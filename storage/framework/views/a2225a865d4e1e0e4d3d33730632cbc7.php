<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>


    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Drugs table</h6>
             
              </div>
              <div>
                <a href="<?php echo e(route('dashboard.drugs.create')); ?>" class="text-secondary font-weight-bold text-xs" >
               <h5> ADD Drug</h5> 
                </a>
              </div>
              <form method="GET" action="<?php echo e(route('dashboard.drugs.index')); ?>" class="mb-3">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="Search by drug name">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Drug Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">class</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">form</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">strength</th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class="text-secondary opacity-7">actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($drug->drug_name); ?></h6>
                            <p class="text-xs text-secondary mb-0">ndc: <?php echo e($drug->ndc); ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo e($drug->drug_class); ?></p>
                        <p class="text-xs text-secondary mb-0">mfg: <?php echo e($drug->mfg); ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?php echo e($drug->form); ?></p>
                        <p class="text-xs text-secondary mb-0">acq: <?php echo e($drug->acq); ?></p>

                       
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo e($drug->strength); ?></p>
                        <p class="text-xs text-secondary mb-0">RXCUI : <?php echo e($drug->rxCUI); ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                       
                      </td>
                      <td class="align-middle">
                        <a href="<?php echo e(route('dashboard.drugs.edit',$drug->id)); ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          <p style="color: blue"> Edit</p>
                          
                        </a>
                        <form action="<?php echo e(route('dashboard.drugs.destroy', $drug->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this drug?');">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?> <!-- Spoof DELETE method -->
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                  </tbody>
                </table>
                <div class="mt-4">
                  <?php echo e($drugs->links()); ?>

              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <?php $__env->stopSection(); ?>
   
<?php echo $__env->make('dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HD\Desktop\PharmacyTool\resources\views/dashboard/drugstable.blade.php ENDPATH**/ ?>