<?php
/**
 * @author Ibrahim Sharif <shuvoaftabibrahim@gmail.com>
 * Add new Contact Type in FluentCRM.
 * fluent-crm/app/Functions/helpers.php:fluentcrm_contact_types()
 */

function newContactTypes($allType){
    
    //$allType = []; // Empty Types or Remove Built-in Types
    $allType['social'] = __('Social Lead', 'fluent-crm');
    $allType['search'] = __('Search Lead', 'fluent-crm');
    
    return $allType;
}

add_filter('fluent_crm/contact_types', 'newContactTypes');
