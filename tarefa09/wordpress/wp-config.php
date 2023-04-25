<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'micael' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3307' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't2(ezJG&N,.$UVpG^D~[H,Wo&gDHR zvRj6h~5;8_9%pn;8=!0[~^VS[Bd/@MMUY' );
define( 'SECURE_AUTH_KEY',  '*v#dW!{Vr=T*p[Uqdj&<b<4^msB.M{@o|gSK#aR3VX,n`0O?[V^k<30~u0B6 Efu' );
define( 'LOGGED_IN_KEY',    'ulH Co$AH3,f8]A+5sm1*)G2dU80=M{MdVGx~8#X#f5|KM_X{X5b*Jt9_i(3)K;g' );
define( 'NONCE_KEY',        'y)+Yl^wU_Y8#4gI8lOec.n_ |G{~0C,x$;%cSF9T:R@[n>4(+BnuDZU}w?S+Arl%' );
define( 'AUTH_SALT',        '9dE_|mT<X]7U2v,Spu5h7mb&hXbC>A)Dd.?H0R8E1F+[(f!t=`cc7-huA~<4*96(' );
define( 'SECURE_AUTH_SALT', '&PrX{$U .D`51MJP..jTw^A$Qf!W~x[>[_T!sB$*|Em+84G!f3r~8f9G9u?~hdj9' );
define( 'LOGGED_IN_SALT',   '9nhce}@o=>|/+dg+#GUd]|cazBzpJuBrwSGeM5it(t{E!J>KZ)8qn_-ug(R{OeRE' );
define( 'NONCE_SALT',       'U.@}I3OQCKc^>bGuc(!Rr}6%vGvH?Ra?MRP<BuI5^0.|c~$WZCqT8)!}Q(Cv>JoA' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
