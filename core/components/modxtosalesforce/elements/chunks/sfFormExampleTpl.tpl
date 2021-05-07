<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->

<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

    <input type=hidden name="oid" value="YOUR_SF_ID">
    <input type=hidden name="retURL" value="YOUR_WEBSITE_RETURN_URL">

    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
    <!--  these lines if you wish to test in debug mode.                          -->
    <!--  <input type="hidden" name="debug" value=1>                              -->
    <!--  <input type="hidden" name="debugEmail"                                  -->
    <!--  value="YOUR@EMAIL.COM">                                                 -->
    <!--  ----------------------------------------------------------------------  -->

    <label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

    <label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

    <label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

    <label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" /><br>

    <label for="city">City</label><input  id="city" maxlength="40" name="city" size="20" type="text" /><br>

    <label for="state">State/Province</label><input  id="state" maxlength="20" name="state" size="20" type="text" /><br>

    <label for="salutation">Salutation</label><select  id="salutation" name="salutation"><option value="">--None--</option><option value="Mr.">Mr.</option>
        <option value="Ms.">Ms.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Dr.">Dr.</option>
        <option value="Prof.">Prof.</option>
    </select><br>

    <label for="title">Title</label><input  id="title" maxlength="40" name="title" size="20" type="text" /><br>

    <label for="url">Website</label><input  id="url" maxlength="80" name="url" size="20" type="text" /><br>

    <label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

    <label for="mobile">Mobile</label><input  id="mobile" maxlength="40" name="mobile" size="20" type="text" /><br>

    <label for="fax">Fax</label><input  id="fax" maxlength="40" name="fax" size="20" type="text" /><br>

    <label for="street">Street</label><textarea name="street"></textarea><br>

    <label for="zip">Zip</label><input  id="zip" maxlength="20" name="zip" size="20" type="text" /><br>

    <label for="country">Country</label><input  id="country" maxlength="40" name="country" size="20" type="text" /><br>

    <label for="description">Description</label><textarea name="description"></textarea><br>

    <label for="lead_source">Lead Source</label><select  id="lead_source" name="lead_source"><option value="">--None--</option><option value="Advertisement">Advertisement</option>
        <option value="Customer Event">Customer Event</option>
        <option value="Employee Referral">Employee Referral</option>
        <option value="External Referral">External Referral</option>
        <option value="Google AdWords">Google AdWords</option>
        <option value="Other">Other</option>
        <option value="Partner">Partner</option>
        <option value="Purchased List">Purchased List</option>
        <option value="Trade Show">Trade Show</option>
        <option value="Webinar">Webinar</option>
        <option value="Website">Website</option>
    </select><br>

    <label for="industry">Industry</label><select  id="industry" name="industry"><option value="">--None--</option><option value="Agriculture">Agriculture</option>
        <option value="Apparel">Apparel</option>
        <option value="Banking">Banking</option>
        <option value="Biotechnology">Biotechnology</option>
        <option value="Chemicals">Chemicals</option>
        <option value="Communications">Communications</option>
        <option value="Construction">Construction</option>
        <option value="Consulting">Consulting</option>
        <option value="Education">Education</option>
        <option value="Electronics">Electronics</option>
        <option value="Energy">Energy</option>
        <option value="Engineering">Engineering</option>
        <option value="Entertainment">Entertainment</option>
        <option value="Environmental">Environmental</option>
        <option value="Finance">Finance</option>
        <option value="Food &amp; Beverage">Food &amp; Beverage</option>
        <option value="Government">Government</option>
        <option value="Healthcare">Healthcare</option>
        <option value="Hospitality">Hospitality</option>
        <option value="Insurance">Insurance</option>
        <option value="Machinery">Machinery</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Media">Media</option>
        <option value="Not For Profit">Not For Profit</option>
        <option value="Other">Other</option>
        <option value="Recreation">Recreation</option>
        <option value="Retail">Retail</option>
        <option value="Shipping">Shipping</option>
        <option value="Technology">Technology</option>
        <option value="Telecommunications">Telecommunications</option>
        <option value="Transportation">Transportation</option>
        <option value="Utilities">Utilities</option>
    </select><br>

    <label for="rating">Rating</label><select  id="rating" name="rating"><option value="">--None--</option><option value="Hot">Hot</option>
        <option value="Warm">Warm</option>
        <option value="Cold">Cold</option>
    </select><br>

    <label for="revenue">Annual Revenue</label><input  id="revenue" name="revenue" size="20" type="text" /><br>

    <label for="employees">Employees</label><input  id="employees" name="employees" size="20" type="text" value="" /><br>

    <label for="Campaign_ID">Campaign</label><select  id="Campaign_ID" name="Campaign_ID"><option value="">--None--</option><option value="70109000000Tcdo">Customer Conference - Email Invite (Sample)</option>
        <option value="70109000000Tcdn">Widgets Webinar (Sample)</option>
        <option value="70109000000Tcdp">Customer Conference Event (Sample)</option>
    </select><br>

    <input type="hidden"  id="member_status" name="member_status" value="" /><br>

    <label for="emailOptOut">Email Opt Out</label><input  id="emailOptOut" name="emailOptOut" type="checkbox" value="1" /><br>

    <label for="faxOptOut">Fax Opt Out</label><input  id="faxOptOut" name="faxOptOut" type="checkbox" value="1" /><br>

    <label for="doNotCall">Do Not Call</label><input  id="doNotCall" name="doNotCall" type="checkbox" value="1" /><br>

    <input type="submit" name="submit">

</form>
