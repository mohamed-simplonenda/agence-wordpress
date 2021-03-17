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
define( 'DB_NAME', 'agence' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'bN*LwNG/Ow=QZl3*nB. qyj=XZDS|O//9ND<}BH3Anu495!~X|DHVI,Xc}N)Wk!n' );
define( 'SECURE_AUTH_KEY',  'qEpTLaG1 O!4<s(@HrSkB(F@Wf2UHX}P]1^IJ4?EeuHok62)gbI[0%dv:yH`NG/l' );
define( 'LOGGED_IN_KEY',    'ju0?<a3XNm/.znfBsWkj? [z//mZ4}/-gNTk|J.C2yLrN!vv}Fru2&^;R;m}{qb?' );
define( 'NONCE_KEY',        'rwNj__5=H B_l5,Q:_T7Zj= *1uA1kR99w6Yv`1.6rYpFT-R{8$rDm$J0-HO<CEL' );
define( 'AUTH_SALT',        '*wA 5o/4-%UYUTk+iVg~i%[rP:h4:MWEjtGDe3eE(5+E^;ukg}<|y(*/&I)-05c4' );
define( 'SECURE_AUTH_SALT', 'o&l+KW~yJmHZV/+e&Iuv@XIluUJ|1A+`;Kw6ih8:galkH%CpWMrol{GX8]45b<`d' );
define( 'LOGGED_IN_SALT',   ',>)E$^yoEN(q978Zjp3]E~lUc l<NBWSc=3?p!c+AAk!=r wl1[5%pL2|r+nGUbD' );
define( 'NONCE_SALT',       '>CvC+73qa:Y1J1H3f+O6[-!:ZCIN vPzE<8IDUh_I0`E~B !*}c-|.B*CmbhBGd8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define( 'FS_METHOD', 'direct' );
