<?php $__env->startSection('title','Service List'); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Service List</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </div>
        <div class="container-fluid p-3">
            <h2 class="text-center display-4">Search</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="<?php echo e(route('user.searchServices')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" name="query">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row w-100" style="justify-content: center; ">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 p-3">
                    <div class="card" style="width: 280px;">
                        <img class="card-img-top" src="<?php echo e(Storage::url($rs->image)); ?>" alt="Card image cap" style="width: 280px; height: 200px">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($rs->title); ?></h4>
                            <p class="card-description">Category:<?php echo e($rs->category); ?></p>
                            <p class="card-text"><?php echo e(substr($rs->description, 0, 25)); ?></p>
                            <a href="<?php echo e(route('user.showService',['id'=>$rs->id])); ?>" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.userbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/user/services/services.blade.php ENDPATH**/ ?>