<?php

/*
fluent-crm/app/Services/Helper.php:1706

*/

function newCompanyTypes(){
    return [
        'Google',
        'Facebook',
        'Amazon'
    ];
}

add_filter('fluent_crm/company_types', 'newCompanyTypes');
