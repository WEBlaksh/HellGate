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
define( 'DB_NAME', 'hellgate_db' );

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
define( 'AUTH_KEY',         '7:tA;;0AoRXZM,7$x[Ud(7,F80NYp9f]inx&v>YjjhK~[kXL!u$]B=/i{gjbf^yG' );
define( 'SECURE_AUTH_KEY',  '+Q9pH8uz=}-HE5earfBIOI%uq8Wr/=N3766I2MajBUHXZbaZz*,G+z]-m6Jy|]NK' );
define( 'LOGGED_IN_KEY',    'V#r|SbbF2y[J-mjRFh5KTKndOtU=_u2A16&@EaFef i>-bdKjDjgAjD&*R+(;_f8' );
define( 'NONCE_KEY',        'iBAYho^}`+>sUTkO=%z(@F[/fVw&^P!C=6dt`iIBz<WcJg!>@V{Ov(1SsAO*]`_r' );
define( 'AUTH_SALT',        'Dd-dXCB$p<KqnR(4sx#ko,@K(Sq}E*%0WB=dX?dPdT;<xnRPHgNOGH_>wfigP;&W' );
define( 'SECURE_AUTH_SALT', '%8m>)<Z[N%yN%UGH_n9?Y&;AijH)HrOO++7T7byw)s6L$QrJ2>[Lra)C#o!+~:Hu' );
define( 'LOGGED_IN_SALT',   'V7){K`xvlg`WQCsTKP@- onP-B47sg1JoFJ>r6*ns<oi6_sW*=0>?5OZ1(`WCt*#' );
define( 'NONCE_SALT',       '4S?@~FzP&|>W2=7-?c[W8He2f%4r@X4k`iSk|zu:H8`AV9|A6MC.G_!Ut[o#csho' );

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
