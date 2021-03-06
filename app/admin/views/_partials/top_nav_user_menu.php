<?php
$staffName = AdminAuth::getStaffName();
$staffEmail = AdminAuth::getStaffEmail();
$staffAvatar = md5(strtolower(trim($staffEmail)));
$staffGroupName = AdminAuth::staffGroupName();
$staffLocation = AdminAuth::getLocationName();
$staffEditLink = admin_url('staffs/edit/'.AdminAuth::getStaffId());
$logoutLink = admin_url('logout');
?>
<li class="nav-item dropdown">
    <a href="#" class="nav-link" data-toggle="dropdown">
        <img class="rounded-circle" src="<?= '//www.gravatar.com/avatar/'.$staffAvatar.'.png?s=64&d=mm'; ?>">
    </a>
    <div class="dropdown-menu">
        <div class="user-info">
            <span class="text-uppercase"><?= $staffGroupName; ?></span>
            <div class="username"><?= $staffName; ?></div>
            <?php if (strlen($staffLocation)) { ?>
                <span><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?= $staffLocation; ?></span>
            <?php } ?>
        </div>
        <!-- <a class="dropdown-item" href="<?= $staffEditLink; ?>">
            <i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;<?= lang('admin::lang.text_edit_details'); ?>
        </a> -->
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" href="<?= $logoutLink; ?>">
            <i class="fa fa-power-off fa-fw"></i>&nbsp;&nbsp;<?= lang('admin::lang.text_logout'); ?>
        </a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" target="_blank">
            <i class="fa fa-info-circle fa-fw"></i>&nbsp;&nbsp;<?= lang('admin::lang.text_about_tastyigniter'); ?>
        </a>
        <a class="dropdown-item" href="#" target="_blank">
            <i class="fa fa-book fa-fw"></i>&nbsp;&nbsp;<?= lang('admin::lang.text_documentation'); ?>
        </a>
        <a class="dropdown-item" href="#" target="_blank">
            <i class="fa fa-users fa-fw"></i>&nbsp;&nbsp;<?= lang('admin::lang.text_community_support'); ?>
        </a>
    </div>
</li>
