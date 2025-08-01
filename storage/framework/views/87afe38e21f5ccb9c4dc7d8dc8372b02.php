
<?php $__env->startSection('userdashboard'); ?>

 


<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
    <div class="setting-body">
        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password </h3>
       
       
        <form method="post" action="<?php echo e(route('user.password.update')); ?>" enctype="multipart/form-data" class="row pt-40px">
        <?php echo csrf_field(); ?>
        
        
            <div class="input-box col-lg-12">
                <label class="label-text"> Old Password</label>
                <div class="form-group">
                    <input class="form-control form--control <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="old_password" id="old_password" >
                    <span class="la la-user input-icon"></span>

                    <?php $__errorArgs = ['old_password'];
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
            </div><!-- end input-box -->


            <div class="input-box col-lg-12">
                <label class="label-text"> New Password</label>
                <div class="form-group">
                    <input class="form-control form--control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="new_password" id="new_password" >
                    <span class="la la-user input-icon"></span>
                    
                    <?php $__errorArgs = ['new_password'];
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
            </div><!-- end input-box -->

            <div class="input-box col-lg-12">
                <label class="label-text"> Confirm New Password</label>
                <div class="form-group">
                    <input class="form-control form--control" type="password" name="new_password_confirmation" id="new_password_confirmation" >
                    <span class="la la-user input-icon"></span> 
                </div>
            </div><!-- end input-box -->
             

  
            <div class="input-box col-lg-12 py-2">
                <button class="btn theme-btn">Save Changes</button>
            </div><!-- end input-box -->
        </form>
    </div><!-- end setting-body -->
</div><!-- end tab-pane -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.dashboard.user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learning management system\Studyli-lms\resources\views/frontend/dashboard/change_password.blade.php ENDPATH**/ ?>