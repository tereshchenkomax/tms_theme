
<?php if (!defined('FW')) die('Forbidden');

$current_position = fw_ext_sidebars_current_position_get();

if ($current_position !== 'position-id') {
    echo fw_ext_sidebars_show('red');
}

if ($current_position === 'position-id-2') {
    echo fw_ext_sidebars_show('blue');
}

if ($current_position === 'position-id-3') {
    echo fw_ext_sidebars_show('yellow');
}
