<?php get_header(); 


?>
<main class="conteudo col-lg-12" >
	<h1 class="text-center single-galeria-title">Galeria de Imagens</h1>
	<section class="single-galeria col-lg-12" style="padding-top:20px;">
		<!-- <h1 class="text-center" style="border-bottom: 1px solid #C1C1C1; ">Galeria de Imagens</h1> -->

		<?php while(have_posts()): 
		the_post();
		$post_thumbnail_url = get_the_post_thumbnail_url(get_the_ID() ,'medium_large');
		?>
		<div class="col-lg-3">
			<div class="thumbnail col-lg-12" style="border-radius:0px">
				<figure>
					<a href="<?= get_post_permalink(); ?>">
						<img src="<?= $post_thumbnail_url ?>" class="img-responsive">
						<span class="single-galeria-date">	<i class="fa fa-calendar"></i> <?php echo get_the_date( 'd/m/Y' ); ?></span>
						<figcaption class="text-center">
							<?php the_title(); ?>
							<br>
							<i class="fa fa-picture-o fa-4x" aria-hidden="true"></i>
						</figcaption>
					</a>
				</figure>
			</div>
		</div>

	<?php endwhile; ?>

	<section class="pagination col-lg-12 text-center">
		<?php wordpress_pagination(); ?>
	</section>

</section>

</main> 

<?php get_footer(); ?>