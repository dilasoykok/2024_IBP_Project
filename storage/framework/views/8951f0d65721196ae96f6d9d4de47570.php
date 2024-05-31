<?php $__env->startSection('title','Create Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2"><?php echo e($data->title); ?> duyuru detayı</h2>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>" class="text-decoration-none">Anasayfa</a></li>
                <li class="breadcrumb-item active">Service</li>
            </ol>
        </div>
        <!-- Main content -->
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>
            </div>
            <div class="card-body">
                <section class="py-3">
                    <div class="container">
                        <div class="row">
                            <aside class="col-lg-4">
                                <div class="gallery-wrap">
                                    <div class="img-big-wrap img-thumbnail d-block my-auto">
                                        <a href="<?php echo e(Storage::url($data->image)); ?>" data-type="image"
                                           data-fslightbox="mygallery" target="_blank">
                                            <img class="img1 img-thumbnail d-block" src="<?php echo e(Storage::url($data->image)); ?>"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </aside>
                            <main class="col-lg-8">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <td><?php echo e($data->id); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td><?php echo e($data->title); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keyword</th>
                                        <td><?php echo e($data->keywords); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td><?php echo e($data->description); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Created Date</th>
                                        <td><?php echo e($data->created_at); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Updated Date</th>
                                        <td><?php echo e($data->updated_at); ?></td>
                                    </tr>
                                </table>
                            </main>
                        </div>
                    </div>
                </section>
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





<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/admin/notice/show.blade.php ENDPATH**/ ?>