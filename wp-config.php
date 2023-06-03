<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mppp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aYd,yZ2$YoW9&}lFR<I;1?$t4^X@ hIoVA/G|&42$pb0)U/h$qsm6Lr/pYQ}hE*F' );
define( 'SECURE_AUTH_KEY',  'u{y.{3_#$M>Btyh_@H:%!$Wb4ZaM&ANMK,$1Wrpr$K{LqQ4v[Z/q{^({DK{$ou-Y' );
define( 'LOGGED_IN_KEY',    'C,7p+U:cq0@Tf8b^(cu-|#)ht60Kn5djg_dmCMB_J/7;HlTd{1/!z%Ruuo(yuz33' );
define( 'NONCE_KEY',        's|!(1pjyhvyWfHC#&;v_LZnQ9r/fy$V>QneEhcJ;[aQ{&ek.(t%EgvZWlK|5yNF#' );
define( 'AUTH_SALT',        '6iAcU-7J&.{GlhhfPBP.=iQzVUShSv;XL6[$ZPNm#v60# !j&A9>NecLtU^]?1 Y' );
define( 'SECURE_AUTH_SALT', '-n*#Uc!O+D>-6g<g}f9rNWg7 %Vy!y-xa_|+%OKeP%&=5fsqU>@bqCd8G>n9T_$N' );
define( 'LOGGED_IN_SALT',   'OCa4&D@d?jn<s/-z~*[<ZO0+d~E2Ej=nH?jr3&W*D6Y.(hjsW/[KRIq2;aI|pJT9' );
define( 'NONCE_SALT',       'e{6/D%xwjY-M5rq/ m^<`yHQmZwq1Zj:c(beeC&?ph!i*JV*7fgx2G<`AMi.ql8e' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
