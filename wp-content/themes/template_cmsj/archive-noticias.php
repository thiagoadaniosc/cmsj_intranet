<?php get_header(); 


?>
<main class="conteudo col-lg-12" style="">

		<h1 class="single-noticias-title text-center">Notícias</h1> 

	<section class="single-noticias home-last-news col-lg-12" >
		<?php while (have_posts()):
		the_post();
		$post_id = get_the_ID();

		$post_thumbnail_url = /*get_template_directory_uri() . */'https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg';
		if (get_the_post_thumbnail_url($post_id )): 
			$post_thumbnail_url = get_the_post_thumbnail_url($post_id ,'full'); 
		endif; 
		?>
		<div class="col-lg-3" style="padding: 2px">
			<div class="thumbnail col-lg-12" style="border-radius: 0;">
				<a class="home-last-news-link" href="<?= get_post_permalink(); ?>">
					<figure class="col-lg-12"">
						<span class="home-last-news-tag">

							<?= get_the_terms($post_id, 'post_tag')[0]->name; ?>
						</span>

						<span class="single-noticias-date">
							<i class="fa fa-calendar"></i>
							<?php echo get_the_date( 'd/m/Y' ); ?>
						</span>
			
						<img src="<?= $post_thumbnail_url; ?>" class="img-responsive">

						<h2 class="text-center news-title col-lg-12" style=""><?php the_title(); ?></h2>
					</figure>
				</a>
			</div>
		</div>	
	<?php endwhile;  ?>
	<section class="pagination col-lg-12 text-center">
		<?php wordpress_pagination(); ?>
	</section>
</section>

</main> 

<?php get_footer(); ?>