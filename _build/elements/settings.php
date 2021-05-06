<?php

return [
    'salesforce_user_id' => [
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'general',
    ],
    'return_url' => [
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'general',
    ],
    'salesforce_url' => [
        'xtype' => 'textfield',
        'value' => 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8',
        'area' => 'general',
    ],
    'exclude_fields' => [
        'xtype' => 'textfield',
        'value' => 'nospam:blank,g-recaptcha-response,nospam',
        'area' => 'general',
    ],
];