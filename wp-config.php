<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
//define('DB_NAME', 'u669706290_hotel');
define('DB_NAME', 'hotel_baza');

/** Nazwa użytkownika bazy danych MySQL */
//define('DB_USER', 'u669706290_root');
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
//define('DB_PASSWORD', 'student');
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
//define('DB_HOST', 'mysql.hostinger.pl');
define('DB_HOST', 'localhost');



/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r!H2W,RwHLoi1]WQpFr3E[ImcyV!x$-231l o+T=dO`4;p4(N#[{r}AJdzp^T8sz');
define('SECURE_AUTH_KEY',  '0Z7~X<W1J3vj>^n:%:EQ[rWFlD2~3&@jL11ntUtgl%h&|3cO2H%yCl|?UHJ<~](K');
define('LOGGED_IN_KEY',    'Us>4?C~[9ZKM:Z{=[2YUZw>u050TZjp:|2w#>~j})x/#PfoKgsX=}Iju8piG?1x/');
define('NONCE_KEY',        '~S6TQU;!tK%kIqPg{P`V<}&YOk8~u+Xq}1+5&!VC*oOM&oM1=>{R>0ddI@Pj>zy,');
define('AUTH_SALT',        '.]/1Y&FeT7Ti^nqJtJaGGN~nxm^65I:OLK=Uw~X0$Lgwx}29kdfS{l}T-mjt[>#1');
define('SECURE_AUTH_SALT', 'KyVBnDYGJK8!y7>3*wZ&g?n7(Xx57Ai*tfOl27Nwu;nv[VUS%HN8MR<0-OaH6(:~');
define('LOGGED_IN_SALT',   '0>mP,:wFScRs!8qVA7ikvx#F^(K~Jj,[4zN9*2Q|Us.5wB[dXVkxp*QI-C7+Wb_h');
define('NONCE_SALT',       '<N;a9YC4#/gn9x7jPV6vt^QpvSl{^dio.SKd?>b?lVX~zX@bf0H+Y=BA?S&9(FXN');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
