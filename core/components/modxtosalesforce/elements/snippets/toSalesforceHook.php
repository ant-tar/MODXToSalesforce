<?php

/**
 * MODX to Salesforce FormIt hook
 *
 */

/**
 * toSalesforceHook
 *
 * Copyright 2021 by Anton Tarasov <contact@antontarasov.com>
 *
 * modxToSalesforce is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * UserMicroData is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * UserMicroData; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxtosalesforce
 */
/**
 * toSalesforceHook
 *
 * Simple snippet for Salesforce WebToLead implementation.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 */

// Snippet parameters
$uid = intval($modx->getOption('userID', $scriptProperties, $_GET['uid']));
$mode = $modx->getOption('mode', $scriptProperties, 'vCard');
$vTpl = $modx->getOption('vTpl', $scriptProperties, 'umcVCardTpl');
$vName = $modx->getOption('vName', $scriptProperties, 'vCard.vcf');
$hTpl = $modx->getOption('vTpl', $scriptProperties, 'umcHCardTpl');
$cName = $modx->getOption('companyName', $scriptProperties, $modx->getOption('site_name'));
$toPlaceholder = $modx->getOption('toPlaceholder', $scriptProperties, false);


//$formit =& $hook->formit;
//$values = $hook->getValues();




/*
// Sales force post url & variables

$url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';


//$url = 'https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
// sales force id here
$oid = '00D5A00000170Z1';

// Blank post holder.
$post_string = '';

$allFormFields = $hook->getValues();

// variable to hold cleaned up a version of $_POST data
$cleanPOST = array();

// Loop through the $allFormFields data and process it
foreach ($allFormFields as $key => $value) {
    if (is_array($value)) {
        $imploded = implode(",", $value);
        $cleanPOST[] = '' . $key . '=' . $imploded . '';
    } else {
        $valueMod1 = str_replace('&', '%26', $value);
        $valueMod2 = str_replace('>', '%3E', $valueMod1);
        $cleanPOST[] = '' . $key . '=' . $valueMod2 . '';
    }
}

// Add the Sales Force ID
$cleanPOST[] = 'oid=' . $oid . '';
$cleanPOST[] = 'sfga=' . $oid . '';

// Remove fields not needed for salesforce
unset($cleanPOST['nospam:blank']);
unset($cleanPOST['getip']);
unset($cleanPOST['g-recaptcha-response']);
unset($cleanPOST['nospam']);

//Create a query string with join function separted by &
$post_string = join("&", $cleanPOST);

//Init CURL connection
$ch = curl_init();

//Set CURL options including headers, SF URL and POST data
$curl_options = array(
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_URL => $url,
    CURLOPT_POST => count($cleanPOST),
    CURLOPT_POSTFIELDS => $post_string
);

curl_setopt_array($ch, $curl_options);

//Execute SalesForce web to lead PHP cURL
$result = curl_exec($ch);

//if(curl_errno($ch)){\n        $modx->log(1, \"cuurl_error=\".curl_error($ch));\n        //var_dump($output);\n    }

//close cURL connection


curl_close($ch);

*/
//$xpdo->log(xPDO::LOG_LEVEL_ERROR,'An error occurred.','','toSalesForce');
return false;
