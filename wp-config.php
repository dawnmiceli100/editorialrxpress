<?php
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
define('DB_NAME', 'editoriaDBqcz31');

/** MySQL database username */
define('DB_USER', 'editoriaDBqcz31');

/** MySQL database password */
define('DB_PASSWORD', 'oAdRP2omG');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'B0kvcZgN@kwzco8|EL2iqXbmT*{yubm3^{y.TAIE{bnQTfM$,qnUfy,>r$M3SaH');
define('SECURE_AUTH_KEY',  '6<YEQQ7IubjfMU,}y$,rBILW9p+ehpW#;+x*m6D]25_]aDPL;AmTeeLT.qxu+i2A');
define('LOGGED_IN_KEY',    'v>Qa+pPAaPqmTuiHPEAXC!-4_C8:O5wp[xt:_Dr},F}RNBcJ[!B[JG4VfE2TA7XM');
define('NONCE_KEY',        'm]+xeq6.;2*PXEAIfqTXiP+<u:-!S8KK1CoVhdKS_ps-h1C|_:-KS9DK1hOWS9Hx');
define('AUTH_SALT',        '_-l5~[#tDO15G:ZlSMUBryfjQb>u^$j3B>}7^QcJBN4grYcjQ^nvrYg0@>}zJU8Xi');
define('SECURE_AUTH_SALT', 'jfP*mjub<3^.qyIAWCO~htwd:9#~]xH;59#1dKWS5HxehpW#2+x.p9H;2*]WDPF}');
define('LOGGED_IN_SALT',   '6bbIy^mq$i3A<,qyI7A<3fMXxdl5_#:-KW95H]alSWeK+hpmSe]x_#t+L2;A.TeL');
define('NONCE_SALT',       'v:!GXqi{*u3.IMvb,yn^$U-8|NC1KG!h[_w9~HS-@F3MRzg>@s|@FJgZRz$EPyX^');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
