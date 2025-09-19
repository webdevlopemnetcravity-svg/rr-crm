<?php
    $addProductPermission = user()->permission('add_product');
?>

<link rel="stylesheet" href="<?php echo e(asset('vendor/css/dropzone.min.css')); ?>">
<!-- for sortable content -->
<link rel="stylesheet" href="<?php echo e(asset('vendor/css/jquery-ui.css')); ?>">

<?php if(!in_array('clients', user_modules())): ?>
    <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['class' => 'mb-3','type' => 'danger','icon' => 'exclamation-circle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-3','type' => 'danger','icon' => 'exclamation-circle']); ?><span><?php echo app('translator')->get('messages.enableClientModule'); ?></span>
        <?php if (isset($component)) { $__componentOriginal29acd9b76240152ae380821b082bd629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29acd9b76240152ae380821b082bd629 = $attributes; } ?>
<?php $component = App\View\Components\Forms\LinkSecondary::resolve(['icon' => 'arrow-left','link' => route('invoices.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.link-secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\LinkSecondary::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo app('translator')->get('app.back'); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29acd9b76240152ae380821b082bd629)): ?>
<?php $attributes = $__attributesOriginal29acd9b76240152ae380821b082bd629; ?>
<?php unset($__attributesOriginal29acd9b76240152ae380821b082bd629); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29acd9b76240152ae380821b082bd629)): ?>
<?php $component = $__componentOriginal29acd9b76240152ae380821b082bd629; ?>
<?php unset($__componentOriginal29acd9b76240152ae380821b082bd629); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php else: ?>

    <!-- CREATE INVOICE START -->
<div class="bg-white rounded b-shadow-4 create-inv">
    <!-- HEADING START -->
    <div class="px-lg-4 px-md-4 px-3 py-3">
        <h4 class="mb-0 f-21 font-weight-normal "><?php echo app('translator')->get('app.invoiceDetails'); ?></h4>
    </div>
    <!-- HEADING END -->
    <hr class="m-0 border-top-grey">
    <!-- FORM START -->
    <?php if (isset($component)) { $__componentOriginal18ad2e0d264f9740dc73fff715357c28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18ad2e0d264f9740dc73fff715357c28 = $attributes; } ?>
<?php $component = App\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'c-inv-form','id' => 'saveInvoiceForm']); ?>
        <?php echo method_field('PUT'); ?>
        <!-- INVOICE NUMBER, DATE, DUE DATE, FREQUENCY START -->
                <input type="hidden" name="do_it_later" id="doItLater" value="direct">
        <div class="row px-lg-4 px-md-4 px-3 py-3">
            <!-- INVOICE NUMBER START -->
            <div class="col-md-2">
                <div class="form-group mb-lg-0 mb-md-0 mb-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'invoice_number','fieldLabel' => __('modules.invoices.invoiceNumber'),'fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-12']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7 = $attributes; } ?>
<?php $component = App\View\Components\Forms\InputGroup::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\InputGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <input type="text" name="invoice_number" id="invoice_number" class="form-control height-35 f-15 readonly-background" readonly
                               value="<?php echo e($invoice->invoice_number); ?>">
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7)): ?>
<?php $attributes = $__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7; ?>
<?php unset($__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7)): ?>
<?php $component = $__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7; ?>
<?php unset($__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7); ?>
<?php endif; ?>
                </div>
            </div>
            <!-- INVOICE NUMBER END -->
            <!-- INVOICE DATE START -->
            <div class="col-md-2">
                <div class="form-group mb-lg-0 mb-md-0 mb-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'due_date','fieldLabel' => __('modules.invoices.invoiceDate')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <div class="input-group">
                        <input type="text" id="invoice_date" name="issue_date"
                               class="px-6 position-relative text-dark font-weight-normal form-control height-35 rounded p-0 text-left f-15"
                               placeholder="<?php echo app('translator')->get('placeholders.date'); ?>"
                               value="<?php echo e($invoice->issue_date->translatedFormat(company()->date_format)); ?>">
                    </div>
                </div>
            </div>
            <!-- INVOICE DATE END -->
            <!-- DUE DATE START -->
            <div class="col-md-2">
                <div class="form-group mb-lg-0 mb-md-0 mb-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'due_date','fieldLabel' => __('app.dueDate')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <div class="input-group ">
                        <input type="text" id="due_date" name="due_date"
                               class="px-6 position-relative text-dark font-weight-normal form-control height-35 rounded p-0 text-left f-15"
                               placeholder="<?php echo app('translator')->get('placeholders.date'); ?>"
                               value="<?php echo e($invoice->due_date->translatedFormat(company()->date_format)); ?>">
                    </div>
                </div>
            </div>
            <!-- DUE DATE END -->
            <!-- FREQUENCY START -->
            <div class="col-md-3">
                <div class="form-group c-inv-select mb-lg-0 mb-md-0 mb-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'currency_id','fieldLabel' => __('modules.invoices.currency')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>

                    <div class="select-others height-35 rounded">
                        <select class="form-control select-picker" name="currency_id" id="currency_id">
                            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($invoice->currency_id == $currency->id): ?> selected <?php endif; ?> value="<?php echo e($currency->id); ?>"
                                        data-currency-code="<?php echo e($currency->currency_code); ?>">
                                    <?php echo e($currency->currency_code . ' (' . $currency->currency_symbol . ')'); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- FREQUENCY END -->
            <div class="col-md-3">
                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'exchange_rate','fieldLabel' => __('modules.currencySettings.exchangeRate'),'fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                <input type="number" id="exchange_rate" name="exchange_rate"
                       class="px-6 position-relative text-dark font-weight-normal form-control height-35 rounded p-0 text-left f-15" value="<?php echo e($invoice->exchange_rate); ?>" <?php if($companyCurrency->id == $invoice->currency_id): ?> readonly <?php endif; ?>>
                <small id="currency_exchange" class="form-text text-muted"><?php if(company()->currency->currency_code != $invoice->currency->currency_code): ?> ( <?php echo e($invoice->currency->currency_code); ?> <?php echo app('translator')->get('app.to'); ?> <?php echo e(company()->currency->currency_code); ?> ) <?php endif; ?> </small>
            </div>
        </div>
        <!-- INVOICE NUMBER, DATE, DUE DATE, FREQUENCY END -->

        <hr class="m-0 border-top-grey">

        <!-- CLIENT, PROJECT, GST, BILLING, SHIPPING ADDRESS START -->
        <div class="row px-lg-4 px-md-4 px-3 pt-3">

            <!-- CLIENT START -->
            <div class="col-md-4">
                <?php if (isset($component)) { $__componentOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c = $attributes; } ?>
<?php $component = App\View\Components\ClientSelectionDropdown::resolve(['clients' => $clients,'selected' => $invoice->client_id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('client-selection-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ClientSelectionDropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c)): ?>
<?php $attributes = $__attributesOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c; ?>
<?php unset($__attributesOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c)): ?>
<?php $component = $__componentOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c; ?>
<?php unset($__componentOriginalcfa76c1cf34159bb19d1a4c8f5da7d2c); ?>
<?php endif; ?>
            </div>
            <!-- CLIENT END -->
            <!-- PROJECT START -->
            <div class="col-md-4">
                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'project_id','fieldLabel' => __('app.project')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                <div class="form-group c-inv-select mb-4">
                    <div class="select-others height-35 rounded">
                        <select class="form-control select-picker" data-live-search="true" data-size="8"
                                name="project_id" id="project_id">
                            <option value="">--</option>
                            <?php if($invoice?->client?->projects): ?>
                                <?php $__currentLoopData = $invoice->client->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($invoice->project_id == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->project_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- PROJECT END -->

            <div class="col-md-4">
                <div class="form-group c-inv-select mb-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'calculate_tax','fieldLabel' => __('modules.invoices.calculateTax')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <div class="select-others height-35 rounded">
                        <select class="form-control select-picker" data-live-search="true" data-size="8"
                                name="calculate_tax" id="calculate_tax">
                            <option value="after_discount"><?php echo app('translator')->get('modules.invoices.afterDiscount'); ?></option>
                            <option value="before_discount" <?php if($invoice->calculate_tax == 'before_discount'): ?> selected <?php endif; ?>><?php echo app('translator')->get('modules.invoices.beforeDiscount'); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <?php if($linkInvoicePermission == 'all'): ?>
                <div class="col-md-4">
                    <div class="form-group c-inv-select my-4">
                        <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'bank_account_id','fieldLabel' => __('app.menu.bankaccount')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                        <div class="select-others height-35 rounded">
                            <select class="form-control select-picker" data-live-search="true" data-size="8"
                                name="bank_account_id" id="bank_account_id">
                                <option value="">--</option>
                                <?php if($viewBankAccountPermission != 'none'): ?>
                                    <?php $__currentLoopData = $bankDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bankDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($bankDetail->id); ?>" <?php if($bankDetail->id == $invoice->bank_account_id): ?> selected <?php endif; ?>><?php if($bankDetail->type == 'bank'): ?>
                                                <?php echo e($bankDetail->bank_name); ?> | <?php endif; ?>
                                            <?php echo e($bankDetail->account_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-md-4">
                <div class="form-group c-inv-select my-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'invoice_payment_id','fieldLabel' => __('modules.invoices.paymentDetails')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <div class="select-others height-35 rounded">
                        <select class="form-control select-picker" data-live-search="true" data-size="8"
                            name="invoice_payment_id" id="invoice_payment_id">
                            <option value="">--</option>
                            <?php $__currentLoopData = $invoicePayments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoicePayment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($invoicePayment->id); ?>"  <?php if($invoicePayment->id == $invoice->invoice_payment_id): ?> selected <?php endif; ?>>
                                <?php echo e($invoicePayment->title); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <?php if($invoice->amountPaid() == 0 && $invoice->status == 'paid'): ?>
                <!-- STATUS START -->
                <div class="col-md-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'status','fieldLabel' => __('app.status')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <div class="form-group c-inv-select mb-4">
                        <div class="select-others height-35 rounded">
                            <select class="form-control select-picker" name="status" id="status">
                                <option <?php if($invoice->status == 'unpaid'): ?> selected <?php endif; ?> value="unpaid"><?php echo app('translator')->get('modules.invoices.unpaid'); ?>
                                </option>
                                <option <?php if($invoice->status == 'paid'): ?> selected <?php endif; ?> value="paid"><?php echo app('translator')->get('modules.invoices.paid'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- STATUS END -->
            <?php endif; ?>

        </div>

        <div class="row px-lg-4 px-md-4 px-3 py-3">
            <!-- BILLING ADDRESS START -->
            <div class="col-md-4">
                <div class="form-group c-inv-select mb-0">
                    <label class="f-14 text-dark-grey mb-12  w-100"
                           for="usr"><?php echo app('translator')->get('modules.invoices.billingAddress'); ?></label>
                    <p class="f-15" id="client_billing_address"><?php echo nl2br($invoice->client?->clientDetails?->address); ?></p>
                </div>
            </div>
            <!-- BILLING ADDRESS END -->
            <!-- SHIPPING ADDRESS START -->
            <div class="col-md-4">
                <div class="form-group c-inv-select mb-lg-0 mb-md-0 mb-4">
                    <label class="f-14 text-dark-grey mb-12  w-100"
                           for="usr"><?php echo app('translator')->get('modules.invoices.shippingAddress'); ?></label>
                    <p class="f-15" id="client_shipping_address">
                        <?php if($invoice->client?->clientDetails?->shipping_address): ?>
                            <?php echo nl2br($invoice?->client?->clientDetails?->shipping_address); ?>

                        <?php else: ?>
                            <a href="javascript:;" class="" id="show-shipping-field"><i
                                    class="f-12 mr-2 fa fa-plus"></i><?php echo app('translator')->get('app.addShippingAddress'); ?></a>
                        <?php endif; ?>
                    </p>
                    <p class="d-none" id="add-shipping-field">
                        <textarea class="form-control f-14 pt-2" rows="3" placeholder="<?php echo app('translator')->get('placeholders.address'); ?>"
                                  name="shipping_address" id="shipping_address"></textarea>
                    </p>
                </div>
            </div>
            <!-- SHIPPING ADDRESS END -->

            <div class="col-md-4">
                <div class="form-group c-inv-select mb-4">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => 'company_address_id','fieldLabel' => __('modules.invoices.generatedBy')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <div class="select-others height-35 rounded">
                        <select class="form-control select-picker" data-live-search="true" data-size="8"
                                name="company_address_id" id="company_address_id">
                            <?php $__currentLoopData = $companyAddresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(($item->id == $invoice->company_address_id) ? 'selected' : ''); ?> value="<?php echo e($item->id); ?>">
                                    <?php echo e($item->location); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        <!-- CLIENT, PROJECT, GST, BILLING, SHIPPING ADDRESS END -->

        <?php if (isset($component)) { $__componentOriginalfa1d9407bf58c9650823154ec52dea3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa1d9407bf58c9650823154ec52dea3e = $attributes; } ?>
<?php $component = App\View\Components\Forms\CustomField::resolve(['fields' => $fields,'model' => $invoice] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.custom-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\CustomField::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa1d9407bf58c9650823154ec52dea3e)): ?>
<?php $attributes = $__attributesOriginalfa1d9407bf58c9650823154ec52dea3e; ?>
<?php unset($__attributesOriginalfa1d9407bf58c9650823154ec52dea3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa1d9407bf58c9650823154ec52dea3e)): ?>
<?php $component = $__componentOriginalfa1d9407bf58c9650823154ec52dea3e; ?>
<?php unset($__componentOriginalfa1d9407bf58c9650823154ec52dea3e); ?>
<?php endif; ?>

        <hr class="m-0 border-top-grey">

        <div class="row px-lg-4 px-md-4 px-3 py-3">
            <div class="col-md-3 d-none product-category-filter">
                <div class="form-group c-inv-select mb-4">
                    <?php if (isset($component)) { $__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7 = $attributes; } ?>
<?php $component = App\View\Components\Forms\InputGroup::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\InputGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <select class="form-control select-picker" name="category_id"
                                id="product_category_id" data-live-search="true">
                            <option value="null"><?php echo e(__('app.select') . ' ' . __('app.product') . ' ' . __('app.category')); ?></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>">
                                    <?php echo e($category->category_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7)): ?>
<?php $attributes = $__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7; ?>
<?php unset($__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7)): ?>
<?php $component = $__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7; ?>
<?php unset($__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7); ?>
<?php endif; ?>
                </div>
            </div>
            <?php if(in_array('products', user_modules()) || in_array('purchase', user_modules())): ?>
                <div class="col-md-3">
                    <div class="form-group c-inv-select mb-4">
                    <?php if (isset($component)) { $__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7 = $attributes; } ?>
<?php $component = App\View\Components\Forms\InputGroup::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\InputGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <select class="form-control select-picker" data-live-search="true" data-size="8" id="add-products" title="<?php echo e(__('app.menu.selectProduct')); ?>">
                        <?php if(in_array('purchase', user_modules())): ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if((!empty($item->inventory) && count($item->inventory) > 0 && $item->inventory[0]) || ($item->type == 'service')): ?>
                                    <?php if(($item->track_inventory == 1 && $item->inventory[0]->net_quantity > 0) || ($item->type == 'service')): ?>
                                        <option data-content="<?php echo e($item->name); ?>" value="<?php echo e($item->id); ?>">
                                            <?php echo e($item->name); ?></option>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option data-content="<?php echo e($item->name); ?>" value="<?php echo e($item->id); ?>">
                                    <?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </select>
                         <?php $__env->slot('preappend', null, []); ?> 
                            <a href="javascript:;"
                                class="btn btn-outline-secondary border-grey toggle-product-category"
                                data-toggle="tooltip" data-original-title="<?php echo e(__('modules.productCategory.filterByCategory')); ?>"><i class="fa fa-filter"></i></a>
                         <?php $__env->endSlot(); ?>
                        <?php if($addProductPermission == 'all' || $addProductPermission == 'added'): ?>
                            <?php if(module_enabled('Purchase')): ?>
                                 <?php $__env->slot('append', null, []); ?> 
                                    <a href="<?php echo e(route('purchase-products.create')); ?>" data-redirect-url="no"
                                        class="btn btn-outline-secondary border-grey openRightModal"
                                        data-toggle="tooltip"
                                        data-original-title="<?php echo e(__('app.add') . ' ' . __('modules.dashboard.newproduct')); ?>"><?php echo app('translator')->get('app.add'); ?></a>
                                 <?php $__env->endSlot(); ?>
                            <?php else: ?>
                                 <?php $__env->slot('append', null, []); ?> 
                                    <a href="<?php echo e(route('products.create')); ?>" data-redirect-url="no"
                                        class="btn btn-outline-secondary border-grey openRightModal"
                                        data-toggle="tooltip"
                                        data-original-title="<?php echo e(__('app.add') . ' ' . __('modules.dashboard.newproduct')); ?>"><?php echo app('translator')->get('app.add'); ?></a>
                                 <?php $__env->endSlot(); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7)): ?>
<?php $attributes = $__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7; ?>
<?php unset($__attributesOriginalcbf9105fd4879d5d6ef9e1f6fe271af7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7)): ?>
<?php $component = $__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7; ?>
<?php unset($__componentOriginalcbf9105fd4879d5d6ef9e1f6fe271af7); ?>
<?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>

        <div id="sortable">
            <?php $__currentLoopData = $invoice->items->sortBy('field_order'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- DESKTOP DESCRIPTION TABLE START -->
                <div class="d-flex px-4 py-3 c-inv-desc item-row">
                    <div class="d-flex align-items-center">
                        <span class="ui-icon ui-icon-arrowthick-2-n-s mr-2"></span>
                        <input type="hidden" name="sort_order[]"
                               value="<?php echo e($item->id); ?>">
                    </div>

                    <div class="c-inv-desc-table w-100 d-lg-flex d-md-flex d-block">
                        <table width="100%">
                            <tbody>
                            <tr class="text-dark-grey font-weight-bold f-14">
                                <td width="<?php echo e($invoiceSetting->hsn_sac_code_show ? '40%' : '50%'); ?>"
                                    class="border-0 inv-desc-mbl btlr"><?php echo app('translator')->get('app.description'); ?>
                                    <input type="hidden" name="item_ids[]" value="<?php echo e($item->id); ?>">
                                </td>
                                <?php if($invoiceSetting->hsn_sac_code_show): ?>
                                    <td width="10%" class="border-0" align="right"><?php echo app('translator')->get("app.hsnSac"); ?></td>
                                <?php endif; ?>
                                <td width="10%" class="border-0" align="right"><?php echo app('translator')->get('modules.invoices.qty'); ?></td>
                                <td width="10%" class="border-0" align="right">
                                    <?php echo app('translator')->get("modules.invoices.unitPrice"); ?></td>
                                <td width="13%" class="border-0" align="right"><?php echo app('translator')->get('modules.invoices.tax'); ?>
                                </td>
                                <td width="17%" class="border-0 bblr-mbl" align="right">
                                    <?php echo app('translator')->get('modules.invoices.amount'); ?></td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0 btrr-mbl btlr">
                                    <input type="text" class="form-control f-14 border-0 w-100 item_name"
                                           name="item_name[]" placeholder="<?php echo app('translator')->get('modules.expenses.itemName'); ?>"
                                           value="<?php echo e($item->item_name); ?>">
                                </td>
                                <td class="border-bottom-0 d-block d-lg-none d-md-none">
                                        <textarea class="f-14 border-0 w-100 mobile-description form-control"
                                                  placeholder="<?php echo app('translator')->get('placeholders.invoices.description'); ?>"
                                                  name="item_summary[]"><?php echo e($item->item_summary); ?></textarea>
                                </td>
                                <?php if($invoiceSetting->hsn_sac_code_show): ?>
                                    <td class="border-bottom-0">
                                        <input type="text" class="f-14 border-0 w-100 text-right hsn_sac_code form-control"
                                               value="<?php echo e($item->hsn_sac_code); ?>" name="hsn_sac_code[]">
                                    </td>
                                <?php endif; ?>
                                <td class="border-bottom-0">
                                    <input type="number" min="1"
                                           class="form-control f-14 border-0 w-100 text-right quantity mt-3"
                                           value="<?php echo e($item->quantity); ?>" name="quantity[]">

                                    <?php if(!is_null($item->product_id) && $item->product_id != 0): ?>
                                        <span class="text-dark-grey float-right border-0 f-12"><?php echo e($item->unit->unit_type); ?></span>
                                        <input type="hidden" name="product_id[]" value="<?php echo e($item->product_id); ?>">
                                        <input type="hidden" name="unit_id[]" value="<?php echo e($item->unit_id); ?>">
                                    <?php else: ?>
                                        <select class="text-dark-grey float-right border-0 f-12" name="unit_id[]">
                                            <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                <?php if($item->unit_id == $unit->id): ?> selected <?php endif; ?>
                                                value="<?php echo e($unit->id); ?>"><?php echo e($unit->unit_type); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <input type="hidden" name="product_id[]" value="">
                                    <?php endif; ?>
                                </td>
                                <td class="border-bottom-0">
                                    <input type="number" min="1"
                                           class="f-14 border-0 w-100 text-right cost_per_item form-control" placeholder="0.00"
                                           value="<?php echo e($item->unit_price); ?>" name="cost_per_item[]">
                                </td>
                                <td class="border-bottom-0">
                                    <div class="select-others height-35 rounded border-0">
                                        <select id="multiselect<?php echo e($key); ?>"
                                                name="taxes[<?php echo e($key); ?>][]" multiple="multiple"
                                                class="select-picker type customSequence border-0" data-size="3">
                                            <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option data-rate="<?php echo e($tax->rate_percent); ?>" data-tax-text="<?php echo e($tax->tax_name .':'. $tax->rate_percent); ?>%"
                                                        <?php if(isset($item->taxes) && array_search($tax->id, json_decode($item->taxes)) !== false): ?> selected <?php endif; ?> value="<?php echo e($tax->id); ?>">
                                                    <?php echo e($tax->tax_name); ?>:
                                                    <?php echo e($tax->rate_percent); ?>%</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </td>
                                <td rowspan="2" align="right" valign="top" class="bg-amt-grey btrr-bbrr">
                                        <span
                                            class="amount-html"><?php echo e(number_format((float) $item->amount, 2, '.', '')); ?></span>
                                    <input type="hidden" class="amount" name="amount[]"
                                           value="<?php echo e($item->amount); ?>">
                                </td>
                            </tr>
                            <tr class="d-none d-md-block d-lg-table-row">
                                <td colspan="<?php echo e($invoiceSetting->hsn_sac_code_show ? '4' : '3'); ?>"
                                    class="dash-border-top bblr">
                                        <textarea class="f-14 border-0 w-100 desktop-description form-control" name="item_summary[]"
                                                  placeholder="<?php echo app('translator')->get('placeholders.invoices.description'); ?>"><?php echo e($item->item_summary); ?></textarea>
                                </td>
                                <td class="border-left-0">
                                    <input type="file"
                                           class="dropify"
                                           name="invoice_item_image[]"
                                           data-allowed-file-extensions="png jpg jpeg bmp"
                                           data-messages-default="test"
                                           data-height="70"
                                           data-id="<?php echo e($item->id); ?>"
                                           id="<?php echo e($item->id); ?>"
                                           data-default-file="<?php echo e($item->invoiceItemImage ? $item->invoiceItemImage->file_url : ''); ?>"
                                           <?php if($item->invoiceItemImage && $item->invoiceItemImage->external_link): ?>
                                               data-show-remove="false"
                                        <?php endif; ?>
                                    />
                                    <input type="hidden" name="invoice_item_image_url[]" value="<?php echo e($item->invoiceItemImage ? $item->invoiceItemImage->file : ''); ?>">
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="javascript:;"
                           class="d-flex align-items-center justify-content-center ml-3 remove-item"><i
                                class="fa fa-times-circle f-20 text-lightest"></i></a>
                    </div>
                </div>
                <!-- DESKTOP DESCRIPTION TABLE END -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--  ADD ITEM START-->
        <div class="row px-lg-4 px-md-4 px-3 pb-3 pt-0 mb-3  mt-2">
            <div class="col-md-12">
                <a class="f-15 f-w-500" href="javascript:;" id="add-item"><i
                        class="icons icon-plus font-weight-bold mr-1"></i><?php echo app('translator')->get('modules.invoices.addItem'); ?></a>
            </div>
        </div>
        <!--  ADD ITEM END-->

        <hr class="m-0 border-top-grey">

        <!-- TOTAL, DISCOUNT START -->
        <div class="d-flex px-lg-4 px-md-4 px-3 pb-3 c-inv-total">
            <table width="100%" class="text-right f-14 ">
                <tbody>
                <tr>
                    <td width="50%" class="border-0 d-lg-table d-md-table d-none"></td>
                    <td width="50%" class="p-0 border-0 c-inv-total-right">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td colspan="2" class="border-top-0 text-dark-grey">
                                    <?php echo app('translator')->get('modules.invoices.subTotal'); ?></td>
                                <td width="30%" class="border-top-0 sub-total">
                                    <?php echo e(number_format((float) $invoice->sub_total, 2, '.', '')); ?></td>
                                <input type="hidden" class="sub-total-field" name="sub_total"
                                       value="<?php echo e($invoice->sub_total); ?>">
                            </tr>
                            <tr>
                                <td width="20%" class="text-dark-grey"><?php echo app('translator')->get('modules.invoices.discount'); ?>
                                </td>
                                <td width="40%" style="padding: 5px;">
                                    <table width="100%">
                                        <tbody>
                                        <tr>
                                            <td width="70%" class="c-inv-sub-padding">
                                                <input type="number" min="0" name="discount_value"
                                                       class="form-control f-14 border-0 w-100 text-right discount_value"
                                                       placeholder="0" value="<?php echo e($invoice->discount); ?>">
                                            </td>
                                            <td width="30%" align="left" class="c-inv-sub-padding">
                                                <div
                                                    class="select-others select-tax height-35 rounded border-0">
                                                    <select class="form-control select-picker"
                                                            id="discount_type" name="discount_type">
                                                        <option <?php if($invoice->discount_type == 'percent'): ?> selected <?php endif; ?> value="percent">%
                                                        </option>
                                                        <option <?php if($invoice->discount_type == 'fixed'): ?> selected <?php endif; ?> value="fixed">
                                                            <?php echo app('translator')->get('modules.invoices.amount'); ?></option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td><span
                                        id="discount_amount"><?php echo e(number_format((float) $invoice->discount, 2, '.', '')); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo app('translator')->get('modules.invoices.tax'); ?></td>
                                <td colspan="2" class="p-0">
                                    <table width="100%" id="invoice-taxes">
                                        <tr>
                                            <td colspan="2"><span class="tax-percent">0.00</span></td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                            <tr class="bg-amt-grey f-16 f-w-500">
                                <td colspan="2"><?php echo app('translator')->get('modules.invoices.total'); ?></td>
                                <td><span
                                        class="total"><?php echo e(number_format((float) $invoice->total, 2, '.', '')); ?></span>
                                </td>
                                <input type="hidden" class="total-field" name="total"
                                       value="<?php echo e(round($invoice->total, 2)); ?>">
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- TOTAL, DISCOUNT END -->

        <!-- NOTE AND TERMS AND CONDITIONS START -->
        <div class="d-flex flex-wrap px-lg-4 px-md-4 px-3 py-3">
            <div class="col-md-6 col-sm-12 c-inv-note-terms p-0 mb-lg-0 mb-md-0 mb-3">
                <label class="f-14 text-dark-grey mb-12  w-100"
                       for="usr"><?php echo app('translator')->get('modules.invoices.note'); ?></label>
                <textarea class="form-control" name="note" id="note" rows="4"
                          placeholder="<?php echo app('translator')->get('placeholders.invoices.note'); ?>"><?php echo e($invoice->note); ?></textarea>
            </div>
            <div class="col-md-6 col-sm-12 p-0 c-inv-note-terms">
                <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['fieldId' => '','fieldLabel' => __('modules.invoiceSettings.invoiceTerms')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Label::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                <p>
                    <?php echo nl2br($invoiceSetting->invoice_terms); ?>

                </p>
            </div>
        </div>
        <!-- NOTE AND TERMS AND CONDITIONS END -->

        <!-- UPLOAD MULTIPLE FILES START -->
        <div class="row px-lg-4 px-md-4 px-3 py-3">
            <!-- INVOICE NUMBER START -->
            <div class="col-md-12">
                <?php if (isset($component)) { $__componentOriginal22e84ee8172e1045de536542f4ffc9a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22e84ee8172e1045de536542f4ffc9a0 = $attributes; } ?>
<?php $component = App\View\Components\Forms\FileMultiple::resolve(['fieldLabel' => __('app.menu.addFile'),'fieldName' => 'file','fieldId' => 'file-upload-dropzone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.file-multiple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\FileMultiple::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mr-0 mr-lg-2 mr-md-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22e84ee8172e1045de536542f4ffc9a0)): ?>
<?php $attributes = $__attributesOriginal22e84ee8172e1045de536542f4ffc9a0; ?>
<?php unset($__attributesOriginal22e84ee8172e1045de536542f4ffc9a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22e84ee8172e1045de536542f4ffc9a0)): ?>
<?php $component = $__componentOriginal22e84ee8172e1045de536542f4ffc9a0; ?>
<?php unset($__componentOriginal22e84ee8172e1045de536542f4ffc9a0); ?>
<?php endif; ?>
            </div>
            <input type="hidden" name="invoiceID" id="invoiceID">
        </div>
        <!-- UPLOAD MULTIPLE FILES END -->

        <div class="d-flex px-lg-4 px-md-4 px-3 py-2 bg-light-grey">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="f-14 text-dark-grey mb-12 w-100" for="payment_status"></label>
                    <div class="d-flex">
                        <?php if (isset($component)) { $__componentOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Checkbox::resolve(['fieldId' => 'payment_status','fieldLabel' => __('modules.invoices.receivedPayment'),'fieldValue' => $invoice->payment_status,'fieldName' => 'payment_status','checked' => $invoice->payment_status == '1'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3)): ?>
<?php $attributes = $__attributesOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3; ?>
<?php unset($__attributesOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3)): ?>
<?php $component = $__componentOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3; ?>
<?php unset($__componentOriginal9c5d7e5b2e4b8b16cfa941b5e69189f3); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 payment-types <?php if($invoice->payment_status != 1): ?> d-none <?php endif; ?>">
                <?php if (isset($component)) { $__componentOriginal67cd5dc9866c6185ad92d933c387fa86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldId' => 'payment_gateway_id','fieldLabel' => __('modules.payments.paymentGateway'),'fieldName' => 'gateway','search' => 'true','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <option value="">--</option>
                    <option value="Offline"  id="offline_method" <?php if($invoice->gateway == 'Offline'): ?> selected <?php endif; ?>><?php echo e(__('modules.offlinePayment.offlinePayment')); ?></option>
                    <?php if($paymentGateway->paypal_status == 'active'): ?>
                        <option value="paypal" <?php if($invoice->gateway == 'paypal'): ?> selected <?php endif; ?>><?php echo e(__('app.paypal')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->stripe_status == 'active'): ?>
                        <option value="stripe" <?php if($invoice->gateway == 'stripe'): ?> selected <?php endif; ?>><?php echo e(__('app.stripe')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->razorpay_status == 'active'): ?>
                        <option value="razorpay" <?php if($invoice->gateway == 'razorpay'): ?> selected <?php endif; ?>><?php echo e(__('app.razorpay')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->paystack_status == 'active'): ?>
                        <option value="paystack" <?php if($invoice->gateway == 'paystack'): ?> selected <?php endif; ?>><?php echo e(__('app.paystack')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->mollie_status == 'active'): ?>
                        <option value="mollie" <?php if($invoice->gateway == 'mollie'): ?> selected <?php endif; ?>><?php echo e(__('app.mollie')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->payfast_status == 'active'): ?>
                        <option value="payfast" <?php if($invoice->gateway == 'payfast'): ?> selected <?php endif; ?>><?php echo e(__('app.payfast')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->authorize_status == 'active'): ?>
                        <option value="authorize" <?php if($invoice->gateway == 'authorize'): ?> selected <?php endif; ?>><?php echo e(__('app.authorize')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->square_status == 'active'): ?>
                        <option value="square" <?php if($invoice->gateway == 'square'): ?> selected <?php endif; ?>><?php echo e(__('app.square')); ?></option>
                    <?php endif; ?>
                    <?php if($paymentGateway->flutterwave_status == 'active'): ?>
                        <option value="flutterwave" <?php if($invoice->gateway == 'flutterwave'): ?> selected <?php endif; ?>><?php echo e(__('app.flutterwave')); ?></option>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $attributes = $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $component = $__componentOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
            </div>

            <div class="col-md-3 <?php if($invoice->offline_methods == null || $invoice->payment_status != 1): ?> d-none <?php endif; ?> " id="add_offline">
                <?php if (isset($component)) { $__componentOriginal67cd5dc9866c6185ad92d933c387fa86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Select::resolve(['fieldId' => 'offline_method_id','fieldLabel' => __('modules.payments.offlinePaymentMethod'),'fieldName' => 'offline_methods','search' => 'true','fieldRequired' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($method->status == 'yes'): ?>
                        <option <?php if($invoice->offline_method_id == $method->id): ?> selected <?php endif; ?> value=<?php echo e($method->id); ?>><?php echo e($method->name); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $attributes = $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $component = $__componentOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
            </div>

            <div class="col-md-3 payment-types <?php if($invoice->payment_status != 1): ?> d-none <?php endif; ?>">
                <?php if (isset($component)) { $__componentOriginal4e45e801405ab67097982370a6a83cba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e45e801405ab67097982370a6a83cba = $attributes; } ?>
<?php $component = App\View\Components\Forms\Text::resolve(['fieldId' => 'transaction_id','fieldLabel' => __('modules.payments.transactionId'),'fieldName' => 'transaction_id','fieldPlaceholder' => __('placeholders.payments.transactionId'),'fieldValue' => $invoice->transaction_id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Text::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e45e801405ab67097982370a6a83cba)): ?>
<?php $attributes = $__attributesOriginal4e45e801405ab67097982370a6a83cba; ?>
<?php unset($__attributesOriginal4e45e801405ab67097982370a6a83cba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e45e801405ab67097982370a6a83cba)): ?>
<?php $component = $__componentOriginal4e45e801405ab67097982370a6a83cba; ?>
<?php unset($__componentOriginal4e45e801405ab67097982370a6a83cba); ?>
<?php endif; ?>
            </div>
        </div>

        <!-- CANCEL SAVE SEND START -->
        <?php if (isset($component)) { $__componentOriginalb19caa501eea72410c04d1917a586963 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb19caa501eea72410c04d1917a586963 = $attributes; } ?>
<?php $component = App\View\Components\FormActions::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormActions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'c-inv-btns']); ?>

            <div class="d-flex">

                <div class="inv-action dropup mr-3">
                    <button class="btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <?php echo app('translator')->get('app.save'); ?>
                        <span><i class="fa fa-chevron-up f-15 text-white"></i></span>
                    </button>
                    <!-- DROPDOWN - INFORMATION -->
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuBtn" tabindex="0">
                        <li>
                            <a class="dropdown-item f-14 text-dark save-form" href="javascript:;" data-type="save">
                                <i class="fa fa-save f-w-500 mr-2 f-11"></i>
                                <?php if($invoice->status == 'draft'): ?>
                                    <?php echo app('translator')->get('app.saveDraft'); ?>
                                <?php else: ?>
                                    <?php echo app('translator')->get('app.save'); ?>
                                <?php endif; ?>
                            </a>
                        </li>
                        <?php if($invoice->status == 'draft' || $invoice->send_status == 0): ?>
                            <li>
                                <a class="dropdown-item f-14 text-dark save-form" href="javascript:void(0);"
                                   data-type="send">
                                    <i class="fa fa-paper-plane f-w-500  mr-2 f-12"></i> <?php echo app('translator')->get('app.saveSend'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($invoice->status == 'draft' || $invoice->send_status == 0): ?>
                            <li>
                                <a class="dropdown-item f-14 text-dark save-form" href="javascript:void(0);"
                                   data-type="mark_as_send" data-toggle="tooltip" data-original-title="<?php echo app('translator')->get('messages.markSentInfo'); ?>">
                                    <i class="fa fa-check-double f-w-500  mr-2 f-12"></i> <?php echo app('translator')->get('app.saveMark'); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <?php if (isset($component)) { $__componentOriginalc35c79ed7e812580313ad04118477974 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc35c79ed7e812580313ad04118477974 = $attributes; } ?>
<?php $component = App\View\Components\Forms\ButtonCancel::resolve(['link' => route('invoices.index')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button-cancel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ButtonCancel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-0']); ?><?php echo app('translator')->get('app.cancel'); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc35c79ed7e812580313ad04118477974)): ?>
<?php $attributes = $__attributesOriginalc35c79ed7e812580313ad04118477974; ?>
<?php unset($__attributesOriginalc35c79ed7e812580313ad04118477974); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc35c79ed7e812580313ad04118477974)): ?>
<?php $component = $__componentOriginalc35c79ed7e812580313ad04118477974; ?>
<?php unset($__componentOriginalc35c79ed7e812580313ad04118477974); ?>
<?php endif; ?>
            </div>


         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb19caa501eea72410c04d1917a586963)): ?>
<?php $attributes = $__attributesOriginalb19caa501eea72410c04d1917a586963; ?>
<?php unset($__attributesOriginalb19caa501eea72410c04d1917a586963); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb19caa501eea72410c04d1917a586963)): ?>
<?php $component = $__componentOriginalb19caa501eea72410c04d1917a586963; ?>
<?php unset($__componentOriginalb19caa501eea72410c04d1917a586963); ?>
<?php endif; ?>
        <!-- CANCEL SAVE SEND END -->

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
    <!-- FORM END -->
</div>
<!-- CREATE INVOICE END -->
<!-- for sortable content -->
<script src="<?php echo e(asset('vendor/jquery/jquery-ui.min.js')); ?>"></script>

<script>
    $(function () {
        $("#sortable").sortable();
    });

    $(document).ready(function() {
        $('.toggle-product-category').click(function() {
            $('.product-category-filter').toggleClass('d-none');
            var url = "<?php echo e(route('invoices.product_category', ':id')); ?>";
            url = url.replace(':id', null);
            changeProductCategory(url);
            $('#product_category_id').val('').trigger('change');
            $('#product_category_id').selectpicker('refresh');
        });

        $('#product_category_id').on('change', function(){
            var categoryId = $(this).val();
            var url = "<?php echo e(route('invoices.product_category', ':id')); ?>";
            url = (categoryId) ? url.replace(':id', categoryId) : url.replace(':id', null);
            changeProductCategory(url);
        });

        function changeProductCategory(url) {
            $.easyAjax({
                url : url,
                type : "GET",
                container: '#saveInvoiceForm',
                blockUI: true,
                success: function (response) {
                    if (response.status == 'success') {
                        var options = [];
                        var rData = [];
                        rData = response.data;
                        $.each(rData, function(index, value) {
                            var selectData = '';
                            if (value.opening_stock > 0) {
                                selectData = '<option value="' + value.id + '">' + value.name +
                                '</option>';
                                options.push(selectData);
                            }
                        });
                        $('#add-products').html(
                            '<option value="" class="form-control" ><?php echo e(__('app.menu.selectProduct')); ?></option>' +
                            options);
                        $('#add-products').selectpicker('refresh');
                    }
                }
            });
        }

        Dropzone.autoDiscover = false;
            //Dropzone class
        invoiceDropzone = new Dropzone("div#file-upload-dropzone", {
            dictDefaultMessage: "<?php echo e(__('app.dragDrop')); ?>",
            url: "<?php echo e(route('invoice-files.store')); ?>",
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            },
            paramName: "file",
            maxFilesize: DROPZONE_MAX_FILESIZE,
            maxFiles: DROPZONE_MAX_FILES,
            autoProcessQueue: false,
            uploadMultiple: true,
            addRemoveLinks: true,
            parallelUploads: DROPZONE_MAX_FILES,
            acceptedFiles: DROPZONE_FILE_ALLOW,
            init: function() {
                invoiceDropzone = this;
            }
        });
        invoiceDropzone.on('sending', function(file, xhr, formData) {
            var ids = "<?php echo e($invoice->id); ?>";
            formData.append('invoice_id', ids);
            $.easyBlockUI();
        });
        invoiceDropzone.on('uploadprogress', function() {
            $.easyBlockUI();
        });
        invoiceDropzone.on('queuecomplete', function() {
            var msgs = "<?php echo app('translator')->get('messages.recordSaved'); ?>";
            window.location.href = "<?php echo e(route('invoices.index')); ?>"
        });
        invoiceDropzone.on('removedfile', function () {
            var grp = $('div#file-upload-dropzone').closest(".form-group");
            var label = $('div#file-upload-box').siblings("label");
            $(grp).removeClass("has-error");
            $(label).removeClass("is-invalid");
        });
        invoiceDropzone.on('error', function (file, message) {
            invoiceDropzone.removeFile(file);
            var grp = $('div#file-upload-dropzone').closest(".form-group");
            var label = $('div#file-upload-box').siblings("label");
            $(grp).find(".help-block").remove();
            var helpBlockContainer = $(grp);

            if (helpBlockContainer.length == 0) {
                helpBlockContainer = $(grp);
            }

            helpBlockContainer.append('<div class="help-block invalid-feedback">' + message + '</div>');
            $(grp).addClass("has-error");
            $(label).addClass("is-invalid");

        });

        var file = $('#sortable .dropify').dropify({
            messages: dropifyMessages
        });

        file.on('dropify.beforeClear', function(event, element) {

            let invoice_item_id = $(this).data('id');
            let file_path = $(this).data('default-file');

            Swal.fire({
                title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
                text: "<?php echo app('translator')->get('messages.recoverRecord'); ?>",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "<?php echo app('translator')->get('messages.confirmDelete'); ?>",
                cancelButtonText: "<?php echo app('translator')->get('app.cancel'); ?>",
                customClass: {
                    confirmButton: 'btn btn-primary mr-3',
                    cancelButton: 'btn btn-secondary'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {

                    var url = "<?php echo e(route('invoices.delete_image')); ?>";
                    var token = "<?php echo e(csrf_token()); ?>";

                    $.easyAjax({
                        type: 'get',
                        url: url,
                        blockUI: true,
                        data: {
                            '_token': token,
                            'invoice_item_id': invoice_item_id,
                            'file_path': file_path
                        },
                        success: function(response) {
                            if (response.status == "success") {
                                element.resetPreview();
                            }
                        }
                    });
                }
            });

            return false;
        });

        $('.custom-date-picker').each(function(ind, el) {
            datepicker(el, {
                position: 'bl',
                ...datepickerConfig
            });
        });

        const dp1 = datepicker('#invoice_date', {
            position: 'bl',
            dateSelected: new Date("<?php echo e(str_replace('-', '/', $invoice->issue_date)); ?>"),
            ...datepickerConfig
        });
        const dp2 = datepicker('#due_date', {
            position: 'bl',
            dateSelected: new Date("<?php echo e(str_replace('-', '/', $invoice->due_date)); ?>"),
            ...datepickerConfig
        });

        $('#client_list_id').change(function() {
            var id = $(this).val();
            var url = "<?php echo e(route('clients.project_list', ':id')); ?>";
            url = url.replace(':id', id);
            var token = "<?php echo e(csrf_token()); ?>";

            $.easyAjax({
                url: url,
                container: '#saveInvoiceForm',
                type: "POST",
                blockUI: true,
                data: {
                    _token: token
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#project_id').html(response.data);
                        $('#project_id').selectpicker('refresh');
                    }
                }
            });

            var url = "<?php echo e(route('clients.ajax_details', ':id')); ?>";
            url = url.replace(':id', id);

            $.easyAjax({
                url: url,
                container: '#saveInvoiceForm',
                type: "POST",
                blockUI: true,
                data: {
                    _token: token
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#client_billing_address').html(nl2br(response.data.clientDetails
                            .address));
                        $('#add-shipping-field').addClass('d-none');
                        $('#client_shipping_address').removeClass('d-none');

                        if (response.data.clientDetails.shipping_address === null) {
                            var addShippingLink =
                                `<a href="javascript:;" class="" id="show-shipping-field"><i class="f-12 mr-2 fa fa-plus"></i>
                                    <?php echo app('translator')->get("app.addShippingAddress"); ?></a>`;
                            $('#client_shipping_address').html(addShippingLink);
                        } else {
                            $('#client_shipping_address').html(nl2br(response.data
                                .clientDetails
                                .shipping_address));
                        }
                    }
                }
            });

        });

        $('body').on('click', '#show-shipping-field', function() {
            $('#add-shipping-field, #client_shipping_address').toggleClass('d-none');
        });

        const resetAddProductButton = () => {
            $("#add-products").val('').selectpicker("refresh");
        };

        $('#add-products').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
            e.stopImmediatePropagation()
            var id = $(this).val();
            if (previousValue != id && id != '') {
                addProduct(id);
                resetAddProductButton();
            }
        });



        function addProduct(id) {
            var currencyId = $('#currency_id').val();
            var exchangeRate = $('#exchange_rate').val();
            $.easyAjax({
                url: "<?php echo e(route('invoices.add_item')); ?>",
                type: "GET",
                data: {
                    id: id,
                    currencyId: currencyId,
                    exchangeRate: exchangeRate
                },
                blockUI: true,
                success: function(response) {
                    if($('input[name="item_name[]"]').val() == ''){
                        $("#sortable .item-row").remove();
                    }
                    $(response.view).hide().appendTo("#sortable").fadeIn(500);
                    calculateTotal();

                    var noOfRows = $(document).find('#sortable .item-row').length;
                    var i = $(document).find('.item_name').length - 1;
                    var itemRow = $(document).find('#sortable .item-row:nth-child(' + noOfRows +
                        ') select.type');
                    itemRow.attr('id', 'multiselect' + i);
                    itemRow.attr('name', 'taxes[' + i + '][]');
                    $(document).find('#multiselect' + i).selectpicker();
                }
            });
        }

        $(document).on('click', '#add-item', function() {

            var i = $(document).find('.item_name').length;
            var item = ' <div class="d-flex px-4 py-3 c-inv-desc item-row">' +
                `<div class="d-flex align-items-center">
                    <span class="ui-icon ui-icon-arrowthick-2-n-s mr-2"></span>
                    <input type="hidden" name="sort_order[]"
                            value="${i+1}">
                </div>` +
                '<div class="c-inv-desc-table w-100 d-lg-flex d-md-flex d-block">' +
                '<table width="100%">' +
                '<tbody>' +
                '<tr class="text-dark-grey font-weight-bold f-14">' +
                '<td width="<?php echo e($invoiceSetting->hsn_sac_code_show ? '40%' : '50%'); ?>" class="border-0 inv-desc-mbl btlr"><?php echo app('translator')->get("app.description"); ?></td>';

            <?php if($invoiceSetting->hsn_sac_code_show): ?>
                item += '<td width="10%" class="border-0" align="right"><?php echo app('translator')->get("app.hsnSac"); ?></td>';
            <?php endif; ?>

                item +=
                `<td width="10%" class="border-0" align="right"><?php echo app('translator')->get("modules.invoices.qty"); ?></td>
                <td width="10%" class="border-0" align="right"><?php echo app('translator')->get("modules.invoices.unitPrice"); ?></td>
                <td width="13%" class="border-0" align="right"><?php echo app('translator')->get("modules.invoices.tax"); ?></td>
                <td width="17%" class="border-0 bblr-mbl" align="right"><?php echo app('translator')->get("modules.invoices.amount"); ?></td>
                </tr>
                <tr>
                <td class="border-bottom-0 btrr-mbl btlr">
                <input type="text" class="f-14 border-0 w-100 item_name form-control" name="item_name[]" placeholder="<?php echo app('translator')->get("modules.expenses.itemName"); ?>">
                </td>
                <td class="border-bottom-0 d-block d-lg-none d-md-none">
                <textarea class="f-14 border-0 w-100 mobile-description form-control" name="item_summary[]" placeholder="<?php echo app('translator')->get("placeholders.invoices.description"); ?>"></textarea>
                </td>`;

            <?php if($invoiceSetting->hsn_sac_code_show): ?>
                item += '<td class="border-bottom-0">' +
                '<input type="text" min="1" class="f-14 border-0 w-100 text-right hsn_sac_code form-control" value="" name="hsn_sac_code[]">'
                +
                '</td>';
            <?php endif; ?>

                item += '<td class="border-bottom-0">' +
                '<input type="number" min="1" class="f-14 border-0 w-100 text-right quantity form-control mt-3" value="1" name="quantity[]">' +
                `<select class="text-dark-grey float-right border-0 f-12" name="unit_id[]">
                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                        <?php if($unit->default == 1): ?> selected <?php endif; ?>
                        value="<?php echo e($unit->id); ?>"><?php echo e($unit->unit_type); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <input type="hidden" name="product_id[]" value="">`+
                '</td>' +
                '<td class="border-bottom-0">' +
                '<input type="number" min="1" class="f-14 border-0 w-100 text-right cost_per_item form-control" placeholder="0.00" value="0" name="cost_per_item[]">' +
                '</td>' +
                '<td class="border-bottom-0">' +
                '<div class="select-others height-35 rounded border-0">' +
                '<select id="multiselect' + i + '" name="taxes[' + i +
                '][]" multiple="multiple" class="select-picker type customSequence" data-size="3">'
                <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                +'<option data-rate="<?php echo e($tax->rate_percent); ?>" data-tax-text="<?php echo e($tax->tax_name .':'. $tax->rate_percent); ?>%" value="<?php echo e($tax->id); ?>">'
                +'<?php echo e($tax->tax_name); ?>:<?php echo e($tax->rate_percent); ?>%</option>'
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                +
                '</select>' +
                '</div>' +
                '</td>' +
                '<td rowspan="2" align="right" valign="top" class="bg-amt-grey btrr-bbrr">' +
                '<span class="amount-html">0.00</span>' +
                '<input type="hidden" class="amount" name="amount[]" value="0">' +
                '</td>' +
                '</tr>' +
                '<tr class="d-none d-md-table-row d-lg-table-row">' +
                '<td colspan="<?php echo e($invoiceSetting->hsn_sac_code_show ? 4 : 3); ?>" class="dash-border-top bblr">' +
                '<textarea class="f-14 border-0 w-100 desktop-description" name="item_summary[]" placeholder="<?php echo app('translator')->get("placeholders.invoices.description"); ?>"></textarea>' +
                '</td>' +
                '<td td class="border-left-0">' +
                '<input type="file" class="dropify" id="dropify'+i+'" name="invoice_item_image[]" data-allowed-file-extensions="png jpg jpeg bmp" data-messages-default="test" data-height="70""/><input type="hidden" name="invoice_item_image_url[]">' +
                '</td>' +
                '</tr>' +
                '</tbody>' +
                '</table>' +
                '</div>' +
                '<a href="javascript:;" class="d-flex align-items-center justify-content-center ml-3 remove-item"><i class="fa fa-times-circle f-20 text-lightest"></i></a>' +
                '</div>';
            $(item).hide().appendTo("#sortable").fadeIn(500);
            $('#multiselect' + i).selectpicker();

            $(document).find('#dropify' + i).dropify({
                messages: dropifyMessages
            });
        });

        $('#saveInvoiceForm').on('click', '.remove-item', function() {
            $(this).closest('.item-row').fadeOut(300, function() {
                $(this).remove();
                $('select.customSequence').each(function(index) {
                    $(this).attr('name', 'taxes[' + index + '][]');
                    $(this).attr('id', 'multiselect' + index + '');
                });
                calculateTotal();
            });
        });

        $('.save-form').click(function() {
            var type = $(this).data('type');
            let totalAmt = $('.total-field').val();

            if((type == 'send' || type == 'mark_as_send') && totalAmt == 0) {
                Swal.fire({
                    title: "<?php echo app('translator')->get('messages.sweetAlertTitle'); ?>",
                    text: "<?php echo app('translator')->get('messages.markAsPaid'); ?>",
                    icon: 'warning',
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: "<?php echo app('translator')->get('app.yes'); ?>",
                    cancelButtonText: "<?php echo app('translator')->get('app.no'); ?>",
                    customClass: {
                        confirmButton: 'btn btn-primary mr-3',
                        cancelButton: 'btn btn-secondary'
                    },
                    showClass: {
                        popup: 'swal2-noanimation',
                        backdrop: 'swal2-noanimation'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        saveForm(type, 'direct');
                    }
                });
            } else {
                saveForm(type, 'direct');
            }

        });

        $('#saveInvoiceForm').on('keyup', '.quantity,.cost_per_item,.item_name, .discount_value', function() {
            var quantity = $(this).closest('.item-row').find('.quantity').val();
            var perItemCost = $(this).closest('.item-row').find('.cost_per_item').val();
            var amount = (quantity * perItemCost);

            $(this).closest('.item-row').find('.amount').val(decimalupto2(amount));
            $(this).closest('.item-row').find('.amount-html').html(decimalupto2(amount));

            calculateTotal();
        });

        $('#saveInvoiceForm').on('change', '.type, #discount_type, #calculate_tax', function() {
            var quantity = $(this).closest('.item-row').find('.quantity').val();
            var perItemCost = $(this).closest('.item-row').find('.cost_per_item').val();
            var amount = (quantity * perItemCost);

            $(this).closest('.item-row').find('.amount').val(decimalupto2(amount));
            $(this).closest('.item-row').find('.amount-html').html(decimalupto2(amount));

            calculateTotal();
        });

        $('#saveInvoiceForm').on('input', '.quantity', function() {
            var quantity = $(this).closest('.item-row').find('.quantity').val();
            var perItemCost = $(this).closest('.item-row').find('.cost_per_item').val();
            var amount = (quantity * perItemCost);

            $(this).closest('.item-row').find('.amount').val(decimalupto2(amount));
            $(this).closest('.item-row').find('.amount-html').html(decimalupto2(amount));

            calculateTotal();
        });

        calculateTotal();

        <?php if (isset($component)) { $__componentOriginal7e99458729620cde50aeae9b165a19fc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7e99458729620cde50aeae9b165a19fc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.custom-field-filejs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.custom-field-filejs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7e99458729620cde50aeae9b165a19fc)): ?>
<?php $attributes = $__attributesOriginal7e99458729620cde50aeae9b165a19fc; ?>
<?php unset($__attributesOriginal7e99458729620cde50aeae9b165a19fc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e99458729620cde50aeae9b165a19fc)): ?>
<?php $component = $__componentOriginal7e99458729620cde50aeae9b165a19fc; ?>
<?php unset($__componentOriginal7e99458729620cde50aeae9b165a19fc); ?>
<?php endif; ?>

        init(RIGHT_MODAL);

    });

    function ucWord(str){
        str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });
        return str;
    }

    $('#currency_id').change(function() {
        var curId = $(this).val();
        var companyCurrencyName = "<?php echo e($companyCurrency->currency_code); ?>";
        var currentCurrencyName = $('#currency_id option:selected').attr('data-currency-code');
        var companyCurrency = '<?php echo e($companyCurrency->id); ?>';

        if(curId == companyCurrency){
            $('#exchange_rate').prop('readonly', true);
        } else{
            $('#exchange_rate').prop('readonly', false);
        }
        var token = "<?php echo e(csrf_token()); ?>";

        $.easyAjax({
            url: "<?php echo e(route('payments.account_list')); ?>",
            container: '#saveInvoiceForm',
            type: "GET",
            blockUI: true,
            data: { 'curId' : curId , _token: token},
            success: function(response) {
                if (response.status == 'success') {
                    $('#bank_account_id').html(response.data);
                    $('#bank_account_id').selectpicker('refresh');
                    $('#exchange_rate').val(response.exchangeRate);
                    let currencyExchange = (companyCurrencyName != currentCurrencyName) ? '( '+currentCurrencyName+' <?php echo app('translator')->get('app.to'); ?> '+companyCurrencyName+' )' : '';
                    $('#currency_exchange').html(currencyExchange);
                }
            }
        });
    });

    $('input[type=checkbox][name=payment_status]').change(function() {
        if ($(this).is(":checked")) {
            $(this).val(1);
            $('#add_offline').addClass('d-none');
            $('.payment-types').removeClass('d-none');
        } else {
            $(this).val(0);
            $('#add_offline').addClass('d-none');
            $('#transaction_id').val('');
            $('.payment-types').addClass('d-none');
            $('#payment_gateway_id').val('');
            $('#payment_gateway_id').selectpicker('refresh');
        }
    });

    $('#payment_gateway_id').on('change', function()
    {
        var val = $(this).val();

        if (val == 'Offline'){
            var url = "<?php echo e(route('offline.methods')); ?>"
            $.easyAjax({
                url : url,
                type : "GET",
                success: function (response) {
                    if (response.status == 'success') {
                        $('#add_offline').removeClass('d-none');
                        var options = [];
                        var rData = [];
                        rData = response.data;
                            $.each(rData, function (index, value) {
                            var selectData = '';
                            if(value.status=='yes'){
                            selectData = '<option value="' + value.id + '">' + value.name + '</option>';
                            }
                            options.push(selectData);
                        });
                        $('#add_offline_methods').html(
                            options);
                        $('#add_offline_methods').selectpicker('refresh');
                    }
                }
            });
        }
        else
        {
            $('#add_offline').addClass('d-none');
        }
    });

    function saveForm(type, exceed){

            $('#doItLater').val(exceed);

            if (KTUtil.isMobileDevice()) {
                $('.desktop-description').remove();
            } else {
                $('.mobile-description').remove();
            }

            calculateTotal();

            var discount = $('#discount_amount').html();
            var total = $('.sub-total-field').val();

            if (parseFloat(discount) > parseFloat(total)) {
                Swal.fire({
                    icon: 'error',
                    text: "<?php echo e(__('messages.discountExceed')); ?>",

                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    showClass: {
                        popup: 'swal2-noanimation',
                        backdrop: 'swal2-noanimation'
                    },
                    buttonsStyling: false
                });
                return false;
            }

            $.easyAjax({
                url: "<?php echo e(route('invoices.update', $invoice->id)); ?>" + "?type=" + type,
                container: '#saveInvoiceForm',
                type: "POST",
                blockUI: true,
                redirect: true,
                file: true,  // Commented so that we dot get error of Input variables exceeded 1000
                data: $('#saveInvoiceForm').serialize(),
                success: function(response) {
                    $(MODAL_DEFAULT).modal('hide');

                    if (response.status == 'error' && response.showValue === true && exceed == 'direct') {
                        const productIDs = response.data;
                        $('#do_it_later').val('true');
                        const url = "<?php echo e(route('invoices.committed_modal')); ?>" + "?products=" + productIDs + "&type=" + type ;

                        $(MODAL_DEFAULT + ' ' + MODAL_HEADING).html('...');
                        $.ajaxModal(MODAL_DEFAULT, url);
                    }

                    if (response.status === 'success') {
                        if (typeof invoiceDropzone !== 'undefined' && invoiceDropzone.getQueuedFiles().length > 0) {
                            invoiceID = response.invoiceID;
                            $('#invoiceID').val(response.invoiceID);
                            invoiceDropzone.processQueue();
                        }
                        else {
                            window.location.href = response.redirectUrl;
                        }
                    }
                }
            })
        }

</script>

<?php endif; ?>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/invoices/ajax/edit.blade.php ENDPATH**/ ?>