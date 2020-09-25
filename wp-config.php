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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thearsenalplus_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3`U|,M`HV2Mzu;7tp)O0tkQZn=Vs*@B2|mPqBc+X&i.}o4~Dn@RQX1 }Cfa%9NpC' );
define( 'SECURE_AUTH_KEY',  'H<_t]($}0Dr^Sh>>3ky8.J#9A%|d`2IVt|}<%LWJS^u+(_<7e7]{&hFJZa+dnfik' );
define( 'LOGGED_IN_KEY',    'pgxW-@L&otBp721W`5w5Z5t#W>1N%zEo[z:6_!t{Q=)j)QX?4`m+/qB>Sqbh@(4*' );
define( 'NONCE_KEY',        ':_lL<2@?*B2ZuLs|^z-A(nl#4qtzo!J/@N:NVd2K$fg@xA54^l2D]4:- oe-VsiH' );
define( 'AUTH_SALT',        ' 1/8Es&^*ftIy!SNv|Hg}`?UneR[3Kf0q4~eW,SPvGe9;<{,dF>HxXOctj>2HF5L' );
define( 'SECURE_AUTH_SALT', '9J*h+5_~*sJ`#x6dDysqb8AO<v?,qt*BZZ%gWw;9PS^FObtjT^Ao-vOh<,^Fd8fF' );
define( 'LOGGED_IN_SALT',   'Pb(3m#f<+@>eGKmd=[FhPOB3A4J F+V1>7zHMzLTV*45:SiwqAf{))q$?M#LLmw=' );
define( 'NONCE_SALT',       '3L[`IS^F2Sb-z,hm4|MT:}NRAxc=1d;<FSs}<10SwW%ITe,eo%&8gG[pG6G,;t+U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
