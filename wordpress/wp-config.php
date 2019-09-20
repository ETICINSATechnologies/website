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
define( 'WPCACHEHOME', '/home/clients/9dd2fd0c2dc5f674c190cd70782a3f86/web/etic2.0/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'pofc_WP436540');

/** MySQL database username */
define('DB_USER', 'pofc_WP436540');

/** MySQL database password */
define('DB_PASSWORD', 'a3NOEcl2Ry');

/** MySQL hostname */
define('DB_HOST', 'pofc.myd.infomaniak.com');

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
define('AUTH_KEY',         'r.c,r&^cT7o!%NN2Osg-Y6|gfOK8JUGxDb~@&sW#Ufnnkq{a3yq*B;!7DKHB-M9v');
define('SECURE_AUTH_KEY',  'D%ZoC7>S9f)zJ~0NXH?L6U,6>{|yl2Ns;.2zz%=}LHOT,1T0P!fdfYE{#C&<8SJ5');
define('LOGGED_IN_KEY',    'DYJ=J@_26@!vLCTtXz@wZbyhLRL:I8|<J5m+-Hl)8I>7g-Nla<}`_dPH:2s^v2fH');
define('NONCE_KEY',        '<I{c@C5D4d*5d|h4HRj%0_)C?dl)A=hA_G@5LKt:7iGpEv&0i7Kj#B0f!;|lf<ku');
define('AUTH_SALT',        '&F#nI};ei}^Ea-|taM;Nr`:2t}qN,5D@+B_l|T;)QY+>M+0W#eUI4/PA7)p6nwb}');
define('SECURE_AUTH_SALT', 'wcRbiGHJ|-h<<}M%6v;tbc(oJjl:DYf2)XKZl(WV7Kfic<ZFzmEXAN3WJVG)8`,N');
define('LOGGED_IN_SALT',   '2}4RDYsEIWh%^IhTE>/4>WzC=67_ajj80%lj@QRhV(zE?+XVFT{aC@GWO7OdWtUj');
define('NONCE_SALT',       'e63is,-E3A}~jZ2>)_d/yY:(4qi:(Rf1-9x1XjvGERN%rsrA9.36J@..{5Y`,PS~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_436540_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
//define('WPLANG', 'fr_FR');

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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
