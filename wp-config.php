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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'G(j@L.iI/X?rR9p,iYAj/)(z2n6POrz*_g=nBB+kB5]<U2rzD+0k^0BkxFiWP53M' );
define( 'SECURE_AUTH_KEY',  '2lBoT)[[~+la5K?;2i5-,H/y T;7!1X=M{@.eQ#c<%OOdAl`wNxAuLERlg%:3ytc' );
define( 'LOGGED_IN_KEY',    '&J1$1mOs~0%z3#n!mLO]c)< a/#w!TwzXi!:io9mXY-|WcB+#R#nA<Cg>t3Xs [d' );
define( 'NONCE_KEY',        '(aqlzz?&W[VFhh&8FL-7gD}2kmkMrV@Oets[rvs@HA8<8F6zE$6(!n$@ALQg//AY' );
define( 'AUTH_SALT',        '+)I9_?SLy%1Ku+f5}.K@)*h$d-fwi`ELTz_@ERwLQob4^zQp}y(k5vT[=+f;NWeZ' );
define( 'SECURE_AUTH_SALT', 'c#Uux0=S;F(Jhdsc6 MbHU8a?H/B=seK^Aa@zqmqIOO}_pBdINzt ={uZ?V/?-Y1' );
define( 'LOGGED_IN_SALT',   'OSO}g;G(D}]/VzY2tJ*MakU9wpW9Toq0N/w*XZ>oQ,u!wdy*Fh!>4f6in@#!%=Hi' );
define( 'NONCE_SALT',       'SVII)BuC;3B {IE~wB?|j&<~(Q ePtW)P#c&{k1l,= t$]@iEE[0;H7;&H((oBgW' );

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
