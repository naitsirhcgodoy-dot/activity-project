

<?php $__env->startSection('content'); ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .dashboard {
        padding: 30px;
    }

    /* Header */
    .dashboard-header {
        margin-bottom: 25px;
    }

    .dashboard-header h1 {
        font-weight: 700;
    }

    /* Stat Cards */
    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        display: flex;
        align-items: center;
        gap: 15px;
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-4px);
    }

    .stat-icon {
        font-size: 35px;
    }

    .stat-info h4 {
        margin: 0;
        font-size: 14px;
        color: #888;
    }

    .stat-info h2 {
        margin: 0;
        font-weight: 700;
    }

    /* Main grid */
    .dashboard-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
    }

    .card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .card h3 {
        margin-bottom: 15px;
    }

    /* Activity */
    .activity {
        border-bottom: 1px solid #eee;
        padding: 10px 0;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .dashboard-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="dashboard">
    <!-- HEADER -->
    <div class="dashboard-header">
        <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h1 style="margin: 0; font-size: 28px;">Dashboard</h1>
                    <p style="margin: 5px 0 0 0; color: #666;">Welcome back, <?php echo e(Auth::user()?->name ?? 'Guest'); ?></p>
                </div>
                <div style="text-align: right; color: #888; font-size: 14px;">
                    <?php echo e(now()->format('l, F j, Y')); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- STATS -->
    <div class="stats">
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-info">
                <h4>Total Users</h4>
                <h2><?php echo e($totalUsers ?? 0); ?></h2>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">📁</div>
            <div class="stat-info">
                <h4>Active Projects</h4>
                <h2><?php echo e($activeProjects ?? 0); ?></h2>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">✅</div>
            <div class="stat-info">
                <h4>Completed Tasks</h4>
                <h2><?php echo e($completedTasks ?? 0); ?></h2>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>

<script>
    const ctx = document.getElementById('tasksChart');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Completed', 'Active', 'Pending'],
            datasets: [{
                data: [
                    <?php echo e($completedTasks ?? 0); ?>,
                    <?php echo e($activeProjects ?? 0); ?>,
                    <?php echo e($pendingTasks ?? 0); ?>

                ]
            }]
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\GODOY\resources\views/pages/page1.blade.php ENDPATH**/ ?>