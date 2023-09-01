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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'QWVKSz+4Ykils6s8f9ZZ6ujozpgYRmD9olgDWFWDJ4vGVH9D6VgUdluY8GoS7MYZfy9Jn6NjukjuHNI3/Syu7A==');
define('SECURE_AUTH_KEY',  'pWGekCIT/yP9uZgIwrEA8Wg6Sonr0pgZOB0iud1pKfHU7gikNmMIdH1u4gWtgdw8jVPEBy6NHSB8ys4WoSUVZA==');
define('LOGGED_IN_KEY',    'zbjpxUHEeqeNNr7oDifPprDUSxMQ+5/oCLE1qDCzLEekMQRkkow3o1SHZYjB8850fqNw6/wiNy4hQFo3ENww3g==');
define('NONCE_KEY',        'H6ogEmiDXYk7ndM0fKAQU1dyi7I2IopWXoFJTmVU4eTKPlHxqAdz3rnGeQHO0Ty3LFY315FfHWAxGoUx8szfDg==');
define('AUTH_SALT',        'klBfMU4gE1N7cBWIpSdtJk+GnP+WlDX20violNP9GYzFczA4j/xSnOfvsD02+Jd4S58GqNH7Ox0chVROW1+Txw==');
define('SECURE_AUTH_SALT', 'rqta6ShWWIpLuPE+SJQnaYhbuqIOlokNHbjQNnw6ox6PjkNo6w8NTwurtULdwmi7StrWTEOPcT7hs6djDTdBfA==');
define('LOGGED_IN_SALT',   '7+oM/VvbPvtegSbxQ1/UKL3fajGY8qLEqro5Rq8LhCxetld0LqhXCqLQWt7ibWi4Hd5WLQ4bDjv+YHfta/xW1g==');
define('NONCE_SALT',       'c5g4ewqBp+8RnmpOL8BzVGBWtJOaVJNUxUmdGvdUVgaEcatHyPOb7iGbUb8gZ7GyBuZUpITl+BmpvMMfFwasuw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
