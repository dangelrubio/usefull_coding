<?php

function capp_talent_counter_es(){
    return`
        <div class="capp-wrapper">
        <div class="capp-content">
            <div class="capp-content__capp-box">
                <img src="assets/img/Iconos_CETIM_Empresas.svg" alt="empresas">
                <span class="num" data-value="125">000</span>
                <span class="text">Empresas</span>
            </div>
            <div class="capp-content__capp-box">
                <img src="assets/img/Iconos_CETIM_Organismos.svg" alt="Organismos">
                <span class="num" data-value="25">000</span>
                <span class="text">Organismos de investigación nacionales e internacionales</span>
            </div>
            <div class="capp-content__capp-box">
                <img src="assets/img/Iconos_CETIM_Proyectos.svg" alt="Proyectos">
                <span>+<span class="num" data-value="+90%">000</span>%</span>
                <span class="text">proyectos de economía circular y sostenibilidad</span>
            </div>
            <div class="capp-content__capp-box">
                <img src="assets/img/Iconos_CETIM_Millones.svg" alt="Millones">
                <span>+<span class="num" data-value="80">000</span></span>
                <span class="text">millones de euros movilizados en I+D+i</span>
            </div>
            <div class="capp-content__capp-box">
                <img src="assets/img/Iconos_CETIM_Empleos.svg" alt="empresas">
                <span class="num" data-value="300">000</span>
                <span class="text">empleos verdes cualificados</span>
            </div>
            <div class="capp-content__capp-box capp-extra">
            </div>
        </div>
    </div>`;

}
add_shortcode( 'talent_counter_es', 'capp_talent_counter_es' );

function capp_enqueue_scripts(){
    wp_enqueue_style( 'capp-css', get_template_directory_uri() . 'counterapp/assets/css/style.css' );
    wp_enqueue_script( 'capp-js', get_template_directory_uri() . '/counterapp/assets/js/script.js', null, null, true );
}

add_action( 'wp_enqueue_scripts' , 'capp_enqueue_scripts' );