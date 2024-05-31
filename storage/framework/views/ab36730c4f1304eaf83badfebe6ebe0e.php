<?php $__env->startSection('title','Edit Category : '.$data->title); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
            <h3 class="font-weight-bold">Edit Category : <?php echo e($data->title); ?></h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.service')); ?>" class="text-decoration-none">Kullanıcılar</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
        <div class="card-body">
            <form role="form" action="<?php echo e(route('admin.service.update',['id'=>$data->id])); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="title" value="<?php echo e($data->title); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="category" value="<?php echo e($data->category); ?>" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="keyword" value="<?php echo e($data->keyword); ?>" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="description" value="<?php echo e($data->description); ?>" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="price" value="<?php echo e($data->price); ?>" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="image">
                            <?php if($data->image): ?>
                                <img class="img-thumbnail" src="<?php echo e(Storage::url($data->image)); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/admin/service/edit.blade.php ENDPATH**/ ?>