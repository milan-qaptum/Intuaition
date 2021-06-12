<?php
/**
 * The Why us page for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intuation
 */

?>

<?php get_header(); ?>
	    <!--Main Section-->
    <main>
        
        <section class="hero-02-area pos-rel  pb-50 pt-150">
            <div class="container">
                <h1 class="text-center fw-bold">¿Por qué Qaptum?</h1>
                
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="hero-content  mt-30">
                            <div class="hero-slider-caption">
                                <!-- <h1 class="text-black pb-20 fw-bold">Customer Sentiment</h1> -->
                                <div class="pointers no-shadows use-cases pt-30">
                                   <p class="fw-bold text-justify">
                                    Uno de los mayores retos para las herramientas de escucha y análisis de contenidos para
									las Redes Sociales, es la interpretación del Sentimiento de la conversación. La mayor
									parte de las herramientas que existen hoy para llevar a cabo esto, están diseñadas para
									interpretar el sentimiento bajo reglas gramaticales y semánticas asociadas con el idioma
									inglés. El español y otros idiomas romance, emplean un sinnúmero de elementos
									contextuales, en muchos casos específicos de cada país e incluso región, que hacen
									sumamente difícil la interpretación del significante de una expresión por encima de su
									significado literal. Aunque exista la posibilidad de traducir de forma automatizada un
									mensaje o contenido, elementos como el sarcasmo, la ambivalencia, el doble significado o
									la picardía implícita, no son fácilmente clasificados por una herramienta cuya estructura
									de operación fue diseñada para analizar contenidos en inglés.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 pt-80 order-first order-lg-2">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/Qaptum_logo.png'); ?>" alt="" />
                    </div>
                    <div class="col-12 order-3">
                        <p class="fw-bold">
                            Qaptum rompe con esta barrera, empleando motores de inteligencia artificial y
							procesamiento de lenguaje natural (NLP), asociados con librerías regionalizadas para el
							idioma español. Esto hace a Qaptum una herramienta ideal para analizar contenidos
							bilingües (español e inglés) con un alto nivel de precisión y más de 150 indicadores (KPIs)
							de análisis para monitorizar de forma eficiente y confiable.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main Section End--> 	

  <?php get_footer();
?>