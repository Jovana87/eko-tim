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
define('DB_NAME', 'ecotimweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Cpsc*zI4@9 ]XA}2kA4Xyjfmtm{&[Q1t84n}0YM*dX-Plf#*}gbbn%3t8Ovv9}KT');
define('SECURE_AUTH_KEY',  '8phN&^(FvMy*DfvLy{/<2006?$5a x/*;dajU[?F:wVoh<e!uY2gBf#zT3kj!Z=P');
define('LOGGED_IN_KEY',    'go$=Ho%Yq-t[A#z*!:Jj22c{0p6=Mq&=bF0EO9EhU/wX(Q$Fuls$~9emN%AO61 C');
define('NONCE_KEY',        'O$t=|%E70QU_6,f<n6CNk0ECq*MGq>u,X+<z*tKVnq<H@F3F;fhB>bU&znJG^k.y');
define('AUTH_SALT',        'gFprRC_@+3%g}0p,]ExW5*(8YN+<}Tyy8<^,%bRv3?MtQkCHI-;~xF!X!*3[{/Bt');
define('SECURE_AUTH_SALT', '/1}i4B4]-OBt=0=I,mN?N%3?.>jjgMxlbspI}Bde2!Sw9a@9fT[`tj3feBzM#DCJ');
define('LOGGED_IN_SALT',   'P@rVU|]*NmSa+3A8M? 3a+H^v*~];BgC,`P[/3$[KeuU8HM,dEMa+<cZ<3Da+mPA');
define('NONCE_SALT',       '?9/S_y]8P.HXI61!-iZqG:%v+cx2]~/=Ae>=&1hok@^5}i7QLEq4a[7]w{|}e,M&');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
