<?php 

$noticias_query = new WP_Query(array('post_type' => 'noticias', 'posts_per_page' => 3));
$noticias_posts = $noticias_query->get_posts();
$i = 0;

?>
<div class="row last-news-title">
	<h1 class="col-lg-10" style="border-left: 2px solid #3267AA; background-color:#3267AA; line-height: 40px; color: white; border-bottom:4px solid #265B9D">
		Últimas Notícias 
		<i class="fa fa-plus" style="color:white; font-size: 20px; position:absolute;bottom: 8px; margin-left: 8px;"></i>
	</h1>
	<a  class="col-lg-2 text-right" href="noticias" style="margin-top: 20px; color:white; line-height: 40px;background-color:#3267AA; border-bottom:4px solid #265B9D ">
	Mais Notícias</a>
	
</div>
<!-- LAST NEWS - ULTIMAS NOTICIAS - Principal -->


<section class="home-last-news row thumbnail">
	<?php foreach ($noticias_posts as $post): ?>
		<?php 
		$post_thumbnail_url = 'https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg';
		$post_tag = 'Noticia';
		if (get_the_post_thumbnail_url($post->ID)): 
			$post_thumbnail_url = get_the_post_thumbnail_url($post->ID,'full'); 
		endif; 

		if (get_the_terms($post->ID, 'post_tag')):
			$post_tag = get_the_terms($post->ID, 'post_tag')[0]->name;
		endif;

		?>

		<?php if ($i == 0) : ?>
			<div class="col-lg-12" style="padding: 2px">
				<div class="thumbnail col-lg-12" style="border:0; height: auto; padding: 0; margin-bottom:0;">
					<a class="home-last-news-link" href="<?= get_post_permalink($post->ID); ?>">
						<figure class="col-lg-12" style="height: 500px; width:100%">

							<span class="home-last-news-tag">
								<?= $post_tag ?>
							</span>

							<span class="single-noticias-date">
								<i class="fa fa-calendar"></i>
								<?php echo get_the_date( 'd/m/Y' ); ?>
							</span>

							<img src="<?= $post_thumbnail_url;  ?>" class="img-responsive" style="height:600px; max-height: 600px;  width:100%">

							<h2 class="text-center news-title col-lg-12" style="font-size: 30px !important; padding-top: 10px; padding-bottom: 10px; letter-spacing: -2px!important; font-weight: bold;text-shadow: 0 1px 3px rgba(0,0,0,0.8);font-family: opensans,opensans-bastian,Arial,sans-serif;
							-webkit-font-smoothing: antialiased;">

							<?php echo $post->post_title; ?>
						</h2>
					</figure>
				</a>

			</div>
		</div>	
		<?php $i = 1; ?>
	<?php else : ?>
		<!-- Outras Noticias - Secundarias -->

		<div class="col-lg-6" style="padding: 2px">
			<div class="thumbnail col-lg-12" style="border:0; margin:0; padding-left: 0; padding-right:0 ;">
				<a class="home-last-news-link" href="<?= get_post_permalink($post->ID); ?>">
					<figure class="col-lg-12">

						<span class="home-last-news-tag">
							<?= $post_tag ?>
						</span>
						<span class="single-noticias-date">
							<i class="fa fa-calendar"></i>
							<?php echo get_the_date( 'd/m/Y' ); ?>
						</span>

						<img src="<?=$post_thumbnail_url; ?>">

						<h2 class="text-center news-title col-lg-12" style=""><?php echo $post->post_title; ?>
						</h2>
					</figure>
				</a>

			</div>
		</div>	

	<?php endif; ?>

	<!-- End -->

<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php  unset($post);?>
<?php  unset($post_thumbnail_url);?>
<?php  unset($post_tag);?>
</section>