<?php

/**
* $Id: admin.php 1447 2008-04-06 04:41:21Z malanciault $
* Module: SmartHelp
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_AM_SCLONE_CLONE_A_MODULE", "Duplicar un módulo");
define("_AM_SCLONE_CLONEFORM_TILE", "Duplicar un módulo");
define("_AM_SCLONE_CLONEFORM_DSC", "Complete el siguiente formulario para duplicar un módulo instalado en su sitio.");
define("_AM_SCLONE_MODULE_SELECT", "Seleccione un módulo a duplicar");
define("_AM_SCLONE_MODULE_SELECT_DSC", "Seleccione el módulo que le gustaría duplicar. Si el mismo no está en la lista que aparece significa que todavía no es posible usar SmartClone con él.");

define("_AM_SCLONE_NEWNAME", "Nuevo nombre del módulo");
define("_AM_SCLONE_NEWNAME_DSC", "Introduzca el nombre para el módulo que se creará en el proceso de duplicación. <br />Por ejemplo: <b>SmartSection2</b>");

define("_AM_SCLONE_NEW_MODULE_ALREADY_EXISTS", "Ya existe un módulo denominado '%s'. Por favor, elija un nombre diferente.");
define("_AM_SCLONE_CHANGE_PERMISSION_FAILED", "No fue posible cambiar los permisos para crear el módulo duplicado.");
define("_AM_SCLONE_INVALID_SELECTION", "Seleccione el módulo a duplicar e introduzca el nombre para el duplicado.");
define("_AM_SCLONE_SUCCESS", "El módulo ha sido duplicado con éxito");

define("_AM_SCLONE_INSTALL_CHECK", "¿Le gustaría iniciar el proceso de instalación del módulo duplicado directamente una vez que haya concluido el proceso de duplicado?");

define("_AM_SCLONE_WHERE_OTHER_MODULE", "¿Donde están los demás módulos ?");
define("_AM_SCLONE_WHERE_OTHER_MODULE_EXP", "Para que un módulo aparezca en esta caja de selección tiene que estar en su sitio y es necesario que el mismo disponga de un plugin en la carpeta /smartclone/plugins. Si le gustaría poder duplicar un módulo para el que todavía no se ha escrito el pñugin necesario, le animamos a crearlo por usted mismo. Simplemente copie uno de los ya existentes en otra carpeta y renómbrelo con el nombre del nuevo módulo. Hemos documentado la estructura del plugin directamente en el archivo, de modo que, por favor, lea todo el código comentado.");
?>