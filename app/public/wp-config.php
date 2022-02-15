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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'XPeUb9NrIIa3WCr3VFE2bCYaYY/Ft28Suw8p+0j53exbD9EPgQIu2ij3d6de9F/a+fCHwKvBQZuXw3cdse5I6w==');
define('SECURE_AUTH_KEY',  '/OLWo4wx+hXLg22y5UUGGr8UjgsVCLXziI7U4nOaVBq89M9DnKTHCkCpwf4ZFSE45iitZ8oWeJ6+lMB3RRKg3w==');
define('LOGGED_IN_KEY',    'sbY5VnimyJpnKcoFIfnPhf5oS2jXvKCrz2yaMgyg2SJmb+xZrvQ9FfcMwg3YuK3to4EyZ/P39UojtfYHrjvkJA==');
define('NONCE_KEY',        'MwcDsRq8Sireh1sZZj3kH5tceJn0gnYLZTIckjM66DrYA+F5wAzlqPFS+jpyiUFp+taUbCmpseQ2u215YOIKuQ==');
define('AUTH_SALT',        'RC3Vhk9w6vC2RWsYenEocJ3oVa2i1ZhMtK1DQk23PEeHFUHJ+K8SDwhGHWul0A/+GKoYwovT7NIoF677jyvZdg==');
define('SECURE_AUTH_SALT', 'ayURm8hvf2IG0zoaT00oVkUlb2RR3/WYGy1UjajxsaRdldoaTg1iG79MK5DB6ZNSNeumt6ZTpvOV2aNw+Zqmeg==');
define('LOGGED_IN_SALT',   'tLDILx1WZBZviPwdKYOzAOnCUKDy+ILBuwvVEsIIJ07o/ktRsxfrjDx4/u6DXsir5p7fj0VNU5KPtSS0DKoHEQ==');
define('NONCE_SALT',       'VhW23muk90lVTvn9gHLRQIOlgr9/kQgIyYEvBtUrbc8SwWd3ax6SMKD3s8RF+FXZ5g3G+n2zIqd4sNauA8XhbQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
