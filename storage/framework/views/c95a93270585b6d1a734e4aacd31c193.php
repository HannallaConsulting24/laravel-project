<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('head', 'Edit Drug'); ?>

<?php $__env->startSection('content'); ?>

  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Drug</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <form role="form" method="POST" action="<?php echo e(route('dashboard.drugs.update', $data->id)); ?>" class="text-start">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
              
                  <!-- Drug Name -->
                  <div class="input-group input-group-outline my-3">
                      <input type="text" name="name" value="<?php echo e(old('name', $data->drug_name ?? '')); ?>" placeholder="Drug Name" class="form-control">
                   
                  </div>
                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!-- NDC -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="ndc" value="<?php echo e(old('ndc', $data->ndc ?? '')); ?>" placeholder="NDC" class="form-control">
                     
                  </div>
                  <?php $__errorArgs = ['ndc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!-- Drug Class -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="class" value="<?php echo e(old('class', $data->drug_class ?? '')); ?>" placeholder="Drug Class" class="form-control">
                     
                  </div>
                  <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!-- Manufacturer (MFG) -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="mfg" value="<?php echo e(old('mfg', $data->mfg ?? '')); ?>" placeholder="Manufacturer (MFG)" class="form-control">
                      <?php $__errorArgs = ['mfg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              
                  <!-- Form -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="form" value="<?php echo e(old('form', $data->form ?? '')); ?>" placeholder="Form" class="form-control">
                      <?php $__errorArgs = ['form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              
                  <!-- Strength -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="strength" value="<?php echo e(old('strength', $data->strength ?? '')); ?>" placeholder="Strength" class="form-control">
                      <?php $__errorArgs = ['strength'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              
                  <!-- Submit Button -->
                  <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update</button>
                  </div>
              </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.crud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HD\Desktop\PharmacyTool\resources\views/dashboard/editdrug.blade.php ENDPATH**/ ?>