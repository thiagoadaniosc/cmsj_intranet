<aside class="col-lg-3 bg-white">
    
    <section class="home-asider-comunicados">
        <header class="home-aside-comunicados-header text-center">Comunicados</header>
        
        <?php
        $comunicados_query = new WP_Query(array('post_type' => 'comunicados', 'posts_per_page' => 3));
        $comunicados_post = $comunicados_query->get_posts();
        ?>
        <div class="mt-2">
            <?php foreach ($comunicados_post as $post): ?>
            <article class="list-group mb-2">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between pl-0">
                        <h5 class="mb-1 ml-0 pl-0"><?= $post->post_title ?></h5>      
                        <small class="bg-dark text-white p-1"> <i class="fa fa-clock-o"></i> <?= get_the_date()?></small>                  
                    </div>
                    <p class="mb-1"><?= $post->post_excerpt?></p>
                </a>
                
            </article>
            <?php endforeach;?>
            
        </div>
        
    </section>
    
    <section class="home-asider-comunicados">
        <header class="home-aside-comunicados-header text-center">Últimas Clipagens</header>
        
        <div class="mt-2">
            <?php for ($i=1; $i <= 3; $i++) : ?>
            <article class="list-group mb-2">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">                        
                    <div class="d-flex w-100 justify-content-between pl-0 col-lg-8">
                        <h5 class="mb-1 ml-0 pl-0">Titulo da Clipagem</h5>                               
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                
            </article>
            <?php endfor;?>
            
        </div>
    </section>
    
</aside>