<div class="attendance-section">
  

  <?php $__env->startSection('content'); ?>
 <div class="container">
     <h1> Attendance Records</h1>

    <table border="5" cellpadding="100">
        <thead>
            <tr>
             <th class="px-4 py-2">Student Name</th>
             <th class="px-4 py-2">Student ID</th>
             <th class="px-4 py-2">Time In</th>
             <th class="px-4 py-2">Time Out</th>
            </tr>
        </thead>
        <tbody>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                 <td class="border px-4 py-2"><?php echo e($attendance->student_name); ?></td>
                 <td class="border px-4 py-2"><?php echo e($attendance->student_id); ?></td>
                 <td class="border px-4 py-2"><?php echo e($attendance->time_in); ?></td>
                 <td class="border px-4 py-2"><?php echo e($attendance->time_out); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\GODOY\resources\views/attendance.blade.php ENDPATH**/ ?>