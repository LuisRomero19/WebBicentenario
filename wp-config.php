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
define( 'DB_NAME', 'fiestadelbicentenario' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ')Jr+0V!8Wlxn]^-^=4Uk?B&e6lX#5;9! *a.NYY?Gt@/nX*45V#}JTNAxs&1~q2r' );
define( 'SECURE_AUTH_KEY',  ' 5`#G=$8v,Y!DF;COM_,d=]wMIPNY5IT#QBh}l_V!W9r2)[ oI2cCSbjO&tCCWXB' );
define( 'LOGGED_IN_KEY',    'RU;@w5yOPr:kZu7ff`J5(]AWKddt]C)^P~u.F~]`DT}RUopYj-3@tC;J,?>Lk %%' );
define( 'NONCE_KEY',        'X9p%cp|<+Y$vX$z=m(|oW*h=>)keE l*#eVkHo)#-1pQSo@[Kk%ESl-yz;5_~TX^' );
define( 'AUTH_SALT',        '<<%-MBNAm?Pps;#wyqoFDnMolK($6]?0>`yCH;wfgIjZu],MUphkCYW-4mT $w?C' );
define( 'SECURE_AUTH_SALT', 'FU3(yNelo2=!|WH3$9Rg+T 0JWlJ2rLLiq29fGWaAz?gev8b*Ir?3qrVM?DE.rC)' );
define( 'LOGGED_IN_SALT',   'lDo_s*_PQW6!7z,!akHt5,(p^._])Nr;C/`$u5Z(-~{*q{R}!*l`:qP~Atv5z6Kv' );
define( 'NONCE_SALT',       '#Z;yu.8dV]3&;/FM=+ b(0{RZbDR-!qy>A)NF2 c}c|V*6T9KX,Ep*p+rhqx:u13' );

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
