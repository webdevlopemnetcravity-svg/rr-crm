<div <?php echo e($attributes->merge(['class' => 'input-group'])); ?>>
    <?php if($prepend): ?>
        <div class="input-group-prepend">
            <?php echo $prepend; ?>

        </div>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if($preappend): ?>
        <div class="input-group-append">
            <?php echo $preappend; ?>

        </div>
    <?php endif; ?>

    <?php if($append): ?>
        <div class="input-group-append">
            <?php echo $append; ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/components/forms/input-group.blade.php ENDPATH**/ ?>