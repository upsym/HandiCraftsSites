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
define('DB_NAME', 'poub_ico_wordpress_test');

/** MySQL database username */
define('DB_USER', 'poub_trawallet');

/** MySQL database password */
define('DB_PASSWORD', 'SmeMWxn61EgAPXKV');

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
define('AUTH_KEY',         '<}~kd[(m:uA`Wh//,E]hNk]pN+/6^JEpQ:g_g>Som]b!)/<8A6K!+?y!Pt#U&KLu');
define('SECURE_AUTH_KEY',  '(]*zvKH#[[=(d~>4hME|rjS#_Z!A)hOMuB/>7zU!]vlCdib3c)LaduzsCcMyo!x%');
define('LOGGED_IN_KEY',    '!2e*<h;P>dP39jV qJHviI@]%gso4h`I:MRvH~j?q1Td2Z5ZjDn[G2Su&:*uZG`:');
define('NONCE_KEY',        'csEI?AO{@X+PkLE5cF];/3l`O1]tR*Vd-t!!3/Ikp($0r~0Tq$BIa/br7Cu[f4yO');
define('AUTH_SALT',        'XMqnyNZ--ot<F37r-;78%jP16Pq3o[M(R|BNO2P]ekMw@$6]a%7Z~Sx<Ds4N;{9,');
define('SECURE_AUTH_SALT', '$})Q#PH&y3nnx}smsefab9<B|@0N8b:~@o8BOg]3 ftJ+R=Rr1u.QVjt[&BPS7+[');
define('LOGGED_IN_SALT',   'MA:cyG6GoDQI5;%Vxr%::6v}/CG4(B&j7jxTU)OPV`An!gGDJh4xKc,+c~*=].D-');
define('NONCE_SALT',       'OPXH@Hfgpc2`.XDm)-n0ei#XmQK)MkrdrT_o&@!?KF%j_dlB<.B0UF=8*jrD=u ]');

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
