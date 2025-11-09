<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_tutorial_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Hw#,`JiZ>MJdchI_bOH4{.8rWb+4jv?Lvn 8)%^dvg;dfW<T9zmQ_>4eBTIH*N~t' );
define( 'SECURE_AUTH_KEY',  '`:haJF~hihb+NAY_|Ur|w}CHeQg.VUYO.A)P=Ft{C$gX,?`|TgZe rLT9m#DB|{$' );
define( 'LOGGED_IN_KEY',    'BmeQDZaHBVDZl)d |~/J*rmDVFnVK`J<=sV].(GAa{XG8wvVW<g[~RcW:%Uft3Jh' );
define( 'NONCE_KEY',        '46?;siE9Lb5~:J}{`tvgo{4<76E~oNC7m3qp0dI*m*cn%U[1Cq,W_7P$_a.L|904' );
define( 'AUTH_SALT',        '_6uw737h:>~W~g`y@YXQHQ?nVS/GF=}g=JG{FIas>>!KYSf;gaF:$DRpgS3>cf=;' );
define( 'SECURE_AUTH_SALT', 'C]Y%PYaPWIJX~]Ug<JPZkCd$bQ3H1&oj08tqB}ESc%aq^clX@{?UDI!xAW#WoY{$' );
define( 'LOGGED_IN_SALT',   '7<#kMY~^faT*$NA2;Z]A4c12$q)3Wn?nuYnI+^[crX3HfU$5}8%]X^xju1AFP.>$' );
define( 'NONCE_SALT',       '^-u8Nrd8*hX)Fo %HF!0xGG}5z%?tMV}5|9_db^F4*G `JH?~oG}I`.e;P%F,8< ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
