<?php
/**
 * @author Ibrahim Sharif <shuvoaftabibrahim@gmail.com>
 * Modify Unsubscription Page Content in FluentCRM
 * fluent-crm/app/Hooks/Handlers/ExternalPages.php
 * 
 * HTML formatting Unsupported till 2.8.20 tested.
 */


 function newUnsubscriptionPageModern($content){
    
    $content = []; // Empty or Remove Built-in Content
    
    $heading = '';
    $heading_description = '';
    $email_label = '';
    $reason_label = '';
    $button_text = '';
    
    $content['heading']             = __($heading, 'fluent-crm');
    $content['heading_description'] = __($heading_description, 'fluent-crm');
    $content['email_label']         = __($email_label, 'fluent-crm');
    $content['reason_label']        = __($reason_label, 'fluent-crm');
    $content['button_text']         = __($button_text, 'fluent-crm');
    
    return $content;
}

add_filter('fluent_crm/unsubscribe_texts', 'newUnsubscriptionPageModern');
