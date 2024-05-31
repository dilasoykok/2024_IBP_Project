<?php $__env->startSection('title','message List'); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-12 col-xl-12 mb-4 mb-xl-0 row">
            <h3 class="font-weight-bold"><?php echo e($data->sender->name); ?>'s Message</h3>
        </div>
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>
                </div>
                <div class="card-body">
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <main class="col-lg-8">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <td><?php echo e($data->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Sender</th>
                                            <td><?php echo e($data->sender->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Receiver</th>
                                            <td>
                                                <?php if($data->receiver && $data->receiver->name): ?>
                                                    <?php echo e($data->receiver->name); ?>

                                                <?php else: ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sended Message</th>
                                            <td><?php echo e($data->giden_message); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Received Message</th>
                                            <td><?php echo e($data->gelen_message); ?></td>
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
                            <form role="form" action="<?php echo e(route('admin.message.update',['id'=>$data->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3">
                                    <label for="receivedMessage" class="col-sm-2 col-form-label">Received Message</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="receivedMessage" value="<?php echo e($data->receivedMessage); ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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

        </section>
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/admin/message/show.blade.php ENDPATH**/ ?>