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
define('DB_NAME', 'blog_storage');

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
define('AUTH_KEY',         'k1r:kqq3t+-PfJ5n_ft&=b?Nf$yH_Nx|8PrIeo@38&!vYpR*A8;h_ZrL`j8jaZZt');
define('SECURE_AUTH_KEY',  'Nrg!x`Z`Oh`3TP_zlxrdNhfIZrx]|r%=rj<?S.~G %`JTsy~mJd,g},:%XRXOx#G');
define('LOGGED_IN_KEY',    'z9ArvGGv0I<9LVV:7umy{:,!U 0avy`?GIN+f@mJ7YH! _mAhtD RKkLN1=$l>??');
define('NONCE_KEY',        'yxFXJI*x][;#{6Th|4hXdQS.%=Trqu-;.evSkXUXw5f=@K$&sIbkW.P2$6?M$+q~');
define('AUTH_SALT',        'S(?=Y7U}:Y2wQx^!1#ei$[nh3.2|+#>AG^$w@5-hT.fzF7#Nj>YWQy2}&2_<f[)V');
define('SECURE_AUTH_SALT', '*.$T012U5Ra):moF%[W(=y.DjLs>8,0#K`LZTfu:^7ku3Jiz&)4 >)2lq+Jz{ac&');
define('LOGGED_IN_SALT',   '6p?wj#oVrtLzk`|?e&lyU%5uP:ULEE~f#xeVZ}ip%Vw,*`w;KC/L,.Uue.<K4HSG');
define('NONCE_SALT',       'r4/=mj5dvekTSSpzsbd==EN=qRLvhf]6p*WF-qy,Q;ZUIVL?|.%w`p^cf||4J %+');

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
