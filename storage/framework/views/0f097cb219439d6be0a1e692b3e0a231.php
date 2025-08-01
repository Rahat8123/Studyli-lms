
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3"> 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                </ol>
            </nav>
        </div>
         
    </div>
    <!--end breadcrumb-->
 
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit Category</h5>
            
            <form id="myForm" action="<?php echo e(route('update.category')); ?>" method="post" class="row g-3" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="id" value="<?php echo e($category->id); ?>">

                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="input1" value="<?php echo e($category->category_name); ?>"  >
                </div>

                <div class="col-md-6">
                </div>

                <div class="form-group col-md-6">
                    <label for="input2" class="form-label">Category Image </label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>

                <div class="col-md-6"> 
                    <img id="showImage" src="<?php echo e(asset($category->image )); ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="80"> 

                </div>


             
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
          <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                      
                    </div>
                </div>
            </form>
        </div>
    </div>


   
   
</div>
 

 
<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\learning management system\Studyli-lms\resources\views/admin/backend/category/edit_category.blade.php ENDPATH**/ ?>