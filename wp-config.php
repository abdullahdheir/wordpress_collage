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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Abdallah120187006@@' );

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
define( 'AUTH_KEY',         'ETo#*$dIfwN>nH5US.(_UY&w4*(Y<(;ED`q*s-ZN>E}I^UEwfJYiUu#BXL*;Z9=C' );
define( 'SECURE_AUTH_KEY',  '@|tBmLR[O@%R%Xfn$,z?1JtL#Ou:5|STi]D+-s7BDT-fhR:#3R=bZN[! ]!Jc`co' );
define( 'LOGGED_IN_KEY',    '}LT$pI(#A3rvF1JA%_q-SFoI|$JD#B:.j-Ohle*;Sl&X@Iez$Sb5#LF~|[<5O$8`' );
define( 'NONCE_KEY',        '(@YLy%<<=2.B<hbNBrCV7(@/d8/-DaiR2Do7].!veW?y>NZ&]zTImActYxP.1bat' );
define( 'AUTH_SALT',        '^HSx@VIwb>1gP;U=+t@]7u9,-z~Kf!1Uxvi:R}[G`_vuW1Dir2CZ_g1Y6:QiWqbZ' );
define( 'SECURE_AUTH_SALT', 'y)Fu;OO}o&msD.4_KiR(BO,*)=BN+R_hRz`~&Vk%smMo+1@83E$Jm;VO2Y(y./o0' );
define( 'LOGGED_IN_SALT',   'iI)W<1R,4:1*Bzh2TDM-P]jeH+8Wuj^KC4oA5uZdbr-:{7[z8~7}=S))raWf7joe' );
define( 'NONCE_SALT',       '}Qf@4cS+=uxwc<_nsL&a!D.FIKg>y|,(HeMK.Cm,D<*vCTbSoW?o-K@mNHo?1q4d' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
