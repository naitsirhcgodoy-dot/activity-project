

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto space-y-6">
  <h1 class="text-3xl font-extrabold"><?php echo e(config("")); ?></h1>
   <div class="mini-card">
  <div class="bg-white border rounded-lg p-6 shadow-sm">
    <h1 class="text-lg font-semibold mb-2">WELCOME!</h1>
  </div>
  <div class="card">
   <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <h3><button class="bg-white p-4 rounded-lg border"> Username</button></h3>
    <h3><button class="bg-white p-4 rounded-lg border"> Login</button></h3>
    <h3><button class="bg-white p-4 rounded-lg border"> Password</button></h3>
    <h3><button class="bg-white p-4 rounded-lg border">Register</button></h3>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\GODOY\resources\views/home.blade.php ENDPATH**/ ?>