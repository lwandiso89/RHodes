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
define('DB_NAME', 'rjrNew');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'molia@2005katuku');

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
define('AUTH_KEY',         'nz,8:5hRk3%-oZ;.p/1wgdLDn=egMZ$g)JjFT(`De?KzpHfEaTd 2HE|PZJT<_UY');
define('SECURE_AUTH_KEY',  'sT]<+(Zf9|DH3Mct 27R,</R&N[V[N:m=i:p|{P)(h ?f@R5cc{hbUMJ^|JQY0^I');
define('LOGGED_IN_KEY',    'cALy9[xtpW!>PKEXZ Snr2bS{pe(=ajrJBA%b-[K]?ka`A_>u.TJ+P279gXEjQ?G');
define('NONCE_KEY',        '`B.KO26SX6n@8v:v#NXHgmP1gb`dd`bVTQ+BD;LgMv:+e;vI&#W_|+[$JhEBJABd');
define('AUTH_SALT',        'GVU`R2{,9mR,kfIa]_64yc]42%[j%Jik5E`5!6bOj`pt`FvO=1L?*#=bhA@%|DzT');
define('SECURE_AUTH_SALT', 'e:*eEGKVmWo3!Kb%J?_q{q}ID@]`oNYyu]ag$0O<gEe>V1w<]*9Z,pO1?|N&[/XY');
define('LOGGED_IN_SALT',   '{9$e.Gy>LC4(f,VKL[?Z.Bnj;8,1#@}#/~1$`$.jsEMVui)(q,pnU?3;)hOHW/H$');
define('NONCE_SALT',       'v?60^JDen4Haz=TSgV=|#S$aU!J]ELI/AEG.&r+!Iul!nfUD{HtL64ZM9#i>-O8k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rjr_';

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
