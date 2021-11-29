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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_demo' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x@%6yPyB`=b?CN1NQ U5J3{E>Mx5S=G4je|yE[UhgZ6m!!F0?/.6QNtG*f}>3e#+' );
define( 'SECURE_AUTH_KEY',  'c*m]7,.-Y=>8(So}X(Kwm 5t6X)U:(r:@WiA6y55^}5=Ju jvf+_BVg<J dfk4oY' );
define( 'LOGGED_IN_KEY',    '>|}]-eCV=+duAH2qq0H0H[y=!Y> K9]U0uIzm?W,Ta)]knjxyYlF@zj>qPWR3}i3' );
define( 'NONCE_KEY',        'i>d?D/B*wN>nCZ=-j@g2BE8oM 7NUDR}Jnu@=sf?/&Gf(]s){rw})ik83fX7{cm[' );
define( 'AUTH_SALT',        '.;1Mb$#yy51%QEDO1I~t.NgfpUp/)2zFyd8CNm@7#&Iv5jh`T7WQL,H`hU;?>?8Q' );
define( 'SECURE_AUTH_SALT', '?ht)$kB,&}:|y:1v$fE`qrHH]/.V0-Y&fyQ.,eiKHJxVm`b5o^i#9O=BHAR=DWL9' );
define( 'LOGGED_IN_SALT',   'G<`HF$x5wF$2.{98n{W&bp}m6t5 -gWEb;jr)9It=~,(.i.$0|LqR?})nZ{lf!x.' );
define( 'NONCE_SALT',       '%yVSe3/+65DRAU?#mbJb|=%|K~4)uA7H^!_mi8L)^e~6exuP0=8_EMiD7>oi/=71' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
