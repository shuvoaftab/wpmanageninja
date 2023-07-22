<?php
/**
 * @author Ibrahim Sharif <shuvoaftabibrahim@gmail.com>
 * Modify Unsubscription Page Content in FluentCRM
 * fluent-crm/app/Hooks/Handlers/ExternalPages.php
 */


 function newUnsubscriptionPage($content){
    
    $content = []; // Empty or Remove Built-in Content
    
    $content['heading']             = __('Unsub', 'fluent-crm');
    $content['heading_description'] = __('We\'re sorry', 'fluent-crm');
    $content['email_label']         = __('Your Email ', 'fluent-crm');
    $content['reason_label']        = __('Please let us', 'fluent-crm');
    $content['button_text']         = __('Unsubs', 'fluent-crm');
    
    return $content;
}

add_filter('fluent_crm/unsubscribe_texts', 'newUnsubscriptionPage');
