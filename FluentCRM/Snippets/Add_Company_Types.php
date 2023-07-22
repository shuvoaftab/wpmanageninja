<?php

/*
fluent-crm/app/Services/Helper.php:1706

*/

function newCompanyTypes($types){
    
    $types = []; // Empty Types or Remove Built-in Types
    $types['google'] = __('Google', 'fluent-crm');
    $types['facebook'] = __('Facebook', 'fluent-crm');
    $types['amazon'] = __('Amazon', 'fluent-crm');
    
    return $types;
}

add_filter('fluent_crm/company_types', 'newCompanyTypes');
