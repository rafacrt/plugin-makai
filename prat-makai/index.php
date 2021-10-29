<?php
/**
 * Plugin Name:       Prateleira Makai
 * Plugin URI:        https://mktnow.com.br
 * Description:       Insere produtos Makai abaixo dos posts
 * Version:           3.0
 * Author:            Rafael Medeiros
 * License:           GPL v2 or later
**/

add_action('wp_enqueue_scripts', 'callback_for_setting_up_scripts');
function callback_for_setting_up_scripts() {
    wp_register_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css' );
    wp_enqueue_style( 'carousel' );
    wp_register_style( 'owltheme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'owltheme' );
    wp_register_style( 'cssplugin', 'https://makainutri.com.br/blog/wp-content/plugins/prat-makai/style.css' );
    wp_enqueue_style( 'cssplugin' );
    wp_enqueue_script( 'jquery36', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'jsdoplugin', 'https://makainutri.com.br/blog/wp-content/plugins/prat-makai/script.js');
    wp_enqueue_script( 'owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
}

function prod_makai(){ ?>


<!-- <iframe src="https://makainutri.com.br/blog/wp-content/plugins/prat-makai/html/index.html" style="width: 100%;" height="800" frameBorder="0" scrolling="no">Browser not compatible. </iframe > -->



    <div class="prat-makai" align="center">
    <h3>Compre Agora</h3>
<div id="productView" class="product-grid">

<div class="owl-carouseld owl-carousel owl-theme">

<div class="item">
    <div class="product span3">
        <a href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui" target="_blank"></a>
        <div class="product-image">
            <img style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/5/5153255-embalagem-vitamina-d3.png" />
        </div>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui">Vitamina D3 Ativa</a>
        </h5>
        <!--<p class="product-info">
            Melhor matéria-prima do mundo. Qualidade BASF.
        </p>-->        
        <p class="product-price">
            R$ 79,90
        </p>
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui"><div class="comp" type="button">COMPRAR</div></a>
    </div>
</div>

<div class="item">
    <div class="product span3">
        <a href="https://makainutri.com.br/p/multi-v-polivitaminico" target="_blank">
            <img class="product-image" style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/2/2165437-polivitaminico-a-a-z.png" />
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/multi-v-polivitaminico">Multi-V Polivitamínico</a>
        </h5>
        <!--<p class="product-info">
            Fantástico! 21 nutrientes com vitaminas ativas para alta absorção.
        </p>-->        
        <p class="product-price">
            R$ 69,90
        </p>
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/multi-v-polivitaminico"><div class="comp" type="button">COMPRAR</div></a>
    </div>
</div>

<div class="item">
    <div class="product span3">
        <a href="https://makainutri.com.br/p/omega-3-tg-premium" target="_blank">
            <img class="product-image" style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/4/4144604-embalagem-omega-3.png" />
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/omega-3-tg-premium">Omega-3 TG Premium</a>
        </h5>
        <!--<p class="product-info">
            4x mais puro. A melhor matéria-prima do mundo. Qualidade BASF.
        </p>-->        
        <p class="product-price">
            R$ 99,90
        </p>
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/omega-3-tg-premium"><div class="comp" type="button">COMPRAR</div></a>
    </div>
</div>

<div class="item">
    <div class="product span3">
        <a href="https://makainutri.com.br/p/carti-flex-b2-cool" target="_blank">
            <img class="product-image" style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/1/1165756-cartri-flex-capsula-de-colageno.png" />
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/carti-flex-b2-cool">Cartri Flex Colágeno Tipo2</a>
        </h5>
        <!--<p class="product-info">
            Matéria-prima B2COOL® da espanhola Bioibérica
        </p>-->  
        <p class="product-price">
            R$ 79,90
        </p>
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/carti-flex-b2-cool"><div class="comp" type="button">COMPRAR</div></a>
    </div>
</div>

</div>
</div>
</div>


<div class="prat-makai-m" align="center">
    <h3>Compre Agora</h3>

<div id="productView" class="product-grid">

<div class="owl-carousel owl-theme">
<div class="item">
    <div class="product span3-m">
        <a href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui" target="_blank">
        <div class="product-image">
            <img style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/5/5153255-embalagem-vitamina-d3.png" />
        </div>
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui">Vitamina D3 Ativa</a>
        </h5>
        <!--<p class="product-info">
            Melhor matéria-prima do mundo. Qualidade BASF.
        </p>-->        
        <p class="product-price">
            R$ 79,90
        </p>
        <a href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui" target="_blank">
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/vitamina-d3-makai-2000ui"><div class="comp-m" type="button">COMPRAR</div></a>
        </a>
    </div>
</div>

<div class="item">
    <div class="product span3-m">
        <a href="https://makainutri.com.br/p/multi-v-polivitaminico" target="_blank">
            <img class="product-image" style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/2/2165437-polivitaminico-a-a-z.png" />
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/multi-v-polivitaminico">Multi-V Polivitamínico</a>
        </h5>
        <!--<p class="product-info">
            Fantástico! 21 nutrientes com vitaminas ativas para alta absorção.
        </p>-->        
        <p class="product-price">
            R$ 69,90
        </p>
        <a href="https://makainutri.com.br/p/multi-v-polivitaminico" target="_blank">
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/multi-v-polivitaminico"><div class="comp-m" type="button">COMPRAR</div></a>
        </a>
    </div>
</div>



<div class="item">
    <div class="product span3-m">
        <a href="https://makainutri.com.br/p/omega-3-tg-premium" target="_blank">
            <img class="product-image" style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/4/4144604-embalagem-omega-3.png" />
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/omega-3-tg-premium">Omega-3 TG Premium</a>
        </h5>
        <!--<p class="product-info">
            4x mais puro. A melhor matéria-prima do mundo. Qualidade BASF.
        </p>-->        
        <p class="product-price">
            R$ 99,90
        </p>
        <a href="https://makainutri.com.br/p/omega-3-tg-premium" target="_blank">
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/omega-3-tg-premium"><div class="comp-m" type="button">COMPRAR</div></a>
        </a>
    </div>
</div>

<div class="item">
    <div class="product span3-m">
        <a href="https://makainutri.com.br/p/carti-flex-b2-cool" target="_blank">
            <img class="product-image" style="width: 93%;" src="https://makainutri.com.br/app/media/images_product/medium/1/1165756-cartri-flex-capsula-de-colageno.png" />
        </a>
        <h5 class="product-name">
            <a href="https://makainutri.com.br/p/carti-flex-b2-cool">Cartri Flex Colágeno Tipo2</a>
        </h5>
        <!--<p class="product-info">
            Matéria-prima B2COOL® da espanhola Bioibérica
        </p>-->  
        <p class="product-price">
            R$ 79,90
        </p>
        <a href="https://makainutri.com.br/p/carti-flex-b2-cool" target="_blank">
        <a style="text-decoration: none;" href="https://makainutri.com.br/p/carti-flex-b2-cool"><div class="comp-m" type="button">COMPRAR</div></a>
        </a>
    </div>
</div>

</div>
</div>
</div>

<?php
}
add_shortcode('makaiprodutos','prod_makai');