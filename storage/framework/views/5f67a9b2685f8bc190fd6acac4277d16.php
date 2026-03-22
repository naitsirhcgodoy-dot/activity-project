<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['enabled' => false]));

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

foreach (array_filter((['enabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<label class="relative inline-flex items-center cursor-pointer mt-4">
    <input type="checkbox" <?php echo e($enabled ? 'checked' : ''); ?> class="sr-only peer">
    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-blue-600
                after:content-[''] after:absolute after:top-0.5 after:left-[2px]
                after:bg-white after:border after:rounded-full after:h-5 after:w-5
                after:transition-all peer-checked:after:translate-x-full peer-checked:after:border-white"></div>
</label><?php /**PATH C:\laragon\www\GODOY\resources\views/components/toggle-switch.blade.php ENDPATH**/ ?>