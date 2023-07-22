<?php
/**
 * fluent-crm/app/Hooks/Handlers/ExternalPages.php:398
 */

 
function update_fluentcrm_unsubscribe_reasons( $reasons ) {
    
    $reasons = []; // Empty Reasons or Remove Built-in Reasons
    $reasons['your_custom_reason'] = __('Your Custom Reason', 'fluent-crm');
    $reasons['your_another_reason'] = __('Your Another Reason', 'fluent-crm');
    
    return $reasons;
 } 

add_filter( 'fluent_crm/unsubscribe_reasons', 'update_fluentcrm_unsubscribe_reasons' );
