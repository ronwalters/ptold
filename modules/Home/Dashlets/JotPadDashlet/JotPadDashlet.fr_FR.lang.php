<?php

/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');




















$defaultText = 
<<<EOQ
<div style="padding-left:5px;">
Bienvenue dans <a href="http://www.sugarcrm.com">Sugar</a> 

Nouvelles fonctionnalités:<br /><br />
* Equipes dynamiques / Multi-équipes (PRO et ENT)<br />
* Amélioration de la gestion des mots de passe<br />
* Ajout de l'éditeur de Vue Mobile (PRO et ENT)<br />
* Amélioration de la gestion des emails<br />

Pour plus d'informations rendez vous sur <a href="http://www.sugarcrm.com/crm/university">Sugar University</a> (en anglais) <br />
</div>
EOQ
;


$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => 'Bloc Note',
                                         'LBL_DESCRIPTION'      => 'Un dashlet pour conserver vos notes',
                                         'LBL_SAVING'           => 'Sauvegarde du Bloc Note ...',
                                         'LBL_SAVED'            => 'Sauvegarder',
                                         'LBL_CONFIGURE_TITLE'  => 'Titre',
                                         'LBL_CONFIGURE_HEIGHT' => 'Auteur (1 - 300)',
                                         'LBL_DBLCLICK_HELP'    => 'Double cliquez pour éditer.',
                                         'LBL_DEFAULT_TEXT'     => $defaultText,
);
?>
