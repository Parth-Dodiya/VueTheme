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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_zeus7e260dce' );

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
define( 'AUTH_KEY',         '4)~wp,tFV2L@D@7/3PS,Y;Qq|o_f LPOigTrotuW+93<w>br(c!b8Wv9f/4]Jp+N' );
define( 'SECURE_AUTH_KEY',  '6L.C@9neQaF:LlA=b;LJfa&)3!<~8>V5zBAY(iPD(+bZ1`Nb1XJO5:r^c5|x1x%{' );
define( 'LOGGED_IN_KEY',    'gf:1Km98&MXl<XR7rtP_y0g%d^-P6h_~i1xq,5qvsexo%JFXb}9gk[+Z,=^RKw-h' );
define( 'NONCE_KEY',        '-+,b])jKGkfrJP%>mx3bv8W+?Vl(*q[y.tXN+I!VYt#~^b,ci suO5Le[iN^4?i&' );
define( 'AUTH_SALT',        'dCSc/!H7PnZ_Mv>8_GaiS{3}6//$kLs70g&eTF=3&hcJ6( p!=_M:`,?r+Y-iW:V' );
define( 'SECURE_AUTH_SALT', '>)3s5l9i$3-*QQX+X0wG?@LvAz1&=5wj<KU^b@Zkox~EL%vG1X>>fq<z}JNHEb>7' );
define( 'LOGGED_IN_SALT',   'Gbonr}>(W34$Jq,+rb%LhBBJPq!z+Isj}jFPGO@Y.kMJ;m-yP{OC1doDm(<ZPl`V' );
define( 'NONCE_SALT',       '/cY_d96F^F%</Y{f6S-lai >8#es%J!Ab,WC<kK6]FdIPtHRKl%4T=o)ZkfLUfQS' );

/**#@-*/

/**
 * WordPress database table prefix.
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

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', 'SdaohRsyvU6#:g5w M07|T2WD&h0&E6#98!wZfhSLNA>X6s5KpHitzJafDstK;mG' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
