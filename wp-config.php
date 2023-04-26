<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u677782989_4oclT' );

/** Database username */
define( 'DB_USER', 'u677782989_sF6lL' );

/** Database password */
define( 'DB_PASSWORD', '1biDr5BQxG' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'n-A|=&lF60gCGH3F-yFE.#iM{cSlekc-(12tKY32D(EH>@#%|T&JhUrLTZrXB,=0' );
define( 'SECURE_AUTH_KEY',   'N1dM[=~g^p,4MW-t(v$EqjS=%Y5<93,zb*EKeap$XBiE6EFXH~RI%jW{-cA>t[{c' );
define( 'LOGGED_IN_KEY',     'Gt#?(8SaYo1-M81)p1%sfzg|~?}uRw_WYv@^g}X)R+f)K{^P)[P]Q]{jnnXssoz[' );
define( 'NONCE_KEY',         '~+%Vd:Oq>m6 sWQyk!7MaxXs$Pr;S=UF<oGnTgib`zqvUL36Ecv5H.l%|z(kTe-&' );
define( 'AUTH_SALT',         'Ru~=.3B{3{D]TtyQO](KuYjy3Zs0&):n=t?ujZq*+l0kPj,D+=3#2?9:0!prridW' );
define( 'SECURE_AUTH_SALT',  'Krc~F9-..oiu5 :{`LNm,X5pm2:EVp>9ndhO`PM_6d^0C79}e]D(B5-5-l?yoM,`' );
define( 'LOGGED_IN_SALT',    'MsI]In[lqCR#*K:R!TEXqSpc(~ldAXY;t<^X89R^&>C[c$0+DQ,y,<FNSzZLO|:Q' );
define( 'NONCE_SALT',        'H~EY:3m|a1Mx%I .#?|qEG}[[[[,%PrJN9B xi>S{iU`:|a&n[bLcp?)ik!]gz|K' );
define( 'WP_CACHE_KEY_SALT', 'IS^XK[;8&wcA%hE#M-{<?4{Z0rX>7+q G/T1V<HJ_BNLC1k~n(o89D)Ykj[xSl*:' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
