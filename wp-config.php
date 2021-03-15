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
define( 'DB_NAME', 'bridges' );

/** MySQL database username */
define( 'DB_USER', 'bridges' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NnOeVERQL6UUStA9ni9oc7kt' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'R0NkT3~m*n{JT(AJF@K)1nK*^r9-?tDDV,:_U5tLp)r@:m{Rz+nhB}8{RX*uXt1k' );
define( 'SECURE_AUTH_KEY',  'M0Pwj3##P:;v,CJ6=YjK|ix 2:K=t@ fWGRN$^JiZ%EO JMOkV(Z0FlZ,/ToO>fS' );
define( 'LOGGED_IN_KEY',    'vX]^VCzOZ0$]1(J {hXpnigH+$tE.dJC#&+{V7yY1NI78$;3t)U?&BT,0pZVKZM4' );
define( 'NONCE_KEY',        'Irsrp6N$J3E4<R=ZGD819tlxfa9~|ePb9z&%GP^TFBQ:z%}ptR}9{Q(z{%lTm. ;' );
define( 'AUTH_SALT',        'Ww|9#/#JrwNraPn~)4{ANusvEjM8mO#qI(Cau0Y`r16FEM^2e[HW*zi`Xoflvr0@' );
define( 'SECURE_AUTH_SALT', '<YK!,(H8d;Vpz0Vgh7C)B ;<,<EHe|pl|*y[ywENUgO!-&{r%93_h^i1J{A@4m)#' );
define( 'LOGGED_IN_SALT',   '{s7 w#n3g~af6#0uJ%Go5*SbeP((]T~[iX#.lr,-D2h6QuEc5Czs|Lwp!{;iG,b.' );
define( 'NONCE_SALT',       'wJE6|e<xKsVoY7B-U)f%89x::TOQj($HUqqa,aI~:l@!{+GZLtQN@mX#>*.QP93w' );

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
