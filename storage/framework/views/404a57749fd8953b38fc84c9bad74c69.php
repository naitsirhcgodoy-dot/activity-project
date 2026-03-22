<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php echo e($title ?? 'Home page'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>
<body>
    <div id="app" class="app-root">
        <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        

        <div class="site-body">
            <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="main-content" role="main" id="mainContent">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
        <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- mobile overlay for sidebar -->
        <div id="overlay" class="overlay" aria-hidden="true"></div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\GODOY\resources\views/layouts/app.blade.php ENDPATH**/ ?>