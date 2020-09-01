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
define( 'DB_NAME', 'design' );

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
define( 'AUTH_KEY',         ')>hxo}ok&I53%inLFPf/K3[2R#$7:OII&K3Nfwp89ddJOdT[-oB%H6.3~<+[Rj)t' );
define( 'SECURE_AUTH_KEY',  '?_Y;qWCtSdm{Tq*]Xx%<Mz:d^^q^v`6k=&=AGE )DPT(`9xo%O2^X/{7NJ7ub&]I' );
define( 'LOGGED_IN_KEY',    'tuQ@2m:#c~%6ZHlHr?QR5_wvv+6dC!>Evs=[z_`n{a! wL:S8#*3n5L~%0#/6AxS' );
define( 'NONCE_KEY',        '7=b6Ou(PWJr]!v]`(GtNs~vT0=@RP-J7#`k~Eq:`1p_S{8uBK%p?Ym?EmG*av|0R' );
define( 'AUTH_SALT',        '7b_w,eyNd9h}BA9zAI-+Ovcj0[LGQ4ExO4L9_)C)J>2jd0zgJ0LfkLqo&#J-_dfl' );
define( 'SECURE_AUTH_SALT', 'snH0K#fhQMUl5mIEaTH1h7V%8[R{WyHV<pM.MQm)72XvvzYyN?UmjVC*)Aqyut)M' );
define( 'LOGGED_IN_SALT',   'F9,lK8}=|qdzPRavg%KMbr?_zeUFX6sq0n<(I vz&0rs5:)w4[:t{tl&cW`r6jPW' );
define( 'NONCE_SALT',       'AW$sWi[N1Jx.h|^P};i[lni^Y1OiI`(EIx~~9<kQKu%ihhFrgn 2-}n{AL}!u{Gm' );

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
