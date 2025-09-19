<!-- SIDEBAR START -->
<aside class="<?php echo e(!user()->dark_theme ? 'sidebar-' . $appTheme->sidebar_theme : ''); ?>">
    <!-- MOBILE CLOSE SIDEBAR PANEL START -->
    <div class="mobile-close-sidebar-panel w-100 h-100" onclick="closeMobileMenu()" id="mobile_close_panel"></div>
    <!-- MOBILE CLOSE SIDEBAR PANEL END -->
    <?php
        $userName = (session()->has('clientContact') && session('clientContact')) ? session('clientContact')->contact_name : user()->name;
    ?>
    <!-- MAIN SIDEBAR START -->
    <div class="main-sidebar" id="mobile_menu_collapse">
        <!-- SIDEBAR BRAND START -->
        <div class="sidebar-brand-box dropdown cursor-pointer <?php echo e(user()->dark_theme ? 'bg-dark' : ''); ?>">
            <div class="dropdown-toggle sidebar-brand d-flex align-items-center justify-content-between  w-100"
                type="link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <?php if(companyOrGlobalSetting()->sidebar_logo_style !== 'full'): ?>
                    <!-- SIDEBAR BRAND NAME START -->
                    <div class="sidebar-brand-name">
                        <h1 class="mb-0 f-16 f-w-500 text-white-shade mt-0" data-placement="bottom" data-toggle="tooltip"
                            data-original-title="<?php echo e($appName); ?>"><?php echo e($appName); ?>

                            <i class="icon-arrow-down icons pl-2"></i>
                        </h1>
                        <div class="mb-0 position-relative pro-name">
                            <span class="bg-light-green rounded-circle"></span>
                            <p class="f-13 text-lightest mb-0" data-placement="bottom" data-toggle="tooltip"
                                data-original-title="<?php echo e($userName); ?>"><?php echo e($userName); ?></p>
                        </div>
                    </div>
                    <!-- SIDEBAR BRAND NAME END -->
                    <!-- SIDEBAR BRAND LOGO START -->
                    <div class="sidebar-brand-logo">
                        <img src="<?php echo e(companyOrGlobalSetting()->logo_url); ?>">
                    </div>
                    <!-- SIDEBAR BRAND LOGO END -->
                <?php else: ?>
                    <!-- SIDEBAR BRAND NAME START -->
                    <div class="sidebar-brand-name">
                        <h1 class="mb-0 f-16 f-w-500 text-white-shade mt-0" data-placement="bottom"
                            data-toggle="tooltip" data-original-title="<?php echo e($appName); ?>">
                            <img src="<?php echo e(companyOrGlobalSetting()->logo_url); ?>">
                        </h1>
                    </div>
                    <!-- SIDEBAR BRAND NAME END -->
                    <!-- SIDEBAR BRAND LOGO START -->
                    <div class="sidebar-brand-logo text-white-shade f-12">
                        <i class="icon-arrow-down icons pl-2"></i>
                    </div>
                    <!-- SIDEBAR BRAND LOGO END -->
                <?php endif; ?>
            </div>
            <!-- DROPDOWN - INFORMATION -->
            <div class="dropdown-menu dropdown-menu-right sidebar-brand-dropdown ml-3"
                aria-labelledby="dropdownMenuLink" tabindex="0">
                <div class="d-flex justify-content-between align-items-center profile-box">
                    <a <?php if(!in_array('client', user_roles())): ?> href="<?php echo e(route('employees.show', user()->id)); ?>" <?php endif; ?> >
                            <div class="profileInfo d-flex align-items-center mr-1 flex-wrap">
                                <div class="profileImg mr-2">
                                    <img class="h-100" src="<?php echo e($user->image_url); ?>"
                                        alt="<?php echo e($userName); ?>">
                                </div>
                                <div class="ProfileData">
                                    <h3 class="f-15 f-w-500 text-dark" data-placement="bottom" data-toggle="tooltip"
                                        data-original-title="<?php echo e($userName); ?>"><?php echo e($userName); ?></h3>
                                    <p class="mb-0 f-12 text-dark-grey"><?php echo e(user()->employeeDetail->designation->name ?? ''); ?></p>
                                </div>
                        </div>
                    </a>
                    <a href="<?php echo e(route('profile-settings.index')); ?>" data-toggle="tooltip"
                        data-original-title="<?php echo e(__('app.menu.profileSettings')); ?>">
                            <i class="side-icon bi bi-pencil-square"></i>
                    </a>
                </div>

                <?php if(!in_array('client', user_roles()) && ($sidebarUserPermissions['add_employees'] == 4 || $sidebarUserPermissions['add_employees'] == 1) && in_array('employees', user_modules())): ?>
                    <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark invite-member"
                        href="javascript:;">
                        <span><?php echo app('translator')->get('app.inviteMember'); ?> <?php echo e($companyName); ?></span>
                        <i class="side-icon bi bi-person-plus"></i>
                    </a>
                <?php endif; ?>

                <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark"
                    href="javascript:;">
                    <label for="dark-theme-toggle"><?php echo app('translator')->get('app.darkTheme'); ?></label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="dark-theme-toggle"
                            <?php if(user()->dark_theme): ?> checked <?php endif; ?>>
                        <label class="custom-control-label f-14" for="dark-theme-toggle"></label>
                    </div>
                </a>
                <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark"
                    href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <?php echo app('translator')->get('app.logout'); ?>
                    <i class="side-icon bi bi-power"></i>
                </a>
            </div>
        </div>
        <!-- SIDEBAR BRAND END -->

        <!-- SIDEBAR MENU START -->
        <div class="sidebar-menu <?php echo e(user()->dark_theme ? 'bg-dark' : ''); ?>" id="sideMenuScroll">
            <?php echo $__env->make('sections.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- SIDEBAR MENU END -->
    </div>
    <!-- MAIN SIDEBAR END -->
    <!-- Sidebar Toggler -->
    <div
        class="text-center d-flex justify-content-between align-items-center position-fixed sidebarTogglerBox <?php echo e(user()->dark_theme ? 'bg-dark' : ''); ?>">
        <button class="border-0 d-lg-block d-none text-lightest font-weight-bold" id="sidebarToggle"></button>

        <p class="mb-0 text-dark-grey px-1 py-0 rounded f-10">v<?php echo e(\Illuminate\Support\Facades\File::get('version.txt')); ?></p>
    </div>
    <!-- Sidebar Toggler -->
</aside>
<!-- SIDEBAR END -->

<script>
    $(document).ready(function() {

        $('.invite-member').click(function() {
            const url = "<?php echo e(route('employees.invite_member')); ?>";
            $(MODAL_LG + ' ' + MODAL_HEADING).html('...');
            $.ajaxModal(MODAL_LG, url);
        });

        $('#dark-theme-toggle').change(function() {
            const darkTheme = ($(this).is(':checked')) ? '1' : '0'

            $.easyAjax({
                type: 'POST',
                url: "<?php echo e(route('profile.dark_theme')); ?>",
                blockUI: true,
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>',
                    'darkTheme': darkTheme
                },
                success: function(response) {
                    if (response.status === 'success') {
                        window.location.reload();
                    }
                }
            });

        });

    });
</script>
<?php /**PATH /home/u594498081/domains/crm.rrpateloverseas.com/public_html/resources/views/sections/sidebar.blade.php ENDPATH**/ ?>