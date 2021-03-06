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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');
/** ACTIVE DIRECTORY

define('FORCE_SSL_ADMIN', true);

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
define('AUTH_KEY',         '<c/q*/0/!gMUP%>Ux]/?(@S,OvA9ASDPUcs8{s>ZV`+^a&vyef m(R#F[O6/WKZC');
define('SECURE_AUTH_KEY',  't/Ra^0!PUs6^IAc+ ko@DR8dbh.T7j#;0MHaeO]K,HyfF98Jv|zWd,I+FzlLmm8d');
define('LOGGED_IN_KEY',    'ymq o?CU.~+DsWS-_[ageR6IGgsA[{5_Q`/L@]a&fx]zn9ixDng=8{D{))7uR,b<');
define('NONCE_KEY',        'X&UgaJ4ZZiW4Oy?:U_WB9O/Isy;rKpg%fVUr[gw=}XDa@GD.jXNnc?UPw--~Nfe_');
define('AUTH_SALT',        'kk)P(MHP>}<iU *YY;R.-7UN2&aW~vnyWyJ&a{lf[aV+1QvuXFj1,Nn2lJlDBy+X');
define('SECURE_AUTH_SALT', 'S%=c9%u>sPC%_/onx=ha(R!W0y~9`rz&:oYeABcS-Y/7_)a%WreFWWx^1~,Pj@Ea');
define('LOGGED_IN_SALT',   '6G>iCO(c>dkr_YO0+u*?@Vjf]-z2D;}d=yM1?h=HT?!kUJ4u[qX!Dm+Kjvdk^qW4');
define('NONCE_SALT',       'gG6__:+kSGeJPHOy#oy|Q|qT:{}y8z;b#rW0C!fu!%4FD|#:+cI3LoC#;hzZZ)XD');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);
/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

