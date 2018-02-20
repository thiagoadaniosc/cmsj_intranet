<?php get_header(); ?>

<?php 
$search_value = $_GET['s'];
$search_query = new WP_Query(array('post_type' => array('noticias', 'rh', 'informatica', 'administracao',  'galeria', 'page'),'s' => $search_value));
$search_post = $search_query->get_posts();

?>

<main class="conteudo col-lg-12">
	<section class="post-panel col-lg-12">
		<div class="post-title col-lg-12">
			<h1>Pesquisa</h1>
		</div>
		<div class="post-content col-lg-12">
			<?php get_search_form(); ?>
			<?php if (!empty($search_value) && !empty($search_post)): ?>
				<?php foreach ($search_post as $post): ?>

					<div class="col-lg-12">
						<div class="col-lg-12 thumbnail" style="border-radius: 0; border:0;">

							<a href="<?=get_post_permalink($post->ID);?>" style="text-decoration: none;"><h1 class="search-title"><?= $post->post_title; ?></h1></a>
							<span><i class="fa fa-calendar" style="color: #36629B"></i> <?php echo get_the_date( 'd/m/Y' ); ?></span>
							<span style="text-transform: uppercase; background-color: #5D5D5D; color: white;"><?= get_type($post->post_type); ?></span>
							<a href="<?=get_post_permalink($post->ID);?>" style="text-decoration: none;"><h2 class="search-excerpt"><?= $post->post_excerpt;?></h2></a>
						</div>
					</div>
					<hr width="100%">
				<?php endforeach; ?>
			<?php else : 
				echo "Nenhum resultado encontrado para a sua busca \"$search_value\".  ";
				endif;
			?>

		</div>

	</section>

</main> 


<?php get_footer(); ?>