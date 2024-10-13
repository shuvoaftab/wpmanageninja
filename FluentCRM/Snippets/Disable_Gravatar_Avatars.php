<?php
// Add a filter to override the Gravatar URL
add_filter('fluent_crm/get_avatar', function ($avatar_url, $email) {
    // Use a condition to disable Gravatar, e.g., by returning a different image
    $disable_gravatar = apply_filters('fluent_crm/disable_gravatar', false);

    if ($disable_gravatar) {
        // If no name is available, extract one from the email (before the @ symbol)
        $name = substr($email, 0, strpos($email, '@')); 

        // Return a custom fallback image URL with the extracted or default name
        return 'https://ui-avatars.com/api/' . urlencode($name) . '/128';
    }

    // Otherwise, return the Gravatar URL as is
    return $avatar_url;
}, 10, 2);

// Optionally, add this filter to disable Gravatar globally
add_filter('fluent_crm/disable_gravatar', '__return_true');
