<?php $__env->startSection('userdashboard'); ?>

<div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
    <div class="media media-card align-items-center">
        <div class="media-img media--img media-img-md rounded-full">
            <img class="rounded-full" src="<?php echo e((!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')); ?>" alt="Student thumbnail image">
        </div>
        <div class="media-body">
            <h2 class="section__title fs-30">Hello, <?php echo e($profileData->name); ?></h2>

        </div><!-- end media-body -->
    </div><!-- end media -->

</div><!-- end breadcrumb-content -->


<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
    <div class="setting-body">
        <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>


         <form method="post" action="<?php echo e(route('user.profile.update')); ?>" enctype="multipart/form-data" class="row pt-40px">
        <?php echo csrf_field(); ?>

        <div class="media media-card align-items-center">
            <div class="media-img media-img-lg mr-4 bg-gray">
                <img class="mr-3" src="<?php echo e((!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')); ?>" alt="avatar image">
            </div>
            <div class="media-body">
                <div class="file-upload-wrap file-upload-wrap-2">
                    <input type="file" name="photo" class="multi file-upload-input with-preview" multiple>
                    <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                </div><!-- file-upload-wrap -->
                <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>

            </div>
        </div><!-- end media -->

            <div class="input-box col-lg-6">
                <label class="label-text"> Name</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="name" value="<?php echo e($profileData->name); ?>">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-6">
                <label class="label-text">User Name</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="username" value="<?php echo e($profileData->username); ?>">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-6">
                <label class="label-text">Email</label>
                <div class="form-group">
                    <input class="form-control form--control" type="email" name="email" value="<?php echo e($profileData->email); ?>">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->


            <div class="input-box col-lg-6">
                <label class="label-text">Phone</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="phone" value="<?php echo e($profileData->phone); ?>">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->

            <div class="input-box col-lg-6">
                <label class="label-text">Address</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="address" value="<?php echo e($profileData->address); ?>">
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

<?php echo $__env->make('frontend.dashboard.user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learning management system\Studyli-lms\resources\views/frontend/dashboard/edit_profile.blade.php ENDPATH**/ ?>