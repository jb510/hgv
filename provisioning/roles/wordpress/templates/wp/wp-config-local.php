<?php
// ** MySQL settings ** //
define('DB_NAME', 'wpe_{{ enviro }}');
define('DB_USER', 'wpe_{{ enviro }}');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// ** WP Debug settings ** //
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', true);

// ** WP Extra Debug settings ** //
//define('JETPACK_DEV_DEBUG', true);
//define('AUTOMATIC_UPDATER_DISABLED',true);
//define('CONCATENATE_SCRIPTS', false);
//define('WP_CACHE', false);

global $memecached_servers;

$memcached_servers = array(
    'default' => array(
        '127.0.0.1:11211'
    )
);

$wp_cache_key_salt = 'wpe_{{ enviro }}_1_';
if( isset($_SERVER['HTTP_HOST']) ) {
    define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
    define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
    $wp_cache_key_salt = 'wpe_{{ enviro }}_'.$_SERVER['HTTP_HOST'].'_';
}

/** Object Cache Key Salt per domain */
define('WP_CACHE_KEY_SALT', $wp_cache_key_salt);


// ** WP Local Toolbox (mu-plugin) settings ** //
define('WPLT_SERVER', 'local');
//define('WPLT_COLOR', 'purple');
define('WPLT_DISABLED_PLUGINS', serialize(
	array(
		'w3-total-cache/w3-total-cache.php',
		'wp-super-cache/wp-cache.php', 
		'iwp-client/init.php',
		'updraftplus/updraftplus.php',
		'nginx-helper/nginx-helper.php',
		'wpremote/plugin.php',
		'wordpress-https/wordpress-https.php',
	)
));
define('WPLT_AIRPLANE', 'true');
