<?php get_header(); ?>
<main class="conteudo col-lg-12">
	<h1 class="single-informatica-title-header text-center">Informática</h1> 
	<section class="single-informatica col-lg-12">

		<?php while (have_posts()): 
		the_post();
		$post_id = get_the_ID();
		?>

		<?php 
		$post_thumbnail_url = get_template_directory_uri() . '/imgs/back.jpg';
		if (get_the_post_thumbnail_url($post_id )): 
			$post_thumbnail_url = get_the_post_thumbnail_url($post_id ,'full'); 
		endif; 

		?>

		<div class="col-lg-12" style="padding: 2px; margin-bottom: 20px; border:1px solid #D6D6D6">
			<div class="thumbnail col-lg-12" style="border:0; margin:0; padding-left: 0; padding-right:0 ;">
				<a class="home-last-news-link" href="<?= get_post_permalink(); ?>">
					<figure class="col-lg-2">
						<img src="<?= $post_thumbnail_url?>" class="img-responsive">
					</figure>
					<span class="single-informatica-date">
						<i class="fa fa-calendar"></i>
						<?php echo get_the_date( 'd/m/Y' ); ?>
					</span>

					<h2 class="single-informatica-title col-lg-10" style="">
						<?php the_title(); ?>
					</h2>
					<div class=" single-informatica-resumo col-lg-10"><?php the_excerpt(); ?></div>
					<a href="<?= get_post_permalink(); ?>" class="btn btn-default single-informatica-btn">Ver Mais</a>

					
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