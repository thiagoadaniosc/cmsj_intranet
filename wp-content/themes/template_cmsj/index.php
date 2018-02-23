<?php get_header(); ?>
<main class="conteudo col-lg-12">
	<section class="post-panel col-lg-12">
		<div class="post-title col-lg-12">

			<?php the_post(); ?>

			<p><i class="fa fa-calendar"></i> <?php echo get_the_date( 'd/m/Y' ); ?></p>
			<h1><?php the_title(); ?></h1>
			<h3 style="font-size: 20px;text-align: center;letter-spacing: -.80px;"><?php the_excerpt(); ?></h3>
		</div>

		<div class="post-content col-lg-12">
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

</section>

</main> 

<?php get_footer(); ?>