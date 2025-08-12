<?php
//	After application initialized event
// Place event code here.
// Use "Add Action" button to add code snippets.
// Security → Login page → After successful login
CustomQuery("SET @app_user_name = ".db_prepare_string($data["username"]));
CustomQuery("SET @app_user_full = ".db_prepare_string($data["full_name"]));


// Load helpers once, regardless of where PHPR put them

if (!defined('APP_HELPERS_LOADED')) {
    define('APP_HELPERS_LOADED', 1);
    require_once( getabspath("include/usercode.php") );
}

foreach ($paths as $p) {
    if (file_exists($p)) { require_once $p; break; }
}

;

?>