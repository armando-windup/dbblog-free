<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_1_0($module)
{
    $sql = 'ALTER TABLE `'._DB_PREFIX_.'dbblog_post` ADD `date_publish` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;';
    if (!Db::getInstance()->execute($sql)) {
        return false;
    }
    return true;
}