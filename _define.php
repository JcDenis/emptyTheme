<?php
/**
 * @file
 * @brief       The theme emptyTheme definition
 * @ingroup     emptyTheme
 *
 * @defgroup    emptyTheme Plugin emptyTheme.
 *
 * This is an empty theme.
 *
 * @author      Jean-Christian Denis (author)
 * @copyright   AGPL-3.0
 */
$this->registerModule(
    'Empty theme',
    'This is an empty theme',
    'Jean-Christian Denis',
    '1.0',
    [
        //'requires'          => [['core', '2.28']],
        //'standalone_config' => true,
        'type'    => 'theme',
        'tplset'  => 'dotty',
        'support' => 'https://github.com/JcDenis/emptyTheme/issues',
    ]
);
