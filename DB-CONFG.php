<?php
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DBNAME","OFG");


// Google API configuration
define('GOOGLE_CLIENT_ID', '657501653081-djobd8an8rc4s5p69odf0jglprp46kti.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar');
define('REDIRECT_URI', 'http://localhost/SWE444/google_calendar_event_sync.php');

// Start session
if(!session_id()) session_start();

// Google OAuth URL
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online';

// Start session
if(!session_id()) session_start();

// Google OAuth URL
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online';
