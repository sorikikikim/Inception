<?php
/**
 * The base configuration for WordPress
 * wordpress 설치를 위한 구성 파일(db 연결 세부 정보, 다양한 구성 옵션 설정)
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
define( 'DB_NAME', 'mariadb');

/** MySQL database username */
define( 'DB_USER', 'sorkim');

/** MySQL database password */
define( 'DB_PASSWORD', 'sorkim');

/** MySQL hostname */
define( 'DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 * 워드프레스 인증 키, 솔트 랜덤 값
 * 보안 관련 키 값, 주기적으로 변경 해줘야 함
 */
define('AUTH_KEY',         'i<+tF6uDU,4.Vfvqf^qTT4ioP6q:5TZa>#AWLam3XzAMWot.USIqF/,g51Wt+C2*');
define('SECURE_AUTH_KEY',  'VH$~+Yzor+7!o8EEKKS_v)6Him&nO{$.+O#Gbw)[zZ-u`Xy0$iS}4is3(,j@v2M/');
define('LOGGED_IN_KEY',    '36Bu;-VtgosDQf]hkoy*gXX>Q0PK;g[9^aqN=njGtu$hC|FC!?UjC+8tYC-g+Q3|');
define('NONCE_KEY',        'OY2b-q9x?{>eFY4Dksltf#?}]gHp-d*:+oja iD1*#B7@bvuEp!T:,[feDu{n}G1');
define('AUTH_SALT',        '-dFaC1;{#]=~UFc2F15i;QduF^p`{K)@B>A-}).`6-zm<tV/+!R}Q]Ye|04sU9>&');
define('SECURE_AUTH_SALT', '~ZG6+bfL[J_=G+0][b3p`NwBDKRW+&:|)5PkbX^@W<|(S0+$LNU(H2?BQFG2^hb.');
define('LOGGED_IN_SALT',   '`|oo0tLt+]~ J-di)_Z6dcn>) Bf<T[VtA$|c|%6T%QE0)y6.*Zz#V6]J^9XpBv0');
define('NONCE_SALT',       'Ex~8s|:w*J!h5-YubaM6:kazZn2RgAm>/p7N5KC!+lm{}OD(kW|GLRGe7^l5t>pz');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>