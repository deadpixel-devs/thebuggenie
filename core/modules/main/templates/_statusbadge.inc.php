<div class="status_badge" style="background-color: <?php echo ($status instanceof \thebuggenie\core\entities\Datatype) ? $status->getColor() : '#FFF'; ?>;" title="<?php echo ($status instanceof \thebuggenie\core\entities\Datatype) ? __($status->getName()) : __('Status not determined'); ?>"><span><?php echo ($status instanceof \thebuggenie\core\entities\Datatype) ? $status->getName() : __('Unknown'); ?></span></div>