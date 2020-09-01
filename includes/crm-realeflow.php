<?php


function realeflow_crm_callback($atts) {
    global $crm_form;
    $atts = shortcode_atts(
        array(
            'redirect' => get_site_url() . '/thank-you/',
            'button' => 'Get My Fair Cash Offer!',
            'id' => '',
            'autoresponder' => '',
            'contact' => 'other',
        ), $atts, 'realeflow_crm' );
    $id = $atts["id"];
    $autoresponder = $atts["autoresponder"];
    $redirect = $atts["redirect"];
    $contact = $atts["contact"];
    $button = $atts["button"];


    $ret = '<div class="gform_wrapper webnotik-custom webnotik-form">';
    $ret .= '<div class="message"></div>';
    $ret .= '
<form name="form1" method="post" action="https://awesome.realeflow.com/Contacts/Submit" class="widget-form '.$contact.'form">
    <input name="siteId" id="siteId" type="hidden" value="'.$id.'">
    <input name="redirectUrl" id="general-redirectUrl" type="hidden" value="'.$redirect.'">
    <input name="ar" id="arId" type="hidden" value="'.$autoresponder.'">
    <input name="contacttype" type="hidden" value="'.$contact.'">
    <input name="source" id="source" type="hidden" value="organic">
    <div id="general_opt" class="optin rf-optin-container rf-optin-container3">
        <div class="rf-optin-arrow-down"></div>
        <div class="fields">
            <input class="rf-optin-input" name="name" id="name" type="text" maxlength="100" placeholder="Enter Fullname">            
            <input class="rf-optin-input" type="Text" id="email" name="email" value="" maxlength="100" placeholder="Enter E-mail">            
            <input class="rf-optin-input" type="Text" id="mobile" name="mobile" value="" maxlength="25" placeholder="Enter Phone"> 
        </div>
        <div class="rf-optin-button">
            <button name="FinishButton" style="margin-top: 15px;" value="Submit" id="realeflow_button" class="rf-optin-submit submit">
            '.$button.'
            </button>
        </div>
    </div>
</form>';
    $ret .= '</div>';
    return $ret;
}
add_shortcode( 'realeflow_crm', 'realeflow_crm_callback' );