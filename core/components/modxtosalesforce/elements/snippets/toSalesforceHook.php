<?php
/**
 * toSalesforceHook
 *
 * Copyright 2021 by Anton Tarasov <contact@antontarasov.com>
 *
 * MODXToSalesforce is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * MODXToSalesforce is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MODXToSalesforce; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxtosalesforce
 */
/**
 * toSalesforceHook
 *
 * Simple snippet for Salesforce WebToLead implementation
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 */

$formit =& $hook->formit;
$allFormFields = $hook->getValues();

// Input parameters

$sfUID = $modx->getOption('sfUID', $formit->config, $modx->getOption('modxtosalesforce_salesforce_user_id'));
$sfURL = $modx->getOption('sfURL', $formit->config, $modx->getOption('modxtosalesforce_salesforce_url'));
$sfExcludeFields = $modx->getOption('sfExcludeFields', $formit->config, $modx->getOption('modxtosalesforce_exclude_fields'));

if (empty($sfUID)) {
    $message = 'Please specify Salesforce User ID'; // $modx->lexicon()
    $modx->log(xPDO::LOG_LEVEL_ERROR, $message, '', 'toSalesforceHook');
    $hook->hasErrors();
    $modx->setPlaceholder('fi.validation_error', true);
    $modx->setPlaceholder('fi.validation_error_message', $message);
    return false;
}

if (empty($sfURL)) {
    $message = 'Please specify Salesforce form URL'; // $modx->lexicon()
    $modx->log(xPDO::LOG_LEVEL_ERROR, $message, '', 'toSalesforceHook');
    $hook->hasErrors();
    $modx->setPlaceholder('fi.validation_error', true);
    $modx->setPlaceholder('fi.validation_error_message', $message);
    return false;
}

$purePOST = array();

// Loop through the $allFormFields data and process it
foreach ($allFormFields as $key => $value) {
    if (is_array($value)) {
        $imploded = implode(",", $value);
        $purePOST[] = '' . $key . '=' . $imploded . '';
    } else {
        $valueVer1 = str_replace('&', '%26', $value);
        $valueVer2 = str_replace('>', '%3E', $valueVer1);
        $purePOST[] = '' . $key . '=' . $valueVer2 . '';
    }
}

// Add SF UID
$purePOST[] = 'oid=' . $sfUID . '';

// Remove unnecessary fields

if(!empty($sfExcludeFields)){
    $exclude_list = explode(",", $sfExcludeFields);
    foreach($exclude_list as $field_key){
        unset($purePOST[$field_key]);
    }
}

//Init CURL connection
$ch = curl_init();

//Set CURL options including headers, SF URL and POST data
$curl_options = array(
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_URL => $sfURL,
    CURLOPT_POST => count($purePOST),
    CURLOPT_POSTFIELDS => join("&", $purePOST)
);

curl_setopt_array($ch, $curl_options);

//Send CURL request
$result = curl_exec($ch);

if(curl_errno($ch)){
    $modx->log(xPDO::LOG_LEVEL_ERROR, "curl_error: ".curl_error($ch), '', 'toSalesforceHook');
    //close cURL connection
    curl_close($ch);
    return false;
}else{
    //close cURL connection
    curl_close($ch);
    return true;
}