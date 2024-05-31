<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <?php echo e($message); ?>

    </div>
<?php endif; ?>
<?php if($message = Session::get('info')): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <?php echo e($message); ?>

    </div>
<?php endif; ?>
<?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <?php echo e($message); ?>

    </div>
<?php endif; ?>
<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <?php echo e($message); ?>

    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        Girdiğiniz bilgiler yanlış!
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/message_info.blade.php ENDPATH**/ ?>