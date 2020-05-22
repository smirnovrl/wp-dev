<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_dev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AF6WtmC^r%10Q?}qylgXOb]4kqdNE?<3|sc:gg!kwN gJKd2KrM8%( t18o6u&Tz' );
define( 'SECURE_AUTH_KEY',  'N~<evqV/X/P7-hF2u@g1>-E3G@nbxjP;fTT1^{8t[U>?qOraVR!ON9B&EjcBg2J`' );
define( 'LOGGED_IN_KEY',    '&wwN9Q]Rrd0x+[Z8XTpF*Q~b;7<shu{VAH h.rn&mhfRA`mmWjLh1vLHr=7tqr);' );
define( 'NONCE_KEY',        'kXdEYvVe^M-gEPzbK_>Oq!I?%3@5%vTokt)~%@ct-Ems+}ev+1ccK k7cGsU|4/i' );
define( 'AUTH_SALT',        ':|g?J+hQ13~7;9lKVw-HI(yn$ <^QR@(.w{+0;z9m1w;9!ZX_,yz&Rk1f]Uv+$WM' );
define( 'SECURE_AUTH_SALT', '4*wl!|,.>*Vc8mqHf/;x8X!tCDe-P+xug>}C.R&&>@/wy+N|Hi_w5-J&6,A.+~k+' );
define( 'LOGGED_IN_SALT',   '>IS/6su}kl cL=>(v@ru+f/Hj]I;~P.U4*41+Y6rwG{Y[P4bk^dF2q{eyNB= KD4' );
define( 'NONCE_SALT',       '/xysEn{~Tl]txA;kB7s<q$T!cTggQo:]f1|TF!@}XnN{B[IuI@kr,QD#/..;D}~d' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
