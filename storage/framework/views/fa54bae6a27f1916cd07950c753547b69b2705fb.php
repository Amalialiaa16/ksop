<div class="card mb-4">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="card-title">
                <h5 class="text-nowrap mb-0 fw-bold"><?php echo e($disposition->status?->status); ?></h5>
                <small class="text-black"><?php echo e($disposition->to); ?></small>
            </div>
            <div class="card-title d-flex flex-row">
                <div class="d-inline-block mx-2 text-end text-black">
                    <small class="d-block text-secondary"><?php echo e(__('model.disposition.due_date')); ?></small>
                    <?php echo e($disposition->formatted_due_date); ?>

                </div>
                <div class="dropdown d-inline-block">
                    <button class="btn p-0" type="button" id="dropdown-disposition-<?php echo e($disposition->id); ?>" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-disposition-<?php echo e($disposition->id); ?>">
                        <a class="dropdown-item"
                           href="<?php echo e(route('transaction.disposition.edit', [$letter, $disposition])); ?>"><?php echo e(__('menu.general.edit')); ?></a>
                        <form action="<?php echo e(route('transaction.disposition.destroy', [$letter, $disposition])); ?>" class="d-inline"
                              method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <span
                                class="dropdown-item cursor-pointer btn-delete"><?php echo e(__('menu.general.delete')); ?></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <hr>
        <p><?php echo e($disposition->content); ?></p>
        <small class="text-secondary"><?php echo e($disposition->note); ?></small>
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\laravel-surat-menyurat-v1-main\resources\views/components/disposition-card.blade.php ENDPATH**/ ?>