<?php $__env->startSection('title','Service List'); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper justify-center">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold my-2">Mesajlar</h2>
        </div>

        <div class="" style="background-color: lightblue;  width: 550px;  height: 700px; overflow: auto;">
            <div class="row m-2" style="justify-content: center">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="justify-content-center" style="justify-content: flex-start; background: cornsilk">
                        <div>===========<?php echo e($rs->created_at); ?>==========</div>
                        <div class="justify-content-center">
                            <h4><?php echo e($rs->sender->name); ?> : (<?php echo e($rs->sender->role); ?>)</h4>
                            <p><?php echo e($rs->giden_message); ?></p>
                        </div>
                    </div>
                    <div class="justify-content-center" style="justify-content: flex-start; background: cornsilk">
                        <div class="justify-content-center">
                            <?php if($rs->receiver && $rs->receiver->name): ?>
                                <h4><?php echo e($rs->receiver->name); ?> : (<?php echo e($rs->receiver->role); ?>)</h4>
                                <p><?php echo e($rs->gelen_message); ?></p>
                            <?php else: ?>
                                Cevap bekleniyor...
                            <?php endif; ?>
                        </div>
                    </div>
                    <div>========================================</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
        <div style="background-color: lightblue;  width: 550px;">
            <form action="<?php echo e(route('user.messageStore')); ?>">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg my-sm-1" placeholder="Enter your message"
                           name="sendedMessage">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success pt-4 my-sm-0" type="submit">Gönder
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.userbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/user/messages/message.blade.php ENDPATH**/ ?>