<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'bijithemecustomizer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         '+7>Q3BMZN#wv/!M(v@oNI>mgxDI>w|:.RaLK/{JLsqt}To}q-Oo8<f=XrY;s==C`');
define('SECURE_AUTH_KEY',  'B{xXB&(Eo??<%YLl)@zGY{P:-+LB42bRn?].q9)YuyfIMXoI,N*RKRq^^bhI0?W_');
define('LOGGED_IN_KEY',    '=mknQ,~dC]0GKwHb zs5/: 5XH{Cr}LRv@P[RZH 71^8Ruw@.QIkHIRu?~$]W&)f');
define('NONCE_KEY',        '`v>(`4.R mD|exIk6Dj`,^v~^&KnLC=Mj,f}GH4[oZ8nVW7=hf5nW$(,mk1suD5d');
define('AUTH_SALT',        '#i%l)|XI)*1LZcPY}VH.6oUqkgY/)$-~<ZRcbDCsx<<~21f<Av~?i=2kQ8AqE1VX');
define('SECURE_AUTH_SALT', 'X<$qf.:DwLTL__}-A6XW_[;6{oswKiCL>IZmBs;w+?D88X>-Zu~}j6XQx*gYLidq');
define('LOGGED_IN_SALT',   'Lp;%jwasX)P%8:)l.1J-MLM%aZ`//83S)NG{9GrfN4>rO0(+w!6j2S?l[(xt{iRt');
define('NONCE_SALT',       'qgz*K2HzAW1b;#i,G)>jiLk 5tjU]Fq4aNsC#caMjdV+|QNJ#|!dXX}_Bls)gB{y');

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
