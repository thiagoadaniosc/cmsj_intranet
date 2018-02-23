<?php get_header(); ?>
<main class="row col-lg-12 m-0 mt-4 pl-lg-5 pr-lg-5 p-sm-0 p-md-0  bg-white justify-content-center">
    <aside class="col-lg-3 bg-white">
        <section class="home-asidel-clima bg-pr">
            <header class="home-asidel-header text-center mb-2">Clima</header>
            <div id="cont_c18e22ef4165f651fd9fd1d3546b9a03"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/c18e22ef4165f651fd9fd1d3546b9a03"></script></div>
        </section>
    </aside>
    
    <div class="col-lg-6 bg-white mb-5 pb-5">
        <section class="home-news">
            <header class="home-news-header text-white p-1 border-top">
                <h3><i class="home-news-header-title fa fa-newspaper-o"></i> Notícias </h3>
            </header>
            
            <div class="mt-2">
                <?php for ($i=1; $i <= 3; $i++) : ?>
                <article class="list-group mb-2 home-news-article">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        
                        <img class="home-news-article-img img-fluid col-lg-4 float-left m-0 pl-0" src="<?= TEMPLATE_URI ?>/imgs/suporte_background.jpg" alt="">
                        <div class="d-flex w-100 justify-content-between pl-0 col-lg-8">
                            <h5 class="mb-1 ml-0 pl-0">Titulo da Noticia</h5>
                            <small> <i class="fa fa-clock-o"></i> 3 dias atrás</small>
                            
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    </a>
                    
                </article>
                <?php endfor;?>
                
            </div>
            
        </section>
        
        <section class="col-lg-12 row p-0 m-0 pt-4 home-ferramentas">
            <header class="home-ferramentas-header col-lg-12 mb-3">
                <h4 class="col-lg-12 mt-2 text-center">FERRAMENTAS</h4>
            </header>
            
            <article class="col-lg-4 mb-2 home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 justify-content-center rounded-0 p-3 bg-primary">
                        <i class="fa fa-question-circle m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white">Suporte</h4>
                        
                        <small class="text-center text-white">(Sistema de Suporte)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 justify-content-center rounded-0 p-3 bg-danger">
                        <i class="fa fa-bullhorn m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white ">Comunicados</h4>
                        <small class="text-center text-white">(Comunicados Internos)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 home-ferramentas-article">
                <a class="text" href="<?= FOLHAWEB_URI ?>" target="_blank">
                    <div class="card col-lg-12 justify-content-center rounded-0 p-3 bg-white">                    
                        <img class="m-auto" width="80" src="<?= TEMPLATE_URI ?>/imgs/folha-web.png" alt="">
                        <h4 class="text-center" style="color:#24609F">Folha Web</h4>
                        <small class="text-center" style="color:#24609F">(Folha de Pagamento Digital)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 justify-content-center home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 rounded-0 p-3" style="background-color: #3648ab">
                        <i class="fa fa-phone m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white">Ramais</h4>
                        <small class="text-center text-white">(Ramais - Setores e Gabinetes)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 justify-content-center home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 rounded-0 p-3" style="background-color:#563d7c">
                        <i class="fa fa-calendar m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white">Calendário</h4>
                        <small class="text-center text-white">(Feriados e pontos facultativos)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 justify-content-center home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 rounded-0 p-3" style="background-color:#d62a67	">
                        <i class="fa fa-birthday-cake m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white">Aniversariantes</h4>
                        <small class="text-center text-white">(Aniversariantes do dia)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 justify-content-center home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 rounded-0 justify-content-center p-3">
                        <img class="m-auto" src="<?= TEMPLATE_URI ?>/imgs/dom-logo.png" width="102" alt="">
                        <h4 class="text-center text-danger">DOM</h4>
                        <small class="text-center text-danger">(Diário Official dos Municípios)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 justify-content-center home-ferramentas-article">
                <a class="text" href="<?= CLIPAGEMDIGITAL_URI ?>" target="_blank">
                    <div class="card col-lg-12 rounded-0 justify-content-center p-3" style="background-color: #6666FF">
                        <i class="fa fa-paperclip m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white">Clipagem Digital</h4>
                        <small class="text-center text-white">(Configurações do Usuário)</small>
                    </div>
                </a>
            </article>
            
            <article class="col-lg-4 mb-2 justify-content-center home-ferramentas-article">
                <a class="text" href="" target="_blank">
                    <div class="card col-lg-12 rounded-0 justify-content-center p-3" style="background-color: #0d1235">
                        <i class="fa fa-cogs m-auto text-white" style="font-size:80px"></i>
                        <h4 class="text-center text-white">Configurações</h4>
                        <small class="text-center text-white">(Configurações do Usuário)</small>
                    </div>
                </a>
            </article>
            
            
            
        </section>
        
    </div>
    
    <aside class="col-lg-3 bg-white">
        
        <section class="home-asider-comunicados">
            <header class="home-aside-comunicados-header text-center">Comunicados</header>
            
            
            <div class="mt-2">
                <?php for ($i=1; $i <= 3; $i++) : ?>
                <article class="list-group mb-2">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        
                        <img class="img-fluid col-lg-4 float-left m-0 pl-0" src="<?= TEMPLATE_URI ?>/imgs/suporte_background.jpg" alt="">
                        <div class="d-flex w-100 justify-content-between pl-0 col-lg-8">
                            <h5 class="mb-1 ml-0 pl-0">Titulo da Noticia</h5>                        
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    </a>
                    
                </article>
                <?php endfor;?>
                
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
</main>
<?php get_footer(); ?>