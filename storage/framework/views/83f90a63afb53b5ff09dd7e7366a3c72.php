<?php if(in_array('follow_ups', $activeWidgets) && $leadAgent && in_array('leads', user_modules())): ?>
    <div class="col-md-6 mb-3">
        <div
            class="bg-white p-20 rounded b-shadow-4 d-flex justify-content-between align-items-center mt-3 mt-lg-0 mt-md-0">
            <div class="d-block ">
                <h5 class="f-15 f-w-500 mb-20 text-darkest-grey"> <?php echo app('translator')->get('modules.dashboard.followUps'); ?> </h5>
                <div class="d-flex">
                    <p class="mb-0 f-21 font-weight-bold text-blue d-grid mr-5">
                        <?php echo e($pendingDealFollowUps); ?><span
                            class="f-12 font-weight-normal text-lightest"><?php echo app('translator')->get('app.pending'); ?></span>
                    </p>

                    <p class="mb-0 f-21 font-weight-bold text-success d-grid">
                        <?php echo e($completedDealFollowUps); ?><span
                            class="f-12 font-weight-normal text-lightest"><?php echo app('translator')->get('app.upcoming'); ?></span>
                    </p>
                </div>
            </div>
            <div class="d-block">
                <i class="fa fa-thumbs-up text-lightest f-27"></i>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/dashboard/employee/widgets/follow_ups.blade.php ENDPATH**/ ?>