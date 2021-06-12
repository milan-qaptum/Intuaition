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
                <h1 class="text-center fw-bold">Why Qaptum ?</h1>
                
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="hero-content  mt-30">
                            <div class="hero-slider-caption">
                                <!-- <h1 class="text-black pb-20 fw-bold">Customer Sentiment</h1> -->
                                <div class="pointers no-shadows use-cases pt-30">
                                   <p class="fw-bold text-justify">
                                    One of the biggest challenges for listening and content analysis tools for Social Networks is interpreting the Sentiment of the conversation. Many available tools today analyze Sentiment under grammatical and semantic rules associated with the English language. Spanish and other Romance languages ​​use countless contextual elements, in many cases, are specific to a particular country or even a region, which makes the interpretation of an expression above its literal meaning very challenging. Elements such as sarcasm, ambivalence, double meaning, or implicit mischief are not easily classified by a tool whose operational and internal structure was designed to analyze English content.
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
                            Qaptum breaks this barrier, using artificial intelligence engines and
                            natural language processing (NLP), associated with regionalized libraries for the
                            Spanish Language. This makes Qaptum an ideal tool for analyzing content
                            bilingual (Spanish and English) with a high level of precision and more than 150 indicators (KPIs)
                            of analysis to monitor efficiently and reliably.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main Section End--> 	

  <?php get_footer();
?>