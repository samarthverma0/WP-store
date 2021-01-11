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
define( 'DB_NAME', 'newu' );

/** MySQL database username */
define( 'DB_USER', 'newu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'newu@1234' );

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
define( 'AUTH_KEY',         '5o[527V7hnj&KxBy1jKEM<fjL^)I*EZ&HX6l)|r$iZ}3LF^vP+yIV? rm?cz,bp0' );
define( 'SECURE_AUTH_KEY',  '0A%SVTE0d]p9Y&t055:|PJjo/uZp):!#A<0}?t18!n`T-`t]Mza-X]w88ZW5)JC&' );
define( 'LOGGED_IN_KEY',    '%-tR)tpvL-tS5dqHw,fKxaKAY0VR0<-KVK~mi`yahD&+01cf@9zjpy(p/v<*$jA.' );
define( 'NONCE_KEY',        'JX+Zf>&61*UurbLpA1#fy7W<_w9tGX8!nvFe;)F6:<.gIMc,;=i7H*Z42FCr55PL' );
define( 'AUTH_SALT',        'cAr<y}0ocWd*~]>MI<G_r[vQjLv.mb-:?5|,@_g@_.NIMO!SO$y=uD?S0+rLBx. ' );
define( 'SECURE_AUTH_SALT', 'QYiUbZ*,vuA$lX.4f?z5SppcLhSqNS;FfE:Of|>G?-_nvIB=KawO5u#q#jAR|pV.' );
define( 'LOGGED_IN_SALT',   'lR~=}U_Tqd0e|dNOEJ_aPa](ec]UKz32vLJpF{FG_3vx.OK9oA<(f40S6sWqs/od' );
define( 'NONCE_SALT',       '36>/*Yn4#ca6&7G_V`M=@Mtz&,J{Q@}sOJB CCGZit`zyc53v&7 #XimX5SGv^sr' );

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
