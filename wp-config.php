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
define( 'DB_NAME', 'arcia-impact' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',1,sQ}8@A3z{R9^1o_#P?fD]t+QnKI$,p5$QeCZ!uWr9!9{8h8db1?HA@n/rm-AP' );
define( 'SECURE_AUTH_KEY',  'T:,c;y:WZ0@%?lT)qOou-cEs1h?eO8(3;yE7b4zm}|s1AnNQ&5oujm(L!DI/JF}B' );
define( 'LOGGED_IN_KEY',    'i5D_OlS{V)*cS{cmu*KgJL4q+f$9IZj)K4!{|OMv)eK[C&^.~l[--E8vMLy(z^^x' );
define( 'NONCE_KEY',        'z!I=WyL=ESbM,8!)a>_zw:lX~CLZ|iC@8xGG%dQWVs9-p5(-xx+R; *35*|1Bi7u' );
define( 'AUTH_SALT',        '$jT~S ))d(29,uHI0LidW**|7MI5Of6Z|cMc|rZtE/KlJo#<1pj8)L  tjMcWI6E' );
define( 'SECURE_AUTH_SALT', '3EknJoGf&d`lb(f3-*U=5I>U%g@oAv541v~v{r#FR#)-OPz@9=XdtJm2`dSqkcBA' );
define( 'LOGGED_IN_SALT',   'KB)O@y}n)dJkXb|{<K-Su[vu1?{R-Oyg Ak^p`G[=&p ia)yo Q%N_G?1 Z>P5IK' );
define( 'NONCE_SALT',       'IZIw{mr|4{)1*R9GJ(0JBD560,[glKCu,&KnJ5H Mp$@*P*JH~1)MSM>88$kF)NP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ai_';

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
