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
define('DB_NAME', 'trdatabase');

/** MySQL database username */
define('DB_USER', 'trueangle');

/** MySQL database password */
define('DB_PASSWORD', 'finalfight098');

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
define('AUTH_KEY',         '8d~V2c[070lC|!A0@Y3mlnM6IQAr(M@%._gjf=X(Uv*hrVRKFl x.CD&@[-y-QJ/');
define('SECURE_AUTH_KEY',  '#jT_SxT:C0uTrA>H>SGG50MKYHPLLG1KfDMN,?a9vjr?4e+#J%#8<E;&BAG!7GyV');
define('LOGGED_IN_KEY',    'WqGa+c4yt5+;}Rx{9-T|N0M4s8Roc^VQ,~%p*1>+8y=U|5k5#zN`p/ZO7Q++ZO`4');
define('NONCE_KEY',        '81-t9u8?0@<rB~7v~~CGR@yu!:pWzm{<.O)@F/pr&rUjrvv+ZMeT|ePU;2<ZSu1A');
define('AUTH_SALT',        '[Mx?}scD>J/OPP/#e+$33ztE/<@h1 x}9Z7> cqU~Tf>opTh`*_iH^$VIx}.xxK-');
define('SECURE_AUTH_SALT', 'YY<R3<j$FBUl%~^1%0-L7BNc|F[Hk/BMfOfL+#m+|0E-lM*)rCU |Xh|w2;.[)A(');
define('LOGGED_IN_SALT',   '?d~4u2Q,1{F[[9zj!k6* &pk1O(O<s0yK&T-KFjA;CAFLzHUS+4+;j_Sz# {4+6K');
define('NONCE_SALT',       'o>b+OD|,<p&o;2Vl@@1C]>>>$EDaja7sumA|gUtTB_|NqLd&OGFL]+OsHI|6EycA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
