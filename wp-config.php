<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_c3da3796a8f5f24');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bcd170d537bea2');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '9fa40804');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f2#XODISf4bM0sXF`,Tv^@eZ vAnY&~4tt7CNbBGm-E#?83^$JtUklM-i,F9oZ7p');
define('SECURE_AUTH_KEY',  'g:HXw24>) 5<3_o)`KZ7wlq-Z8TPM-n9w4pJ+tu(s1(1l>SA2ZumNoq~[&?RW3{?');
define('LOGGED_IN_KEY',    'Fh/O~7gub4e*Ua$+!5=X%Sqsd~Z7CRK|#uy=Jdo;qAYV^).(|--+S[tPm;~^ye-d');
define('NONCE_KEY',        'yXe-TN<]gMnY4bZ$);V_Frn;bD*_Khi)UzOjnb4@Fh:7PLe}u?:Wb*{WAtLHy#zg');
define('AUTH_SALT',        'E]hYaZxw|Inp+]+P{o0_Q>7E3Rn/l5`LDq])pL~ub$e~{:G*#lxL%&r1/?*(Q3jQ');
define('SECURE_AUTH_SALT', '!/`IQb*gq#D|P!Oi<C(E|JVKL+1}~|XLvg?-u,)Bg>6Ysod:9AXe%/}khs>|6NJ3');
define('LOGGED_IN_SALT',   'D{_rZak*U9Lp-r^9e:AY]#W=h<EV+{aaI^n#D5*EC-NHF5#5UQ,?{m92K91.r8G^');
define('NONCE_SALT',       'esF5^@R#_=o0~frYEKECe+2{f_?Q3D&NJLNsSYi8^yk3krN--K@vx#~H,[?ra4;<');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ssl in heroku **/
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
      $_SERVER['HTTPS'] = 'on';

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


