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
define( 'DB_NAME', 'i6382224_wp1' );

/** Database username */
define( 'DB_USER', 'i6382224_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'F.sqV7eeiu2VrIel43b89' );

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
define('AUTH_KEY',         '00D9rzgOYKHoNnA7GR4JS32un0Rzz7OABAgtXNvKtEB5NaKLm71hxfDElmOCyI42');
define('SECURE_AUTH_KEY',  'JJhu9sHE3KcEctri1VsvfzMItABYIbvG5GJRN7hUnuLEahrOi83rHNDyEn8JEMTZ');
define('LOGGED_IN_KEY',    'f0LEQpAprniaa5fTnCfctk4r32zsLGoindYA7wTYwYJIUcoFdtdl8TeRywWxVyER');
define('NONCE_KEY',        '3Mxe76qy398UY0zu5gqbN43t2kxVlJsrowvzWXlIU3mQx9vkoOWdmC0Whf5BCUni');
define('AUTH_SALT',        'pClgRrye3qq8E2SkC0YkTpM8vO1FihAqT8a0a21U9SmHYM2ktVQsMSRd5FWUq46e');
define('SECURE_AUTH_SALT', '9mJdPgZPwA1WGoTTc7Ea5paxfAgCj2a8KsDWd7Bwxp72djWUWTLF2TEJGBKAcIe4');
define('LOGGED_IN_SALT',   '9X8aWu0Q7TopcgeXvhYpCpIFn9R6w3jaoBNUnxIbHehP4wmP452KqfUiaPIL3bDt');
define('NONCE_SALT',       'Azemf7ZdIumiJ8km6l8ryPJijt9ZhmKz6hZQ0104FURazwEhghejT59zbjZZV3nX');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
