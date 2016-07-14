<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * xmcontent module
 *
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          Mage Gregory (AKA Mage)
 */

$modversion['name']                = _MI_XMCONTENT_NAME;
$modversion['version']             = '0.1';
$modversion['description']         = _MI_XMCONTENT_DESC;
$modversion['credits']             = 'G. Mage';
$modversion['author']              = 'G. Mage';
$modversion['nickname']            = 'Mage';
$modversion['license']             = 'GNU GPL';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['official']            = 1;
$modversion['image']               = 'images/xmcontent_logo.png';
$modversion['dirname']             = 'xmcontent';
$modversion['dirmoduleadmin']      = 'Frameworks/moduleclasses';
$modversion['icons16']             = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32']             = 'Frameworks/moduleclasses/icons/32';
$modversion['help']                = 'page=help';

//about
$modversion['release_date']         = '2016/07/31';
$modversion['module_website_url']   = 'http://www.xoops.org/';
$modversion['module_website_name']  = 'XOOPS';
$modversion['module_status']        = 'Alpha';
$modversion['min_php']              = '5.3';
$modversion['min_xoops']            = '2.5.8';
$modversion['min_db']               = array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');

// Admin menu
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Templates
$i                                          = 1;
$modversion['templates'][$i]['file']        = 'xmcontent_index.tpl';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file']        = 'xmcontent_content.tpl';
$modversion['templates'][$i]['description'] = '';
// Menu
$modversion['hasMain'] = 1;

// Mysql file
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

// Tables created by sql file (without prefix!)
$modversion['tables'][1] = 'xmcontent_content';

// Pref.

$modversion['config'][] = array(
    'name'        => 'break',
    'title'       => '_MI_XMCONTENT_PREF_HEAD_INDEX',
    'description' => '',
    'formtype'    => 'line_break',
    'valuetype'   => 'textbox',
    'default'     => 'head'
);

$modversion['config'][] = array(
    'name'        => 'info_columncontent',
    'title'       => '_MI_XMCONTENT_PREF_COLUMNCONTENT',
    'description' => '_MI_XMCONTENT_PREF_COLUMNCONTENT_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'int',
    'default'     => 2,
    'options'     => array(1 => 1, 2 => 2, 3 => 3)
);

$modversion['config'][] = array(
    'name'        => 'index_header',
    'title'       => '_MI_XMCONTENT_PREF_HEADER',
    'description' => '_MI_XMCONTENT_PREF_HEADER_DESC',
    'formtype'    => 'textarea',
    'valuetype'   => 'text',
    'default'     => ''
);

$modversion['config'][] = array(
    'name'        => 'index_footer',
    'title'       => '_MI_XMCONTENT_PREF_FOOTER',
    'description' => '_MI_XMCONTENT_PREF_FOOTER_DESC',
    'formtype'    => 'textarea',
    'valuetype'   => 'text',
    'default'     => ''
);

$modversion['config'][] = array(
    'name'        => 'break',
    'title'       => '_MI_XMCONTENT_PREF_HEAD_ADMIN',
    'description' => '',
    'formtype'    => 'line_break',
    'valuetype'   => 'textbox',
    'default'     => 'head'
);

xoops_load('xoopseditorhandler');
$editor_handler = XoopsEditorHandler::getInstance();
$modversion['config'][] = array(
    'name'        => 'admin_editor',
    'title'       => '_MI_XMCONTACT_PREF_EDITOR',
    'description' => '',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'default'     => 'dhtmltextarea',
    'options'     => array_flip($editor_handler->getList())
);

$modversion['config'][] = array(
    'name'        => 'admin_perpage',
    'title'       => '_MI_XMCONTENT_PREF_ITEMPERPAGE',
    'description' => '',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => 15
);