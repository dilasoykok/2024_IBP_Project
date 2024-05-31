<?php $__env->startSection('title','Kullanıcı'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-12  mb-4 mb-xl-0">
            <h3 class="font-weight-bold"><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?> bilgileri (<?php echo e($data->role); ?>)</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.users')); ?>"
                                                      class="text-decoration-none">Kullanıcılar</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </div>
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-4">
                        <div class="gallery-wrap">
                            <div class="img-big-wrap img-thumbnail d-block my-auto">
                                <img class="img1 img-thumbnail d-block" src="<?php echo e(Storage::url($data->profile_photo_path)); ?>" alt="">
                            </div>
                        </div>
                    </aside>
                    <main class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <td><?php echo e($data->id); ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo e($data->name); ?></td>
                                </tr>
                                <tr>
                                    <th>E-posta</th>
                                    <td><?php echo e($data->email); ?></td>
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
                        </div>
                    </main>
                </div>
            </div>
        </section>
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/admin/users/show.blade.php ENDPATH**/ ?>