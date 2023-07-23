<?php
/**
 * @author Ibrahim Sharif <shuvoaftabibrahim@gmail.com>
 * Improve Email Sending Performance in FluentCRM
 * fluent-crm/app/Services/Libs/Mailer/Handler.php
 */

// Emails Processed against Campaign Subscribers Per Request
add_filter('fluent_crm/process_subscribers_per_request', 500 ); 


// Email Sending Limits
add_filter('fluent_crm/email_sending_per_chunk', 200);
