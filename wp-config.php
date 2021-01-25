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
define( 'DB_NAME', 'botravellers' );

/** MySQL database username */
define( 'DB_USER', 'Ritu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gS7vJvMrrneVdSr2' );

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
define( 'AUTH_KEY',         'T[uM:S?At!5A@!u|:pB,UJ7_=sJ}%@}HmMp!7[rzWe=FGyTEsa-siM^SzS[cU-]}' );
define( 'SECURE_AUTH_KEY',  '=y]qZCChNC`gRSvcz=!s]FD&Gl|P*=U3)p~c<3J 7|V7GdG<A]ic!wTLl;NILxv8' );
define( 'LOGGED_IN_KEY',    'GiA2RqH%dV<Gd9}Qu%d;qtXN`x?[hqU)agW27t{Buh{5y(}D0,l1o^1[14?PW<?1' );
define( 'NONCE_KEY',        'ZBYF#EBV[KK]{G3yy9is{5_EzMSNEX4rql5%~M,Txx)pnE)h)0a7%Q(!$ih2JeC1' );
define( 'AUTH_SALT',        ' vx~o4%6ig:,:&kQ<0HGa(!m)3pA|3m:(pGFGza-uAmk[~E@E)Ec5DKGQG[V#$_b' );
define( 'SECURE_AUTH_SALT', '!HGF+FvlipvbA&G!^3OE@QO.7WHR`/1O#wW*C#fFIS9S[TwEB}iU^[9qxU``jWnu' );
define( 'LOGGED_IN_SALT',   '0:)~)ZQr4oa[+4{pnUrJDhCK1<Eoj;&@M[M(:]pES=$QIwA_<M:fnnNgT~g0+0aM' );
define( 'NONCE_SALT',       '`jN>4km)21cjZ*uT;{cCu849t=!06kTD!*|$N u0YqZ5K1Kk)GdC[r@R,ExMB$2+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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
