<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('head', 'Add Script'); ?>

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
                
                <form role="form" method="POST" action="<?php echo e(route('dashboard.scripts.store')); ?>" class="text-start">
                  <?php echo csrf_field(); ?>
              
                  <!-- Name -->
                  <div class="input-group input-group-outline my-3">
                      <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Name" class="form-control">
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
                  </div>
              
                  <!-- NDC -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="ndc" value="<?php echo e(old('ndc')); ?>" placeholder="Enter NDC" class="form-control">
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
                  </div>
              
                  <!-- Class -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="class" value="<?php echo e(old('class')); ?>" placeholder="Enter Class" class="form-control">
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
                  </div>
                    <!-- Other fields -->
                
                    <!-- Insurance Dropdown -->
                    insurances
                      <!-- Insurance Dropdown -->
                      <div class="input-group input-group-outline my-3">
                          <select name="insurance" class="form-control">
                              <option value="">Select Insurance</option>
                              <?php $__currentLoopData = $insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($insurance['code']); ?>" <?php echo e(old('insurance') == $insurance['code'] ? 'selected' : ''); ?>>
                                      <?php echo e($insurance['name']); ?>

                                  </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['insurance'];
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
                  
          
                
                  <!-- Script -->
                  <div class="input-group input-group-outline mb-3">
                      <input type="text" name="script" value="<?php echo e(old('script')); ?>" placeholder="Enter Script" class="form-control">
                      <?php $__errorArgs = ['script'];
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
              
                  <!-- Date -->
                  <div class="input-group input-group-outline mb-3">
                    <input type="text" name="date" value="<?php echo e(old('date')); ?>" placeholder="MM/DD/YYYY" class="form-control">

                      <?php $__errorArgs = ['date'];
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
                      <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">ADD</button>
                  </div>
              
                 
              </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.crud', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HD\Desktop\PharmacyTool\resources\views/dashboard/addscript.blade.php ENDPATH**/ ?>