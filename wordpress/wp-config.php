<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wordpress');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'wordpress');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1p6:QM;gTg*CZL8gv/%{OVg]hoa_7#uj!A/k u#QFv-g*M8f5M .!mBzR:pIfw)O');
define('SECURE_AUTH_KEY', '%-mS3|Q9]uGYOuai52F)${-UX?@Y_Awt([~n&Vdr#I&%); z.T$-fgpb-x,-3e2B');
define('LOGGED_IN_KEY', 'OwVCG/aE(]W?H={5@?O~U3Y9%=#m:D^Zl!if`KZ!qShR3hzFXF 9msO+KTsr/Z}>');
define('NONCE_KEY', '_Qf7z/|23^%X%~1D%m2p1rHgB!2{BC!ghB5mA@F&NyO,BR<)maf!oLqhX A@iQ8x');
define('AUTH_SALT', 'cNx~k^Pc<Vo,`Tq6BtkLh+a%_5~QIW|h;$v[UYi&U-6}{i*b|KClSA6R-Xw`>6Z<');
define('SECURE_AUTH_SALT', 'H6t(YkCGIMzaZU;y(s^U|_ m/S1viAT{?IKo3s03am}rvd=m]_{@ocaOY^xxA~Mh');
define('LOGGED_IN_SALT', '{5]4c1T&V;(qmWAQ]0&>4TQz@qklArX,fb?{kvQF<JS|_R|t$3uWT@3mT[=;]?9D');
define('NONCE_SALT', '/yudoe~_@VCg`/xVt:xdLsZA<%YV#79@9>`4c}b0}r4xkoss;mG8jOL;N2p51wid');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
