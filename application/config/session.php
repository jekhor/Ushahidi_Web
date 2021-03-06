<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package Session
 *
 * Session driver name.
 */
$config['driver'] = 'cookie';

/**
 * Session storage parameter, used by drivers.
 */
//$config['storage'] = '';

/**
 * Session name.
 * It must contain only alphanumeric characters and underscores. At least one letter must be present.
 */
$config['name'] = 'ushahidi';

/**
 * Session parameters to validate: user_agent, ip_address, expiration.
 */
$config['validate'] = array('user_agent', 'ip_address');

/**
 * Enable or disable session encryption.
 */
$config['encryption'] = TRUE;

/**
 * Session lifetime. Number of seconds that each session will last.
 * A value of 0 will keep the session active until the browser is closed (with a limit of 24h).
 */
//$config['expiration'] = 7200;

/**
 * Number of page loads before the session id is regenerated.
 * A value of 0 will disable automatic session id regeneration.
 */
//$config['regenerate'] = 3;

/**
 * Percentage probability that the gc (garbage collection) routine is started.
 */
//$config['gc_probability'] = 2;

/**
 * Since there can be many concurrent requests sent to the server, we want to make sure
 *   we only have one token change per pageview
 */
$config['generate_tokens_controllers'] = array('dashboard',
												'reports',
												'main',
												'messages',
												'stats',
												'addons',
												'manage',
												'settings',
												'login',
												'contact');
