<?php

/**
* $Id$
* Module: SmartClone
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("SMARTCLONE_NOCPFUNC")) {
	include_once '../../../include/cp_header.php';
}

include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";

include_once XOOPS_ROOT_PATH.'/modules/smartclone/include/common.php';

if( !defined("SMARTCLONE_ADMIN_URL") ){
	define('SMARTCLONE_ADMIN_URL', SMARTCLONE_URL . "admin/");
}

if( !defined("SMARTCLONE_ADMIN_ROOT_PATH") ){
	define('SMARTCLONE_ADMIN_ROOT_PATH', SMARTCLONE_ROOT_PATH . "admin/");
}
smart_loadCommonLanguageFile();
?>