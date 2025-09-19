

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/css/default.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card bg-white border-0 b-shadow-4">
                        <div class="card-body">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-3 f-w-500">#</div>
                                    <div class="col-md-5 f-w-500"><?php echo app('translator')->get('app.fields'); ?></div>
                                    <div class="col-md-4 f-w-500"><?php echo app('translator')->get('app.status'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve(['method' => 'PUT'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'editSettings']); ?>
                                    <div id="sortable">
                                        <?php
                                            $fields = [
                                                'full_name' => 'Full Name',
                                                'email' => 'Email Address',
                                                'phone' => 'Phone Number',
                                                'dob' => 'Date of Birth',
                                                'passport_number' => 'Passport Number',
                                                'country_of_origin' => 'Country of Origin',
                                                'destination_country' => 'Destination Country',
                                                'education' => 'Education Level',
                                                'work_experience' => 'Work Experience',
                                                'language_proficiency' => 'Language Proficiency',
                                                'visa_category' => 'Visa Category',
                                                'notes' => 'Additional Notes'
                                            ];
                                        ?>
                                        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row py-3 pt-4 border-bottom">
                                                <div class="col-md-3">
                                                    <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                                    <input type="hidden" name="sort_order[]" value="<?php echo e($key); ?>">
                                                </div>
                                                <div class="col-md-5"><?php echo e($label); ?></div>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input change-setting"
                                                               data-setting-id="<?php echo e($key); ?>" checked
                                                               id="<?php echo e($key); ?>">
                                                        <label class="custom-control-label f-14 cursor-pointer" for="<?php echo e($key); ?>"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $attributes = $__attributesOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__attributesOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18ad2e0d264f9740dc73fff715357c28)): ?>
<?php $component = $__componentOriginal18ad2e0d264f9740dc73fff715357c28; ?>
<?php unset($__componentOriginal18ad2e0d264f9740dc73fff715357c28); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-4 mb-4">
                    <?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $attributes; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <p class="f-w-500"><?php echo app('translator')->get('modules.lead.iframeSnippet'); ?></p>
                        <code>&lt;iframe src="<?php echo e(route('front.lead_form',[company()->hash])); ?>" frameborder="0" scrolling="yes" style="display:block; width:100%; height:60vh;">&lt;/iframe&gt;</code>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $attributes = $__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $attributes; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <p class="f-w-500">Share Direct link</p>
                        <p class="f-12"><a href="<?php echo e(route('front.lead_form', [company()->hash]).'?styled=1'); ?>" target="_blank"><?php echo e(route('front.lead_form', [company()->hash]).'?styled=1'); ?></a></p>
                        <p class="f-12"><a href="<?php echo e(route('front.lead_form', [company()->hash]).'?styled=1&with_logo=1'); ?>" target="_blank"><?php echo e(route('front.lead_form', [company()->hash]).'?styled=1&with_logo=1'); ?></a></p>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $attributes = $__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <?php if (isset($component)) { $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9 = $attributes; } ?>
<?php $component = App\View\Components\Cards\Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <h4><?php echo app('translator')->get('app.preview'); ?></h4>
                <iframe src="<?php echo e(route('front.lead_form', [company()->hash])); ?>" id="previewIframe" width="100%" onload="resizeIframe(this)" frameborder="0"></iframe>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $attributes = $__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__attributesOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9)): ?>
<?php $component = $__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9; ?>
<?php unset($__componentOriginalbc9540fa671f26a0f8028a5a8d8f93e9); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('vendor/jquery/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery/highlight.min.js')); ?>"></script>
<script>
    $(function () {
        $("#sortable").sortable({
            update: function () {
                var sortedValues = [];
                $('input[name="sort_order[]"]').each(function (index, value) {
                    sortedValues[index] = $(this).val();
                });
                $.easyAjax({
                    url: "<?php echo e(route('lead-form.sortFields')); ?>",
                    type: "POST",
                    blockUI: true,
                    data: {
                        'sortedValues': sortedValues,
                        '_token': '<?php echo e(csrf_token()); ?>'
                    },
                    success: function () {
                        var iframe = document.getElementById('previewIframe');
                        iframe.src = iframe.src;
                    }
                })
            }
        });
    });

    $('.change-setting').change(function () {
        var id = $(this).data('setting-id');
        var sendEmail = $(this).is(':checked') ? 'active' : 'inactive';
        var url = '<?php echo e(route('lead-form.update', ':id')); ?>'.replace(':id', id);
        $.easyAjax({
            url: url,
            type: "POST",
            blockUI: true,
            data: {
                'id': id,
                'status': sendEmail,
                '_method': 'PUT',
                '_token': '<?php echo e(csrf_token()); ?>'
            },
            success: function () {
                var iframe = document.getElementById('previewIframe');
                iframe.src = iframe.src;
            }
        })
    });

    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 50 + 'px';
    }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/leads/lead-form/index.blade.php ENDPATH**/ ?>