<?php if (isset($component)) { $__componentOriginal42cf517c5716db26aa0e5d62b08b607b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42cf517c5716db26aa0e5d62b08b607b = $attributes; } ?>
<?php $component = App\View\Components\Cards\Notification::resolve(['notification' => $notification,'link' => route('employees.show', $notification->data['user_id']),'image' => $notification->data['image_url'],'title' => $notification->data['name'],'text' => __('email.newUserViaLink.subject'),'time' => $notification->created_at] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Cards\Notification::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42cf517c5716db26aa0e5d62b08b607b)): ?>
<?php $attributes = $__attributesOriginal42cf517c5716db26aa0e5d62b08b607b; ?>
<?php unset($__attributesOriginal42cf517c5716db26aa0e5d62b08b607b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42cf517c5716db26aa0e5d62b08b607b)): ?>
<?php $component = $__componentOriginal42cf517c5716db26aa0e5d62b08b607b; ?>
<?php unset($__componentOriginal42cf517c5716db26aa0e5d62b08b607b); ?>
<?php endif; ?>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/notifications/all/new_user_via_link.blade.php ENDPATH**/ ?>