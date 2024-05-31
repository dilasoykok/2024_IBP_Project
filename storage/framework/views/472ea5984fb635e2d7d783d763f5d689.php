<?php $__env->startSection('title','Create Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>
                </div>
                <div class="card-body">
                    <form role="form" action="<?php echo e(route('admin.notice.update',['id'=>$data->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="title" value="<?php echo e($data->title); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="keywords" value="<?php echo e($data->keywords); ?>" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="description" value="<?php echo e($data->description); ?>">
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
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/admin/notice/edit.blade.php ENDPATH**/ ?>