<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo Purifier::clean(session('msg')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/eli04190/public_html/@core/resources/views/components/msg/success.blade.php ENDPATH**/ ?>