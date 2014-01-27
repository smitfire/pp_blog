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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2,r88md<,Zm5,a/GAh e}N&uL%t9/sb> ^]|+FcoDUZ<_33m*|o4L+@bAth[.-.y');
define('SECURE_AUTH_KEY',  'QGsjD,k6,]W?+;4.xkF+t8uy pkF8?sks--Y:j@Jg&mnHNTr [nN`QrlW^7i_O]7');
define('LOGGED_IN_KEY',    '4mT@|u|a!Qt}1-dU~)?I)Du=c8D*<$x)>r$*nQ|TL~D2054aphV%~1w9oop1F|}L');
define('NONCE_KEY',        '-bcrTHmqr}9fZ`CUP1tDrvfJg_PvG?{Q0+4H@GsFY/e5{>bXMgf$9xo+k50T8hx.');
define('AUTH_SALT',        'P&~~TmYA)|q/+S:m4wVV(*%Ppm{&-!-=^3qoOJ;Vjpxs.lLc$ku3KrHw~=.ibiew');
define('SECURE_AUTH_SALT', '3&83?I.mG4w8)N#SGYMRXGS!k5z|op/iYW(CNl&?/>~FA^4xLH+ge0vHe8;_e#xE');
define('LOGGED_IN_SALT',   'L]Ak[[.7YBRqP;,-nG2aL@#PaxcsUg3^9+}0Y-I<:Ah`&b:!6o:;NH5l[C.aRbv)');
define('NONCE_SALT',       'KK_o4C+l+cS=<JYPC@_`eN+`NOJCf|0=p#vMj-3(q)=x`sw6 1-%13W1,cAx(#-p');

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
