<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'u586032023_ctgZD' );

/** MySQL database username */
define( 'DB_USER', 'u586032023_KtLg9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AOxEv3cAaO' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          ',l!18n<nJKd-~S`KRQ8qw~#NQhh0InVPR=#CD==XHW+Dw7q$2~~4pMGHF;1<&J90' );
define( 'SECURE_AUTH_KEY',   'ywyo:lMMB%8.l24~#btJPI_g2KsA ,3perg!fi7[7aL2?HcP,FCi1ZX1cD<[Bs %' );
define( 'LOGGED_IN_KEY',     'EsqYbpjTj{j/YB7>([$-1Xv,l<K{T;@oq_W0=e7(:((jyT4{wokU}`hdem/ZvSYw' );
define( 'NONCE_KEY',         'pr~ax_B>:V2VNun`.~+JaznCKi{r[Q@&jO+-b-2#:]T;t5W]_.)z06?*v=y%y6$g' );
define( 'AUTH_SALT',         'd6Toh4KA&3/XU[@^s7`!b:D%kZ3my98Fd2[G$X2y&@_Pq53q{klRtTh!EG We/$^' );
define( 'SECURE_AUTH_SALT',  '! u!krLf]P(!ZN|<cuVQ}F;4=>S?Xu`3Kva3R}tFs4Yp23Jks^HvX&sqVAM6CFC$' );
define( 'LOGGED_IN_SALT',    ')Q[No!`dG:xS9sYkH~up2RS;h{]Sil(<DU#MX-&LZU,NAb~o0|E0:W/a_K&jHc.j' );
define( 'NONCE_SALT',        '1X**{_Weet[$|3^7X!0=+s;$ofKy[cL(8d-{LB841.sHmx?^UPqcGsN1?hW:`ENp' );
define( 'WP_CACHE_KEY_SALT', '4 Ey`vhHR_/g=a-(H8WXq<l*pOC3Ec}^W:go4PW}--KZ=8m~_!L)R1{UgnDy$-X@' );

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
