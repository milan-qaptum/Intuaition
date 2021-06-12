<?php
/**
 * The front page for our theme
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
        <section class="hero-02-area pos-rel blue-bg-light pb-150 pt-100">

            <div class="lax lax_preset_spin rotating-sqare d-none d-md-block">
                <img src="<?php echo get_theme_file_uri('/images/illustrations/rotating-square.png'); ?>" alt="" class="img-fluid" />
            </div>
            <div class="slider-img">
                <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/hero-illustration.png'); ?>" alt="" />
            </div>
            <div class="hero-slider">
                <div class="slider-actives">
                    <div class="single-slider slider-height slider-height-02 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-9 negative-margin_mob">
                                    <div class="hero-content  mt-30">
                                        <div class="hero-slider-caption">
                                            <h2>Intelligent Social Analytics</h2>
                                            <h3><span>Try the most comprehensive digital listening, analysis, and data visualization Solution.</span>
                                            <span>Its powerful NLP/AI engines provide the means for advanced semantic analysis and audience profiling in Spanish and
                                                English, resulting in accurate sentiment tracking and profound business insight.</span>
                                            </h3>
                                            <!-- <a class="c-btn btn-round-02" href="about.html">Get started <i
                                                    class="fa fa-long-arrow-right"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel pb-150 pt-70">
            <div class="container">
                <div class="row">
                    <div class="pos-rel col-xl-6 col-lg-6 pt-80">
						<div class="abs-pos pos-abs-reset fromleft">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img1.png'); ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="hero-content  mt-30">
                            <div class="appear hero-slider-caption">
                                <h1 class="text-black pb-20 fw-bold">Listen to understand the conversation around your</h1>
                                <div class="pointers">
                                    <ul>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Products – Services – Companies</li>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Customers – Markets – Industries</li>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Competitors – Influencers – Adversaries</li>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Campaigns – Events – Marketing</li>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Sentiment – Reputation – Brand</li>
                                    </ul>
                                </div>
                                <div class="pt-40"><a href=https://app.qaptum.com/signup><button class="landing_btn">Create Your Free Account <span class="landing_btn-icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel bg-quotes overflow-hidden  pb-140 pt-150">
            <div class="quotes_dots">
                <img src="<?php echo get_theme_file_uri('/images/bg-images/dots.png'); ?>" alt="" class="img-fluid">
            </div>
            <div class="quotes_waves  lax lax_preset_slideX:elCenterY-100:400">
                <img src="<?php echo get_theme_file_uri('/images/bg-images/waves.png'); ?>" alt="" class="img-fluid">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-9 pos-rel">
                        <div class="lax lax_preset_scaleInOut:100:0.8 quotes">
                            “When people talk, listen completely. Most people never listen.”
                            <div class="quotes_author pt-40 text-end fst-normal">-Ernest Hemingway</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel  pb-60 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="hero-content  mt-30">
                            <div class="hero-slider-caption">
                                <h1 class="text-black pb-20 fw-bold">Qaptum ensures you capture the signal from the noise.</h1>
                                <h4>Track the Trends and discover new opportunities</h4>
                                <div class="pointers no-shadows pt-30">
                                    <ul>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Follow your Consumer, Social, Demographic, Economic, Political & Global trends</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Obtain real-time qualitative and quantitative guidance</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Seize the opportunities, project, and plan ahead</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Benchmark your initiative and refine your strategy</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Grow your business</li>
                                    </ul>
                                </div>
                                <div class="pt-40"><a href=https://app.qaptum.com/signup><button class="landing_btn">Create Your Free Account <span class="landing_btn-icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 pt-80 order-first order-lg-2">

                        <div class="base-chart-bg">
                            <div class="invisible text"></div>
                            <div class="invisible text"></div>
                            <div class="base-chart_feature-1 text">
                                <img src="<?php echo get_theme_file_uri('/images/illustrations/float_1.png'); ?>" alt="">
                            </div>
                            <div class="base-chart_feature-2 text">
                                <img src="<?php echo get_theme_file_uri('/images/illustrations/float_2.png'); ?>" alt="">
                            </div>
                            <div class="base-chart_feature-3 text">
                                <img src="<?php echo get_theme_file_uri('/images/illustrations/float_3.png'); ?>" alt="">
                            </div>
                            <div class="base-chart_feature-4 text">
                                <img src="<?php echo get_theme_file_uri('/images/illustrations/float_4.png'); ?>" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel pb-150 pt-50">
            <div class="container">
                <div class="row">
                    <div class="fromleftflip col-xl-6 col-lg-6 pt-80">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img3.png'); ?>" alt="" />
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="hero-content  mt-30">
                            <div class="hero-slider-caption">
                                <h1 class="text-black pb-20 fw-bold">Qaptum uses its large Data Sources and AI technology to compare data sets over various periods to detect patterns and predict trends.</h1>
                                <h4>Embrace Customer Service</h4>
                                <div class="pointers no-shadows pt-30">
                                    <ul>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Act thoughtfully and proactively to negative social media regarding your company and products</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Listen to customer feedback to improve your service’s levels and differentiate from your competition</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Implement triggers to alert you of critical customer situations</li>
                                        <li><span><i class="fa fa-check" aria-hidden="true"></i></span> Measure and improve Customer Loyalty</li>
                                        <!-- <li><span><i class="fa fa-check" aria-hidden="true"></i></span> </li> -->
                                    </ul>
                                </div>
                                <div class="pt-40"><a href=https://app.qaptum.com/signup><button class="landing_btn">Create Your Free Account <span class="landing_btn-icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel bg-quotes overflow-hidden  pb-140 pt-150">
            <div class="quotes_dots">
                <img src="<?php echo get_theme_file_uri('/images/bg-images/dots.png'); ?>" alt="" class="img-fluid">
            </div>
            <div class="quotes_waves wave_2">
                <img src="<?php echo get_theme_file_uri('/images/bg-images/waves_2.png'); ?>" alt="" class="img-fluid">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 pos-rel">
                        <div class="quotes">
                            “Smart companies have realized that Customer Loyalty is the Most Powerful sales and marketing tool that they have.”
                            <div class="quotes_author pt-40 text-center fst-normal">Bill Price – Driva Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel  pb-150 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="hero-content  mt-30">
                            <div class="hero-slider-caption">
                                <h1 class="text-black pb-20 fw-bold">Obtain Actionable Insight</h1>
                                <p class="paragraph">Through Data Analytics, Big Data, and AI, Qaptum provides continuous data intelligence and analytics for assertive decision making</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 order-first order-lg-2">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img4.png'); ?>" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main Section End-->

  <?php get_footer();
?>
