<?php
/**
 * @author Ibrahim Sharif <shuvoaftabibrahim@gmail.com>
 * Add new Contact Status in FluentCRM. This will not let you send campaigns or emails to any contacts for these statuses.
 * fluent-crm/app/Functions/helpers.php:fluentcrm_subscriber_statuses()
 */

function newContactStatus($allStatus){
    
    $allStatus['test'] = __('Test', 'fluent-crm');
    $allStatus['failed'] = __('Failed', 'fluent-crm');
    
    return $allStatus;
}

add_filter('fluent_crm/contact_statuses', 'newContactStatus');
