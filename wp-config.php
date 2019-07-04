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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV['DB_NAME']);

/** MySQL database username */
define('DB_USER', $_ENV['DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['DB_HOST']);

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
define('AUTH_KEY',         'Kr)Z%jL8E9o%s=9v~GqCar!`]8`[q$2Ae23mnI};~-&nrYbx1xzIt]-b3?XZiWlc');
define('SECURE_AUTH_KEY',  ':a`YmaWwnHb+Ol> !`-,Vv5OwWSf^&MA7*K)++UZ/$]-)Crl8/8DbbtKG^-J#dCd');
define('LOGGED_IN_KEY',    '-sFhB]]`}hIfs}VIK7%3:--r(<TxoJ3ZPUKK:&tO`Xdu;<^ls8W6:+V0d}M51z+R');
define('NONCE_KEY',        'VyVo($B&1#x)?^EF],0pGq-Fc|3 U$]`F$PhKIu(`z+7I;gPv&ViHsxqW+>U/x-3');
define('AUTH_SALT',        '|xIq3]{ryB@{^Pf1rm{ChZypMc*r7^m.nw4K%e,-Iqn2!`<?1JH}XE5|dn|Wh!EP');
define('SECURE_AUTH_SALT', 'ZRefx8K%8fS+S)$2J}FjwcB~@Q,w9@mU.&Z|$r|N07sn&0Z Z^4Ygz;8X;7~.$Bi');
define('LOGGED_IN_SALT',   'Tz}0w]mDzOrN/2xVc:SqlwBh?K*@^JWe|+ZJUj`niwPsAt]~%dx;L$nV3VY%QEtl');
define('NONCE_SALT',       'sym exQ7z*<0ReXr})/M/6gMy{ssaR0F}qLG-Ti5&PNVtQE+BZD7|gs.5Y:rmSQI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

define( 'MYSQL_SSL_CA', ABSPATH . 'ca.pem' );
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');