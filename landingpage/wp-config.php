<?php
define('FORCE_SSL_ADMIN', true);
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';
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
define('FS_METHOD','direct');
define( 'DB_NAME', 'wpic_intuaition' );

/** MySQL database username */
define( 'DB_USER', 'icube' );

/** MySQL database password */
define( 'DB_PASSWORD', 'infiniticube' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress-mysql' );

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
define( 'AUTH_KEY',         'cSM5@ihPzPHg+7er9]VFk2=DtLk(]ML{QN-`y;_PvF~El7S-ja0LD+y2R1qe4i3y' );
define( 'SECURE_AUTH_KEY',  'A=3&OH8l#On8%b@]DhKU1~$d+@jwb?T{ ,aa%&|[wHrf{luqSuK-~f99;dhRtxR>' );
define( 'LOGGED_IN_KEY',    'T^7^s?BW4&oL8&&UQ pgd0Scw&%R}!z$l^Pq;sWqm/%=WHg(Xe|VWr!mg|#N 9vw' );
define( 'NONCE_KEY',        '}x=z<@{EL+x)0gcG8M6614~wxJ#4FR)/?uFb+s%-ni! MhR0P*c}&t.;raiR)M]p' );
define( 'AUTH_SALT',        ':xI<qlD+Ep/;N<-cEh UI-U;]g e]SAUG:Vu7(*mZJX_v7m0vRv_&@J/8*ZH(s@D' );
define( 'SECURE_AUTH_SALT', ')+P-=}n/=.e?Gdp^^>i|#cwli}ZJ&Y]J.Rc/@od@Wi6WJuQ;oN?2~eND),*8fpg]' );
define( 'LOGGED_IN_SALT',   'xa&mC9!HH!:3VKd*w*,68cg9(:9bU`[:S6r$3Gwb+k8SZ)E7*Df<?e&`lF71f6{a' );
define( 'NONCE_SALT',       '%`~4e!CzP,OEq?nk:x qBx^^x##?un~*bGGbB0[b.WgUOD}*20>,/Vo_$[.1v1B$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpic_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'qaptum.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
