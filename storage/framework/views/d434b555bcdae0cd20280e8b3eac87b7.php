<div <?php echo e($attributes->merge(['class' => 'form-check-inline custom-control custom-radio mt-2 mr-3'])); ?>>
    <input type="radio" value="<?php echo e($fieldValue); ?>" class="custom-control-input" id="<?php echo e($fieldId); ?>"
           name="<?php echo e($fieldName); ?>"
           <?php if($checked): echo 'checked'; endif; ?>
    />
    <label class="custom-control-label pt-1 cursor-pointer" for="<?php echo e($fieldId); ?>"><?php echo e($fieldLabel); ?></label>
</div>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/components/forms/radio.blade.php ENDPATH**/ ?>