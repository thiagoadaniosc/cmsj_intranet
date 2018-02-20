<?php
// Theme Supports
add_post_type_support( 'page', 'excerpt' );

//  Registando Menus
register_nav_menus(
	array(
		'menu_topo' => 'Menu de Cabeçalho',
	)
);

// Registrando Sidebar

register_sidebar( array(
	'name'          => 'home_sidebar',
	'description'   => 'Home Sidebar',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h4 class="widgettitle text-center">',
	'after_title'   => "</h4>\n", )
);

//----------------------



function post_type_noticias(){
	$labels = array(
		'name' => 'Notícias',
		'singular_name' => 'Notícia',
		'add_new_item' => 'Adicionar nova notícia',
		'add_new' => 'Adicionar Notícia'
	);
	register_post_type( 'noticias', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-admin-site',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
			'taxonomies' => array('post_tag'),
			'capabilities' => array(
				'edit_post'          => 'edit_noticia', 
				'read_post'          => 'read_noticia', 
				'delete_post'        => 'delete_noticia', 
				'edit_posts'         => 'edit_noticia', 
				'edit_others_posts'  => 'edit_others_noticia', 
				'publish_posts'      => 'publish_noticia',       
				'read_private_posts' => 'read_private_noticia', 
				'create_posts'       => 'edit_noticia', 
			),
			//'capability_type' => array('noticias', 'noticia')
		)

	);
}

function post_type_informatica(){
	$labels = array(
		'name' => 'Informática',
		'singular_name' => 'Informática',
		'add_new_item' => 'Adicionar novo informativo - Informática',
		'add_new' => 'Adicionar - Informática'
	);
	register_post_type( 'informatica', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-laptop',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
			'capabilities' => array(
				'edit_post'          => 'edit_informatica', 
				'read_post'          => 'read_informatica', 
				'delete_post'        => 'delete_informatica', 
				'edit_posts'         => 'edit_informatica', 
				'edit_others_posts'  => 'edit_others_informatica', 
				'publish_posts'      => 'publish_informatica',       
				'read_private_posts' => 'read_private_informatica', 
				'create_posts'       => 'edit_informatica', 
			),
			//'capability_type' => array('informatica', 'informatica') 
		) 

	);
}

function post_type_adm(){
	$labels = array(
		'name' => 'Administração',
		'singular_name' => 'Administração',
		'add_new_item' => 'Adicionar novo informativo - Administração',
		'add_new' => 'Adicionar - Administração'
	);
	register_post_type( 'administracao', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-groups',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
			'capabilities' => array(
				'edit_post'          => 'edit_administracao', 
				'read_post'          => 'read_administracao', 
				'delete_post'        => 'delete_administracao', 
				'edit_posts'         => 'edit_administracao', 
				'edit_others_posts'  => 'edit_others_administracao', 
				'publish_posts'      => 'publish_administracao',       
				'read_private_posts' => 'read_private_administracao', 
				'create_posts'       => 'edit_administracao', 
			),

			//'capability_type' => array('administracao', 'administracao') 
		) 

	);
}

function post_type_rh(){
	$labels = array(
		'name' => 'Recursos Humanos',
		'singular_name' => 'Recursos Humanos',
		'add_new_item' => 'Adicionar novo informativo - Recursos Humanos',
		'add_new' => 'Adicionar - RH'
	);
	register_post_type( 'rh', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-universal-access-alt',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
			'capabilities' => array(
				'edit_post'          => 'edit_rh', 
				'read_post'          => 'read_rh', 
				'delete_post'        => 'delete_rh', 
				'edit_posts'         => 'edit_rh', 
				'edit_others_posts'  => 'edit_others_rh', 
				'publish_posts'      => 'publish_rh',       
				'read_private_posts' => 'read_private_rh', 
				'create_posts'       => 'edit_rh', 
			),
			//'capability_type' => array('rh', 'rh')
		)

	);
}

function post_type_galeria(){
	$labels = array(
		'name' => 'Galeria de Imagens',
		'singular_name' => 'Galeria de Imagens',
		'add_new_item' => 'Adicionar nova galeria de imagens',
		'add_new' => 'Adicionar nova galeria de imagens'
	);
	register_post_type( 'galeria', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'has_archive' => true,
			'supports' => ['title', 'thumbnail', 'excerpt'],
			'capabilities' => array(
				'edit_post'          => 'edit_galeria', 
				'read_post'          => 'read_galeria', 
				'delete_post'        => 'delete_galeria', 
				'edit_posts'         => 'edit_galeria', 
				'edit_others_posts'  => 'edit_others_galeria', 
				'publish_posts'      => 'publish_galeria',       
				'read_private_posts' => 'read_private_galeria', 
				'create_posts'       => 'edit_galeria', 
			)
			//'capability_type' => array('galeria', 'galeria') 
		) 

	);
}

function wordpress_pagination() {
	global $wp_query;

	$big = 999999999;

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'prev_text' => __('«'),
		'next_text' => __('»'),
		'total' => $wp_query->max_num_pages
	) );
}


function my_forcelogin_redirect() {
	return site_url( '/' );
}

function get_type($post_type){
	if ($post_type == "page"){
		return "Página";
	} elseif ($post_type == "rh"){
		return "Recursos Humanos";
	} elseif ($post_type == "administracao") {
		return "Administração";
	} elseif($post_type == "noticias") {
		return "Notícias";
	} elseif ($post_type == "informatica"){
		return "Informática";
	} elseif ($post_type == "galeria") {
		return "Galeria";
	} else {
		return "Outros";
	}

}

function possibly_redirect(){ 
	if (isset( $_GET['action'] )){  
		if ( in_array( $_GET['action'], array('lostpassword', 'retrievepassword') ) ) {
        /*echo "
		<h2 style='text-align:center'>Esqueceu a Senha ?</h2>
        <p style='text-align: center'> Entre em contato com o setor de Tecnologia da informação pelo E-mail: <b>suporte@cmsj.sc.gov.br</b>, informando seu usuário e o problema. 
        </br>
        <a href='intranet.cmsj.sc.gov.br'> Voltar para Página Principal</a>		
        </p>		
        ";*/
        include 'lost-pw.php';
        exit;
        //wp_redirect( '/wp-login.php' ); exit;
    }
}
}


function my_custom_fonts() {
	echo '<style>
    #wp-admin-bar-wp-logo{
		display: none !important;
	}
	#wp-admin-bar-new-post {
		display: none !important;
	}
	#wp-admin-bar-new-thc-events  {
		display: none !important;
	}
} 
</style>';
}

add_filter('v_forcelogin_redirect', 'my_forcelogin_redirect', 10, 1);

add_filter('login_redirect', 'my_forcelogin_redirect', 10, 1);

add_action( 'init', 'post_type_noticias');
add_action( 'init', 'post_type_informatica');
add_action( 'init', 'post_type_adm');
add_action( 'init', 'post_type_rh');
add_action( 'init', 'post_type_galeria');
add_theme_support( 'post-thumbnails', array('noticias', 'informatica', 'administracao', 'rh','galeria'));
add_action('init','possibly_redirect'); 
add_action('admin_head', 'my_custom_fonts');
