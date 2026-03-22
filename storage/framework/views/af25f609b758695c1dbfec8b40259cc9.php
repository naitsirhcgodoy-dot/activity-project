<aside id="sidebar" class="sidebar" aria-label="Primary navigation">
    <div class="sidebar-top">
        <strong class="sidebar-title"></strong>
    </div>

    <nav class="sidebar-nav">
        <ul>
            <li class="<?php if(request()->routeIs('home')): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('home')); ?>">Login</a>
            </li>
            <li class="<?php if(request()->routeIs('register')): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('register')); ?>">Register</a>
            </li>
                <li class="<?php if(request()->routeIs('attendances.index')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('attendances.index')); ?>">Attendance</a>
                </li>
            <li class="<?php if(request()->routeIs('page.show') && request()->route('id') == 1): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('page.show', 1)); ?>">Dashboard</a>
            </li>
            <li class="<?php if(request()->routeIs('page.show') && request()->route('id') == 2): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('page.show', 2)); ?>">Details</a>
            </li>
            <li class="<?php if(request()->routeIs('page.show') && request()->route('id') == 3): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('page.show', 3)); ?>">Email</a>
            </li>
            <li class="<?php if(request()->routeIs('page.show') && request()->route('id') == 4): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('page.show', 4)); ?>">Gallery</a>
            </li>
            <li class="<?php if(request()->routeIs('page.show') && request()->route('id') == 5): ?> active <?php endif; ?>">
                <a href="<?php echo e(route('page.show', 5)); ?>">Settings</a>
            </li>
        </ul>
    </nav>

    <div class="sidebar-bottom">
        
    </div>
</aside><?php /**PATH C:\laragon\www\GODOY\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>