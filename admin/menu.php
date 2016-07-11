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

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

$module_handler  = xoops_gethandler('module');
$module          = $module_handler->getByDirname(basename(dirname(dirname(__FILE__))));
$pathIcon32 = '../../' . $module->getInfo('icons32');
xoops_loadLanguage('modinfo', $module->dirname());

$adminmenu = array();

$i                      = 1;
$adminmenu[$i]["title"] = _MI_XMCONTENT_MENU_HOME;
$adminmenu[$i]["link"]  = "admin/index.php";
$adminmenu[$i]["desc"]  = _MI_XMCONTENT_MENU_HOME_DESC;
$adminmenu[$i]["icon"]  = $pathIcon32 . '/home.png';
$i++;
$adminmenu[$i]["title"] = _MI_XMCONTENT_MENU_CONTENT;
$adminmenu[$i]["link"]  = "admin/content.php";
$adminmenu[$i]["desc"]  = _MI_XMCONTENT_MENU_CONTENT_DESC;
$adminmenu[$i]["icon"]  = $pathIcon32 . '/content.png';
$i++;
$adminmenu[$i]["title"] = _MI_XMCONTENT_MENU_ABOUT;
$adminmenu[$i]["link"]  = "admin/about.php";
$adminmenu[$i]["desc"]  = _MI_XMCONTENT_MENU_ABOUT_DESC;
$adminmenu[$i]["icon"]  = $pathIcon32 . '/about.png';
