<?php 
$ti_query = new WP_Query(array('post_type' => 'informatica', 'posts_per_page' => 4));
$ti_posts = $ti_query->get_posts();

?>					
<div class="row last-info-ti-title">
	<h1 class="col-lg-10" style=""><a style="color:#505050" href="informatica">Informática
		<i class="fa fa-code" style="color:#3C59B7; position:absolute;bottom: 0px; margin-left: 5px;"></i>
	</a>
	</h1>
	<!-- <a  class="col-lg-2 text-right" href="informatica" style="margin-top: 20px">Informática <i class="fa fa-angle-right"></i></a>-->

</div>

<section class="home-last-info-ti row thumbnail">
	<?php foreach ($ti_posts as $post):?>
		<?php 
		$post_thumbnail_url = 'https://www.penso.com.br/wp-content/uploads/2017/03/5-ferramentas-de-seguran%C3%A7a-que-todo-suporte-em-TI-precisa-dominar.jpg';

		if (get_the_post_thumbnail_url($post->ID)): 
			$post_thumbnail_url = get_the_post_thumbnail_url($post->ID,'full'); 
		endif; 

		?>
		<div class="col-lg-6 col-md-12" style="">
			<a href="<?= get_post_permalink($post->ID); ?>">
			<div class="thumbnail col-lg-12" style="border:0">
				<img src="<?= $post_thumbnail_url ?>" class="col-lg-4">
				<a class="last-info-link-ti" href="<?= get_post_permalink($post->ID); ?>">
					<h1 class="col-lg-8"><?= $post->post_title ?></h1>
					<p class="col-lg-8"><?= $post->post_excerpt ?></p>
				</a>
			</div>
			</a>
		</div>	

	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
	<?php  unset($post);?>
	<?php  unset($post_thumbnail_url);?>
	<?php  unset($post_tag);?>
</section>