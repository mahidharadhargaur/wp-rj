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
define( 'DB_NAME', 'websitedatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Q8e/t06t/Sy^O2db(c^ nJpc7-JA@}(Lx(][LLh!_whb_~O^.I dC]uwLBE4izt[' );
define( 'SECURE_AUTH_KEY',  ';mDHm,KBeZ<i+Y,HDpP`q7kdX_ldANw8?HO8/MGr(IT4Vx~NWPKYI1Zv9iwwDzYv' );
define( 'LOGGED_IN_KEY',    ']j.jBLN%-T-K<K1;|Q{Tcfrvax$J5.6rt=92[/0D3vyBErIe#~Q8a&i-Wj]xUK!L' );
define( 'NONCE_KEY',        'P}:1&:FE]wS,zRA8]7ST:w{MGb--ih{>Nvb1;0K QL;zH5>NJx2a3U0f5H,U{y@K' );
define( 'AUTH_SALT',        'BdW/o|*@9gIEQ@YBp}#z.sNPN7{/G[3NB C=lb~x~u~H6&cEZ!~l/U1yRh)() 8:' );
define( 'SECURE_AUTH_SALT', 'zo&`}uLQQ5VR!|}iLUaAKTVOC+Br>Z9*a)XgCazJ:s-P=QSr%Wr,Nu<=k%v)#YaJ' );
define( 'LOGGED_IN_SALT',   'b%LLfW|l6F~O=E :%`N3N~4w5g(f0J,$A}gvfcL=M|h1ud!?2s.|r&Ap^Q!Fs*r@' );
define( 'NONCE_SALT',       '6-S@`nC/^.~`G[~R^c_?gV,VDMayJ##yALd%=HfkJl?am2}xvDlXHFisy~cCV2az' );

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
