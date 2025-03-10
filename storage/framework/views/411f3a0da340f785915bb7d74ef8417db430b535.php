<nav
    class="layout-navbar container-xxl zindex-5 navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
>
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <form action="<?php echo e(url()->current()); ?>">
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                        type="text"
                        name="search"
                        value="<?php echo e($search ?? ''); ?>"
                        class="form-control border-0 shadow-none"
                        placeholder="<?php echo e(__('navbar.search')); ?>"
                        aria-label="<?php echo e(__('navbar.search')); ?>"
                    />

                </div>
            </div>
        </form>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                   data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="<?php echo e(auth()->user()->profile_picture); ?>" alt
                             class="w-px-40 h-auto rounded-circle"/>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="<?php echo e(auth()->user()->profile_picture); ?>" alt
                                             class="w-px-40 h-auto rounded-circle"/>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block"><?php echo e(auth()->user()->name); ?></span>
                                    <small class="text-muted text-capitalize"><?php echo e(auth()->user()->role); ?></small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle"><?php echo e(__('navbar.profile.profile')); ?></span>
                        </a>
                    </li>
                    <?php if(auth()->user()->role == 'admin'): ?>
                    <li>
                        <a class="dropdown-item" href="<?php echo e(route('settings.show')); ?>">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle"><?php echo e(__('navbar.profile.settings')); ?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="dropdown-item cursor-pointer">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle"><?php echo e(__('navbar.profile.logout')); ?></span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
<?php /**PATH C:\laragon\www\laravel-surat-menyurat-v1-main\resources\views/components/navbar.blade.php ENDPATH**/ ?>