<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'i%Xas;<f#-yG{}ZS&{_@8VH^15srS}#~H@t&w#ISE|IX4<[{2f}prK#ReoYl$QFq' );
define( 'SECURE_AUTH_KEY',   'psf8};cK_gM4WQ?Nzk_wzpY9|x6;}11d84/?dU{ii:T$#$Lxwis3AJAGhM=pIyt:' );
define( 'LOGGED_IN_KEY',     '3O3P|+]egtP-6M!|UHS-b0hKc]^c8w{e+&bQcE})xGf.MQzX6|.fa0n6/SQM,-i4' );
define( 'NONCE_KEY',         '1M)(2i5K%G:Ty$|W}jtZC.Vo1dn3~qF 5:+93dD}^oPSFp;%d&<}leel{2c}/}U7' );
define( 'AUTH_SALT',         'Zud#{%kTmLp0`CioKPK{v)gw:8Xk].9vf]-{/g}oYFI^J`SDh8>:Dez75dU|=T)k' );
define( 'SECURE_AUTH_SALT',  ']w:dKZVc]*Gp>_0v&(pxCjl0?p$QI8XkH!:`}5ez$ldGnAXo:Ts)`qW*K1OVJg?d' );
define( 'LOGGED_IN_SALT',    '13[SDO6@<yf-CSH{r;38oB4 e&0}-:^APZH&#<gIBV)rYN?lt+Gtx%/1(aX6.Q(B' );
define( 'NONCE_SALT',        '=@1SV2PN Nzy$s$PhtBrB*p$59ukPq[.*c!Nrb@WWI30*SR`A_PK<a%Pr+FH}b5t' );
define( 'WP_CACHE_KEY_SALT', '$(}zu$P/n ta]lRBE$D@{pL9iLQ8Ve!:3aDQ`VFJ<cp,)5}V00h)#@wQZ{>R!RAk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
