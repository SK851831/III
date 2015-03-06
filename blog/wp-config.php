<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iii');

/** MySQL database username */
define('DB_USER', 'login');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '{p|Gh0 )mB|u88&.yq:qY-L*#.{s!ZTVg5|L3.82j#NSS^]1+_o=z7};D<S>(Co?');
define('SECURE_AUTH_KEY',  '{a9RINw:->8]-rSv`Q%8o(b*i7c<&i2(9^=Ku<*<n28l.F8L^ii1>ct<h;)5M?XK');
define('LOGGED_IN_KEY',    'pR#!60:XK;o+9tWr6Mg;hU]-.m?1oF+IbPh)l|-*^AI6) xw-I ^*o]onG;[YJR-');
define('NONCE_KEY',        '+T4#rd[|;PKB?%~5hx5sDEUu}XHA[#4{BcA6xGhT&8DJtpwcSRG!H8V7kVNWp9@F');
define('AUTH_SALT',        '!HSpbE8p}pd|G>eP/i;]OK^1?&NrIx{6itA7@h3Fz1>|W2#a<Z^(eyZ^<ju9C5#m');
define('SECURE_AUTH_SALT', 'UJlb_*sxS,W!wt3$v=5/]Mc+ 7iPLO/&$YxYN^B(PA;GF|GL|xPP`:+Q[aK[+w|F');
define('LOGGED_IN_SALT',   'Jf 7Cav.Z+2Tj?[ilaC~P~VIRl)EL%t_ w7.9[L<4#6XZIP[.tHM.|%].z2v+9!)');
define('NONCE_SALT',       'hH:*AuTQnAseu}e=|Q( RJNq%E#lIjvx6v|E:{{-fyQ-RW*y{IssXETEk]+~<E4w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iii';

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
