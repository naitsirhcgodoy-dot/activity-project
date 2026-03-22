<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'description', 'borderColor']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'description', 'borderColor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-<?php echo e($borderColor); ?>-500 hover:shadow-lg transition">
    <h3 class="text-lg font-semibold text-gray-900"><?php echo e($title); ?></h3>
    <p class="mt-2 text-sm text-gray-600"><?php echo e($description); ?></p>
    <?php echo e($slot); ?>

</div><?php /**PATH C:\laragon\www\GODOY\resources\views/components/settings-card.blade.php ENDPATH**/ ?>