<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fBpu9ZJe ZVj#0Cca:Ab3PS:tj))=7Ky<;Fp1:a>T+X]3mZxVTA7^RldmlaL?&82');
define('SECURE_AUTH_KEY',  'ey7aGXbj15$%O2.tGr}IWiGe=3:Z!3zE0Ft&*&5}5>k{&cmh1eaW}51Dv5@C:Wxc');
define('LOGGED_IN_KEY',    '5D{g+:a(F*^$zG(M)2}p2m)Q7aJAP.;.@^MH`/Y#Y^0-^vZeUsLRx/$**,5Jb_^c');
define('NONCE_KEY',        '|]}HwwwqGiOFis(1dVEPX)lEwE?j7>GCy(|+1/BxT&/~_C/m#bnb~?c?fAWW+D%g');
define('AUTH_SALT',        'kZ[EW$oK0sQ#hU:S~z#W0nm&wx!>k`RM19DSPIwp6m3$;[f.]GegntTqa*HEgmHV');
define('SECURE_AUTH_SALT', 'niqwDr4&7Rq8K)I~Z]f%| <5Ue,8l[suDCk^|h43C~CfpHsb>G9rhNRb283+sC?N');
define('LOGGED_IN_SALT',   '*kPXANFio&[*hyo%Mdzi:fI.Q+=bMh#g4@R?h[bd%re`[6XU-jwFE Xj$@sjTnEQ');
define('NONCE_SALT',       'F0jPC4*t;($pgmj3o1_c)M.Cz-OWiFo$tQZ XC~.Unyn{l~tTM<[#GM4s`#=7~U]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
