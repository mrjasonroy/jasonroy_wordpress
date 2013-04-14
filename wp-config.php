<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mrjasonroy_jason');

/** MySQL database username */
define('DB_USER', 'mrjasonroy_jason');

/** MySQL database password */
define('DB_PASSWORD', '2S85hDrG');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'D1QVaq8c1dMFQb43MLJYbM59dI72kDy5qnB4hRbwr7UNc10T2O5q9qAXfpJvXO0w');
define('SECURE_AUTH_KEY', 'h541Nsmmt9M6i4INEI4LQt5ezLmIhA86icPT7sHI2FgUzpYqhdRVcf8mwzTxWyLL');
define('LOGGED_IN_KEY', '7suVNLOLbqfcnqa3ljHZ2igwxvPpxvJtu1k0h5gpVaCzim5rcxZCMxDw9MEBpZ4p');
define('NONCE_KEY', '7blTsbnu0ohfMZggPCkpEDUbMKrACGWA8cegdWQUMUMx9ikwTl6UKP1AV3FC27dH');
define('AUTH_SALT', 'ZPNUr3fTVFXZ51PJc6ru4GFeeL7E0581fK0oo8j9ZBhodjvl36U5o2YydloWrotd');
define('SECURE_AUTH_SALT', 'QSI8M3szvHiL9gJLC3vY5FxhGn6f05H6NoQdiATazghLX2oZM5xcIUkOPhqgWJAI');
define('LOGGED_IN_SALT', 'DZJXOlL99hqhaRxNmjAV9XnvCSh4l4Uyd5zOFqDYQqHnOAaTekBOrL3QLJozqRii');
define('NONCE_SALT', '5m3fxCYl1IDvkgihGjUa1KasjHfCPAWn6Svg67o6CsspBjJjY0NTlIyCbY0EmKyi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
