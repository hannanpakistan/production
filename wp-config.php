<?php
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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'b|X1:c#7;6,m;nf56*:sG<w%>x Q=y!$c@6Gk EU)y/U.Zvb0lllTD(4={cUT` p' );
define( 'SECURE_AUTH_KEY',  '$&`q$uH~/?U/%h;{Q.dXnltDD {Boo$1@6pw?G<|I}{[Jk!ZNM,#fH6WU]v5R%R0' );
define( 'LOGGED_IN_KEY',    'DWw:K*AoU]Rm[=h%K4JmH1dW+aVl]%4bpo=ltMY;Ui{2]=W%:bqT],4^q./H*mD8' );
define( 'NONCE_KEY',        'gvog?]xAM2w8,Sj~A+NlX[H`}<kW->;4!kGlk/qJ;!+R},.E]Mh`f+-W6wX?}nY&' );
define( 'AUTH_SALT',        'PZ)8Ym <?a7U$KG{k-|E<wS,?znuWRCUf%#tB`siZG>z+:~=xY%n7:n~:M01`c,(' );
define( 'SECURE_AUTH_SALT', '#<[MAk.k^gN**LU_oG5X8 mT^GTIqQ#8(zv@nK&7.7sWWQH/~h9o ^wa!TzbYZ}b' );
define( 'LOGGED_IN_SALT',   'ygL:r@ao}zM4pUk h~0d4{uW BARpBF >{{cX<)RR]%| }1h%f8Y  }8]y`3SR79' );
define( 'NONCE_SALT',       ' U$SW]@}!2:&t[~:43]8vUVu!lUKc8daJ:.l4kfle*.oa3Kt<f}=oEq0q[%) gRY' );

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
