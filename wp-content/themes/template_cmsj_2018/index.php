<?php get_header(); ?>
<main class="conteudo col-lg-12">
	<section class="post-panel col-lg-12 justify-content-center row">
		<header class="post-bg"> 
			<div class="post-title col-lg-12">
				
				<?php the_post(); ?>
				
				<p><i class="fa fa-calendar"></i> <?php echo get_the_date( 'd/m/Y' ); ?></p>
				<h1><?php the_title(); ?></h1>
				<h3 style="font-size: 20px;text-align: center;letter-spacing: -.80px;"><?php the_excerpt(); ?></h3>
			</div>
		</header>
		<div class="post-main row justify-content-center m-0 col-lg-8 bg-white rounded">		
		
		<div class="post-content col-lg-8 mt-4 ">
			<div class="border  border-light pl-2">
			<!-- <?php the_post_thumbnail('large'); ?>-->
			<?php the_content(); ?>
			<!-- <p class="content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br>
				<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		-->
		</div>
	</div>

	<div class="mt-2 col-lg-4 border border-light p-2 mt-4">
		<header class="col-lg-12 bg-dark">
			<h4 class="text-center text-white">Ultimas Notícias</h4>
		</header>
		<?php
		$noticias_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5));
		$noticias_post = $noticias_query->get_posts();
		
		?>
		<?php  foreach ($noticias_post as $post): ?>
			<article class="list-group mb-2 m-auto mr-0 p-0 home-news-article col-lg-12">
				
				<a href="<?= get_permalink() ?>" class="list-group-item-hover list-group-item list-group-item-action flex-column align-items-start">
					
					<img class="home-news-article-img img-fluid col-lg-4 float-left m-0 pl-0" src="<?= TEMPLATE_URI ?>/imgs/suporte_background.jpg" alt="">
					<div class="d-flex w-100 justify-content-between pl-0 col-lg-8">
						<h5 class="mb-1 ml-0 pl-0"><?= the_title()?></h5>
						
					</div>
					<p class="mb-1"><?= the_excerpt()?></p>
				</a>
				
			

			</article>

			<?php endforeach; ?>
			
		</div>

	
	</div>


	
	</section>


</main> 

<?php get_footer(); ?>