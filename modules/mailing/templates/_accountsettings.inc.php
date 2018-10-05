<form accept-charset="<?= \thebuggenie\core\framework\Context::getI18n()->getCharset(); ?>" action="<?= make_url('account_save_module_settings', array('target_module' => $module_name)); ?>" onsubmit="TBG.Main.Profile.updateModuleSettings('<?= make_url('account_save_module_settings', array('target_module' => $module_name)); ?>', '<?= $module_name; ?>'); return false;" method="post" id="profile_<?= $module_name; ?>_form">
    <h3><?php echo __('Email notifications'); ?></h3>
    <p><?php echo __('In addition to being notified when logging in, you can choose to also be notified via email for issues or articles you subscribe to. The following settings control when you receive emails.'); ?></p>
    <table class="padded_table" cellpadding=0 cellspacing=0>
        <?php foreach ($notificationsettings as $key => $description): ?>
            <tr>
                <td style="width: auto; border-bottom: 1px solid #DDD;"><label for="<?php echo $key; ?>_yes"><?php echo $description ?></label></td>
                <td style="width: 50px; text-align: center; border-bottom: 1px solid #DDD;" valign="middle">
                    <input type="checkbox" class="fancycheckbox" name="mailing_<?php echo $key; ?>" value="1" id="<?php echo $key; ?>_yes"<?php if ($tbg_user->getNotificationSetting($key, false, 'mailing')->isOn()): ?> checked<?php endif; ?>><label for="<?= $key; ?>_yes"><?= fa_image_tag('check-square-o', ['class' => 'checked']) . fa_image_tag('square-o', ['class' => 'unchecked']); ?></label>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php include_component('main/myaccountsettingsformsubmit', array('module' => $module)); ?>
</form>
