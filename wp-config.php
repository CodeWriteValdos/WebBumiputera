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
define('DB_NAME', 'bumiputera');

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
define('AUTH_KEY',         'K^[@ezy}AL5bgcT|yNfk|1Vr,7)AET.Or n[8H;,m(C_]Xu rvw4j$xSF/[GwxaS');
define('SECURE_AUTH_KEY',  '<R<8WD]4C=hf8u{3R%CAGKP0O{)zQWxxvKoQoxg/#}S=lHQo8L:5xI!>V`0YW%h`');
define('LOGGED_IN_KEY',    '*l@+h+[n~TQF_^E=S%loP)8c42?I(X:n=A0$j|6BX|+*(;dK_famyh/#@aD]-9{9');
define('NONCE_KEY',        '2PWs2dBwJjO*PaWQTLq^:c^+vKi[WSQR&-S?w8?7I&CHM5(Q=}JV~~3]N[Z3/Kmz');
define('AUTH_SALT',        'Z(qGHaU=8B0P85yjv6eenz*o;(%2t2QLG&SEYC6(F~$a^:bX$u:17F[y:^|%PYkE');
define('SECURE_AUTH_SALT', 'D+-2W<OT/Zj/r&x<Ltg@8cIsd5)TkpmlDWCa,9Q#r!8KI|y4>b> w,uBq.XKW@#F');
define('LOGGED_IN_SALT',   'b3P.GEGfH`O0)SE}%IlGAn{Cj`{u,-IL?1&~?FuI)*$uBd]HHS|d]oH>+pbmPMU1');
define('NONCE_SALT',       '!%I&FYyZ8TlC?tiG4hHny`(RJxwujLRdUWtEEp]BF,__H9]r^B,&VLD7&`SZERJ;');

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
