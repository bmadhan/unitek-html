<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Secure Socket Layers (SSL) > SSL for Dashboard
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'db1405363_bpi');

/** MySQL database username */
define('DB_USER', 'u1405363_bpi');

/** MySQL database password */
define('DB_PASSWORD', 'iZVkK_tB');

/** MySQL hostname */
define('DB_HOST', 'mysql4154int.cp.blacknight.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{I~0B;Wtkn,-E.]1Zm*MqlqCl#c;:+m+O;BRCdqf-D;C#<$tF}RLm,b-CN8ofeK6');
define('SECURE_AUTH_KEY',  'ZGKpJj:PSD_O*?Z+V.-?0OA2qQw?7ZTP^Y<wm+jj*X++tZQw,9MyjA?UjkisaFlo');
define('LOGGED_IN_KEY',    'Bihx;c}wWc(G],$<l)}-|m7<SF y+xTykW 3x^!9WUZ7STbE;AViuLvp*H|)opiy');
define('NONCE_KEY',        'a&:o~D#!lQS=WZ^Ow-n+C][>J^NJjYJ!_;0;;9|CA+k7#RX|-Xmt*?Z5Gb$0I$kO');
define('AUTH_SALT',        '!d|+v,iujXLnwY=yCY5Tg-1Q1/1,arr1q1e/5wrPkCIX>vP)>m+)=ZD|rZefG&zc');
define('SECURE_AUTH_SALT', '|!R4]>SsK2pj^G_b($A[%}IE2X@ggCbAZ2efi(}kUq|cmINS@=3G7HbGpkAO z=h');
define('LOGGED_IN_SALT',   '!%1]zDCn-Dzh&KEgAwcRaC+f?>n(k,BTWW}IxWb?$AadD#TS-Z+B$+h~wP)*u9K+');
define('NONCE_SALT',       '@JHi#<N|72aVl69 bdtWmpuxLQ}71D4bM*ADiPg>-7iXT&(b6mq(uo$=+/Fn+v2+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ki9fjeinxr_';

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
