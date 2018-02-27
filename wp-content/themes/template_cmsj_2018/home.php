<?php get_header(); ?>
<main class="row col-lg-12 pl-lg-5 pr-lg-5 p-sm-0 p-md-0  bg-white justify-content-center">
    <aside class="col-lg-3 bg-white home-asidel">
        <section class="home-asidel-menu mb-2">
            <header class="home-asidel-header text-center mb-2"><i class="fa fa-bars"></i> Menu</header>
            <nav class="nav nav-pills flex-column justify-content-center">
                 
               <?php 
               $menu_name = 'menu_aside';
               $locations = get_nav_menu_locations();
               $menu = wp_get_nav_menu_object( $locations[$menu_name] );
               $menuitems = wp_get_nav_menu_items($menu->term_id);
               foreach ($menuitems as $item):
                   ?>

               <li class="nav-item btn btn-dark mb-1 justify-content-center text-left ">
                   <a href="<?= $item->link ?>" class="nav-link text-white"><?= $item->title ?></a>
               </li> 
          

               <?php endforeach; ?>

            </nav>
        </section>
        <section class="home-asidel-clima ">
            <header class="home-asidel-header text-center mb-2"><i class="fa fa-snowflake-o"></i>
 Clima</header>
            <div id="cont_c18e22ef4165f651fd9fd1d3546b9a03"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/c18e22ef4165f651fd9fd1d3546b9a03"></script></div>
        </section>

 
        
    </aside>
    
    <div class="col-lg-6 bg-white mb-5 pb-5 home-content-main">

        <?php require_once('includes/ferramentas.php');?>
        
        <section class="home-news">
            <header class="home-news-header text-white p-1 border-top">
                <h3><a href="/posts" class="text-white"><i class="home-news-header-title fa fa-newspaper-o"></i> Notícias</a> </h3>
            </header>
            
            <div class="mt-2">
                
                <?php 
                $post_limit = 3;
                $i=0;
                while(have_posts() && $i < $post_limit):    
                the_post();
                $i++;

                ?>
                <article class="list-group mb-2 home-news-article">
                    <a href="<?= get_permalink() ?>" class="list-group-item-hover list-group-item list-group-item-action flex-column align-items-start">
                        
                        <img class="home-news-article-img img-fluid col-lg-4 float-left m-0 pl-0" src="<?= TEMPLATE_URI ?>/imgs/suporte_background.jpg" alt="">
                        <div class="d-flex w-100 justify-content-between pl-0 col-lg-8">
                            <h5 class="mb-1 ml-0 pl-0"><?= the_title()?></h5>
                            <small> <i class="fa fa-clock-o"></i> <?= the_date();?></small>
                            
                        </div>
                        <p class="mb-1"><?= the_excerpt()?></p>
                    </a>
                    
                </article>
                <?php endwhile;?>
                
            </div>
            
        </section>
     
        
    </div>
    
    <?php require_once ('includes/componentes.php'); ?>
    
</main>
<?php get_footer(); ?>