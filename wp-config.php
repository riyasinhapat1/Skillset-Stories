<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Diggi143#' );

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
define( 'AUTH_KEY',         'V3Ep;y9{GEA-c^10Cx(4}rI0}D>Ke0l>O!v@@7H]&|RdkboBA!cn(z:(Sm4?A2w*' );
define( 'SECURE_AUTH_KEY',  '1,(rO-0ZnZr;G>oXBIit;HL=@1y21Ni>eBEr]tf>pGT ?V+3XilgN_F[*P~r+@3o' );
define( 'LOGGED_IN_KEY',    'duGS[`3Fgs2BGNu<7#g0BlWz3.0mzh]$|}^J;]Ni+ 2Z CMZUo}X]%(yYg4wZcNk' );
define( 'NONCE_KEY',        '`TS#]2M3^_u;a0Y&if,t|cu5DC0bKv}+QgTDdPV-*qh8*e^>kU~xD1Lv1p&|!JW%' );
define( 'AUTH_SALT',        'Sf7[0oa0bFy_CZmEuQ|*/o.,CJMF.RZCFjs^}/B(X]Xs21<wjf+4;C|}U|6y<ECR' );
define( 'SECURE_AUTH_SALT', '34NRg{m~|t-_rL50)RItqZ}&:OXQI?MP%_d@;J&Xe_1zwpPs@aYY F7I5Agjln/d' );
define( 'LOGGED_IN_SALT',   'dWFpL>Cs(FKm`!I&ONg0q@+n)3s6:E_!o RiMR~Fz6=}#OX)}]v[Xec7r_8-ldQy' );
define( 'NONCE_SALT',       '?`flH>P3pS4>tDIc@:N]#*GUB>6[NsC.od=:mP*!j-%gjI7ay.,zuUo~3wK-N:AY' );

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
