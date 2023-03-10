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
define( 'DB_NAME', 'gaetan-baudran_wp_jhkfn' );

/** MySQL database username */
define( 'DB_USER', 'wp_f3i13' );

/** MySQL database password */
define( 'DB_PASSWORD', '%Xv*a^48GT9W9eeW' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%6&Ti_dh5fRtBT0&9w*;O3hN8YM[3KG[jsG0j/j&A53fX;f_hz310h@EJyR74DZ!');
define('SECURE_AUTH_KEY', '1bN8-P6KT&i28w9)|em:IV4xpA3S1)5;CP65+24lvQSFL;8O50*8_4(33%R-%@of');
define('LOGGED_IN_KEY', 'UCv(!2L3S#w4i78y8lQ*P7|z00%#kQ9_1XrO|yu)U~K~PM*_-!W%uI#9/A2M925z');
define('NONCE_KEY', 'YJmPP2y]+]/cje8--(F4n9c6381Co|kkUec2Qdq+O2/sicI;K-8499Z6I90z6w~T');
define('AUTH_SALT', 'Sk-Cx(_F4jN4s[4|SX7Ds6Bsy6412:1o~1|VK54O--dwI]5;a%)39HO]1j)+C;3J');
define('SECURE_AUTH_SALT', '-@i@t3fR[t06KSccQb_|%8j08V*hUS]4LrmfZ9JTo#%%E+8ml5aqr4cO9z[#|!0S');
define('LOGGED_IN_SALT', '*]j/A;02lp9109:a4_K@nn%keH0Mp_9gt&%G_6b~ni48%w2Sua@V;AB8k5C66B24');
define('NONCE_SALT', '0T#K31UGPpL5bR6@@B%Y(ZtZL3nRbH)M6m2Al27z6~VwvD49pnI55Yd7LX%2VG6%');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'U0bZWoXu_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
