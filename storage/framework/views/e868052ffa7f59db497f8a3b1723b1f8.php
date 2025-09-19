<?php if(array_sum($chartData['values']) > 0): ?>
    <a href="javascript:;" class="text-darkest-grey f-w-500 piechart-full-screen" data-chart-id="task-chart" data-chart-data="<?php echo e(json_encode($chartData)); ?>"><i class="fas fa-expand float-right mr-3"></i></a>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalb982231180e038d497f4b363f639c469 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb982231180e038d497f4b363f639c469 = $attributes; } ?>
<?php $component = App\View\Components\PieChart::resolve(['labels' => $chartData['labels'],'values' => $chartData['values'],'colors' => $chartData['colors']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pie-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PieChart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'task-chart','height' => '250','width' => '250']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb982231180e038d497f4b363f639c469)): ?>
<?php $attributes = $__attributesOriginalb982231180e038d497f4b363f639c469; ?>
<?php unset($__attributesOriginalb982231180e038d497f4b363f639c469); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb982231180e038d497f4b363f639c469)): ?>
<?php $component = $__componentOriginalb982231180e038d497f4b363f639c469; ?>
<?php unset($__componentOriginalb982231180e038d497f4b363f639c469); ?>
<?php endif; ?>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/reports/tasks/chart.blade.php ENDPATH**/ ?>