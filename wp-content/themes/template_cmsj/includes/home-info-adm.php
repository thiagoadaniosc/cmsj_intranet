<?php 

$adm_query = new WP_Query(array('post_type' => 'administracao', 'posts_per_page' => 4));
$adm_posts = $adm_query->get_posts();

?>

<div class="row last-info-adm-title">
	<h1 class="col-lg-10" style=""><a style="color:#505050" href="administracao">Administração
		<i class="fa fa-users" style="color:#505050;""></i>
		</a>
	</h1>
	<!--<a  class="col-lg-2 text-right" href="administracao" style="margin-top: 20px">Administração <i class="fa fa-angle-right"></i></a> -->

</div>

<section class="home-last-info-adm row thumbnail">
	<?php foreach ($adm_posts as $post): ?>
		<?php 
		$post_thumbnail_url = get_template_directory_uri() . '/imgs/sao-jose-icon.png';
		if (get_the_post_thumbnail_url($post->ID)): 
			$post_thumbnail_url = get_the_post_thumbnail_url($post->ID,'full'); 
		endif; 

		?>
		<div class="col-lg-6 col-md-12" style="">
			<div class="thumbnail col-lg-12" style="border:0">
				<img src="<?= $post_thumbnail_url; ?>" class="col-lg-4">
				<a class="last-info-link-adm" href="<?= get_post_permalink($post->ID); ?>">
					<h1 class="col-lg-8"><?= $post->post_title ?></h1>
					<p class="col-lg-8"><?= $post->post_excerpt ?></p>
				</a>
			</div>
		</div>	

	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
	<?php  unset($post);?>
	<?php  unset($post_thumbnail_url);?>
	<?php  unset($post_tag);?>
</section>