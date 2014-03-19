<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'hackasoton');

/** MySQL database password */
define('DB_PASSWORD', 'HackaS0t0n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '>kJ5kaF<(&n(N4H3b(]mfXHhCK3:h&,SQi$L!Q |y1Q!>`ln/_V`O;?}iL@b|G|U');
define('SECURE_AUTH_KEY',  'kLZ/,x|5m8-Pj6~$2FVokd9qt5X#gb=@t@mw;F@34u@1.XfEdb22w(V`|.B}-L:V');
define('LOGGED_IN_KEY',    'Orf}r;^Z?_-.#;:|9_-S=~>8| 6MMW}mHO^jV&`@>]+sbaB/K#!EJOP=|t*_>EuZ');
define('NONCE_KEY',        'HWkOqV;YQTb%z(wBb~x5{~|?hV<|40$(>th0T9X .$+@YSRq#3Q[H;6e? Vwfcd3');
define('AUTH_SALT',        'S+muOzi5Fs<rxn)^XXH||mgJz#QB^4SsxDNG;vSOm%m?+T>u-yrNu4ojk NeylbT');
define('SECURE_AUTH_SALT', 'MlDd tToe,9z-O<0Z[Gi{;y4Fi+n/%9CK-K>qycq2-rITr][EbMiGc6qkov&+tdX');
define('LOGGED_IN_SALT',   'Eu WNxVNN]{0lfrq-r$,rDD6b-J0 &~h6&d[b+jHY%Df9R|wlse>|mfd.W0Z?j1F');
define('NONCE_SALT',       '+t3BY>d$L/9&cHJ$$mD-;|yE%,^ST5<!v|,llo1bgS3mor`>9Q.FS#ay2/VVGHW@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
