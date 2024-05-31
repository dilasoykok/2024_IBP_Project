<?php $__env->startSection('title','Create Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Duyurular</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </div>

        <!-- Main content -->


        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Duyurular listesi</h3>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2 mt-3 mx-3 d-md-flex justify-content-md-end">
                    <a href="<?php echo e(route('admin.notice.create')); ?>" class="btn btn-primary me-md-2 mb-1"><i
                            class="bi bi-plus-lg"></i> Add duyuru</a>
                </div>

                <!-- /.card-header -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="m-2">
                        <tr class="table-primary">
                            <th style="width: 25px;">id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th style="width: 50px;">Edit</th>
                            <th style="width: 50px;">Delete</th>
                            <th style="width: 50px;">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($rs->id); ?></td>
                                <td><?php echo e($rs->title); ?></td>
                                <td><?php echo e(substr($rs->description, 0, 20)); ?></td>
                                <td style="width: 65px">
                                    <?php if($rs->image): ?>
                                        <img src="<?php echo e(Storage::url($rs->image)); ?>" class="img1 rounded m-0"
                                             style="width: 70px; height: 50px">
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?php echo e(route('admin.notice.edit',['id'=>$rs->id])); ?>"
                                       class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i
                                            class="bi bi-pencil-fill"></i></a></td>
                                <td><a href="<?php echo e(route('admin.notice.destroy',['id'=>$rs->id])); ?>"
                                       onclick="return confirm('Deleting !! Are you sure ?')"
                                       class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i
                                            class="bi bi-trash3-fill"></i></a></td>
                                <td><a href="<?php echo e(route('admin.notice.show',['id'=>$rs->id])); ?>"
                                       class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i
                                            class="bi bi-eye-fill"></i></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        <!-- /.content -->
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/admin/notice/index.blade.php ENDPATH**/ ?>