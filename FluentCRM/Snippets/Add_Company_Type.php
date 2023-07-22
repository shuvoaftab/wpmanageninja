<?php
/**
 * @author Ibrahim Sharif <shuvoaftabibrahim@gmail.com>
 * Add new Comany Type in FluentCRM
 * fluent-crm/app/Services/Helper.php:companyTypes()
 */


function newCompanyTypes($types){
    
    //$types = []; // Empty Types or Remove Built-in Types
    $types['google'] = __('Google', 'fluent-crm');
    $types['facebook'] = __('Facebook', 'fluent-crm');
    $types['amazon'] = __('Amazon', 'fluent-crm');
    
    return $types;
}

add_filter('fluent_crm/company_types', 'newCompanyTypes');
