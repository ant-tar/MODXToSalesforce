# MODX To Salesforce
![MODXToSalesforce version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg) ![MODX Extra by Anton Tarasov](https://img.shields.io/static/v1?label=MODX%20Extra%20by&message=Anton%20Tarasov&color=green) ![MODX version](https://img.shields.io/static/v1?label=MODX%20version&message=>2.8&color=blue)

*Web-To-Lead* implementation for transfering leads from website HTML forms to Salesforce.  

## Configuration ##
To use **MODX To Salesforce** as Formit hook (using `toSalesforceHook` snippet), you have to specify *Salesforce User ID*. Please check [this link](https://help.salesforce.com/articleView?id=000312782&type=1&mode=1) to know how and where find your user ID.

This can be configured with System Settings or alternatively can be overridden via FormIt parameters:

### System Settings ###

**MODX to Salesforce** provides some new System Settings: 
- `modxtosalesforce_salesforce_user_id`
- `modxtosalesforce_salesforce_url`
- `modxtosalesforce_exclude_fields`

### FormIt parameters ###
- `sfUID` (optional, defaults to `modxtosalesforce_salesforce_user_id` System Setting)
- `sfURL` (optional, defaults to `modxtosalesforce_salesforce_url` System Setting)
- `sfExcludeFields` (optional, default to `modxtosalesforce_exclude_fields` System Setting)

### Salesforce settings ###
You should make sure *Web-To-Lead* mechanism is turned on on the Salesforce side. To do this please go to *Setup* ("Gear" icon), and use *Quick find* field there - just type **"Web-to-lead"** and click on appropriate menu item. Here you should see corresponding checkbox enabled, activate it otherwise.

Also on that page you can generate a simple HTML form with all possible basic lead creation fields that Salesforce supports out of the box. For your convenience this form is already included in **MODX to Salesforce** package, look for `sfFormExampleTpl` chunk. Basic SF fields are: `First Name`, `Last Name`, `Email`, `Company`, `City`, `State/Province`, `Salutation`, `Title`, `Phone`, `Mobile`, `Fax`, `Street`, `Zip`, `Country`, `Description`, `Lead Source`, `Industry`, `Rating`, `Annual Revenue`, `Employees`, `Campaign_ID`, `Email Opt Out` , `Fax Opt Out`, `Do Not Call`

### Simple Web-to-lead form ###

This form is also useful for debugging lead submission via a *Web-To-Lead*, if for some reason you want to test the mechanism before using hook - it is really easier with this form! It can also be used on its own without calling hook through `Formit` snippet at all. Just replace `YOUR_SF_ID`,  `YOUR_WEBSITE_RETURN_URL` and `YOUR@EMAIL.COM` placeholders with appropriate values.  

## Example ##
Simple example how to generate lead in Salesforce using *Web-To-Lead* mechanism.
```
[[!FormIt?
    &hooks=`toSalesforceHook`
    &validate=`first_name:required,email:email:required`
]]

<form action="[[~[[*id]]]]" method="post">  
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" value="[[!+fi.first_name]]" />
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="[[!+fi.email]]" />
    <input type="submit" value="Submit" />
</form>

```


