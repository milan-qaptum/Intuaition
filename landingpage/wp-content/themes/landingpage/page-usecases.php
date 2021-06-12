<?php
/**
 * The usecases page for our theme
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
                <h1 class="text-center fw-bold">Use Cases</h1>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="fw-bold">Customer Sentiment</h2>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Customer Sentiment</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Know your customer’s opinions</span> and
                                                            how they feel about your brand, products, and services</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Maximize your sales revenue</span>
                                                            through purchase behaviors and preference analyses</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Gain insight into your customer
                                                                Journey</span> and </span> <span
                                                                class="highlight-text">improve</span> all touchpoints</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Quickly identify and attend to <span class="highlight-text" style="color:#4a72fd;text-transform:lowercase;">a </span
                                                                <span class="highlight-text">potential PR crisis</span></li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Measure</span> the <span
                                                                class="highlight-text">efficacy</span> of your <span
                                                                class="highlight-text">marketing Campaigns</span> and develop
                                                            <span class="highlight-text">successful marketing strategies</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> Improve
                                                            <span class="highlight-text">Product quality and development</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Learn about your competition</span>
                                                            through your customer’s conversations</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 order-first order-lg-2 mx-md-auto pt-80">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img5.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="fw-bold">Competitive intelligence</h2>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Be informed of your
                                                                competitive environment,</span> the opportunities and challenges
                                                            that it presents</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Adjust swiftly your Go
                                                                to Market strategies</span> to outpace your competition</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Benchmark your business
                                                                performance against your rivals</span></li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Capture consumer’s
                                                                opinions</span> and keep abreast of negative press linked to
                                                            your competitors</li>
                                                    </ul>
        
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 pt-80 order-first order-lg-2 mx-md-auto">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img6.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h2 class="fw-bold">Brand Reputation</h2>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Monitor Brand Health </span>and <span
                                                                class="highlight-text">measure performance</span></li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Track key trends </span>and<span
                                                                class="highlight-text"> optimize Brand positioning</span></li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Identify Brand Influencers
                                                            </span>and<span class="highlight-text"> customer affinities</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 order-first order-lg-2 mx-md-auto pt-10">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img7.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h2 class="fw-bold">Crisis Management</h2>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Anticipate critical situations
                                                            </span>with Qaptum’s Real-time alerts</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Measure the results </span>with Qaptum’s
                                                            Dashboards</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Share reports </span>with employees and
                                                            stakeholders</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Post-mortem analysis</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 order-first order-lg-2 mx-md-auto pt-10">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img8.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h2 class="fw-bold">Trend Analysis</h2>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Uncover evolving consumer needs
                                                            </span>and <span class="highlight-text">anticipate market
                                                                opportunities</span></li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Gain insight </span>into the dynamics of
                                                            tomorrow’s business</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Benchmark <span class="highlight-text" style="color:#4a72fd;text-transform:lowercase;">your </span><span class="highlight-text">business versus </span><span class="highlight-text" style="color:#4a72fd;text-transform:lowercase;">the </span>
                                                                <span class="highlight-text">competition</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 order-first order-lg-2 mx-md-auto pt-100">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img9.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <h2 class="fw-bold">Influencer Marketing</h2>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Know who is who, </span>can influence
                                                            your brand</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Quickly build brand trust </span>and
                                                            <span class="highlight-text">awareness</span></li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Gain rapid access </span>to your target
                                                            audience</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Monitor</span><span class="highlight-text" style="color:#4a72fd;text-transform:lowercase;"> the </span><span class="highlight-text">performance </span>of your
                                                            influencers</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 order-first order-lg-2 mx-md-auto pt-10">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img10.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h2 class="fw-bold">Campaign Assessment</h2>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Track</span> your <span class="highlight-text">campaign </span>performance in
                                                            real-time</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Measure results </span>and adjust content
                                                            by consumer demographics</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Acquire insights </span>for improved
                                                            future campaigns and better ROI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 order-first order-lg-2 mx-md-auto pt-10">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img11.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <h2 class="fw-bold">Market Research</h2>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="hero-content  mt-30">
                                            <div class="hero-slider-caption">
                                                <!-- <h1 class="text-black pb-20 fw-bold">Competitive intelligence</h1> -->
                                                <div class="pointers no-shadows use-cases pt-30">
                                                    <ul>
                                                        <li><span><i
                                                                    class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Get the complete picture </span>with
                                                            real-time data and access to substantial data sources</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Always stay informed </span>of the market
                                                            dynamics</li>
                                                        <li>
                                                            <span><i class="fa fa-check" aria-hidden="true"></i></span> <span
                                                                class="highlight-text">Monitor your performance versus your
                                                                competition</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 order-first order-lg-2 mx-md-auto pt-10">
                                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/side-img12.png'); ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </section>
        
        <section class="hero-02-area pos-rel bg-quotes overflow-hidden pb-60 pt-60">
            <div class="quotes_dots">
                <img src="<?php echo get_theme_file_uri('/images/bg-images/dots.png'); ?>" alt="" class="img-fluid">
            </div>
            <div class="quotes_waves wave_2">
                <img src="<?php echo get_theme_file_uri('/images/bg-images/waves_2.png'); ?>" alt="" class="img-fluid">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-12 pos-rel">
                        <div class="quotes">
                            “Don’t adapt to the energy in the room. Influence the energy in the room”
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-9 pt-50">
                        <div class="hero-content  mt-30">
                            <div class=" hero-slider-caption">
                                <h1 class="pb-20 fw-bold">Book a meeting with our experts</h1>
                                <div class="sub-info pt-30 pb-30">Discuss your use cases with our team</div>
                                <div class="pointers no-shadows">
                                    <ul>
                                        
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Get a hands-on demo of Qaptum</li>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Check how social analytics can help you to improve your brand value</li>
                                        <li><span><i class="fa fa-check-circle" aria-hidden="true"></i></span> Find out what consumers are thinking about you and compare it with your competitors</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-6 col-lg-6 pt-80 col-12">
                        <div class="form-container">
						<?php echo do_shortcode('[contact-form-7 id="8" title="Customer Sentiment"]'); ?>
                            <!--<form>
                                <div class="mb-3">
                                  <label for="fullname" class="form-label">Full name <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" id="fullname" >
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email <span class="text-danger">*</span></label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                  <input type="number" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                  <label for="company" class="form-label">Company <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" id="company" >
                                </div>
                                <div class="mb-3">
                                    <label for="industry" class="form-label">Industry <span class="text-danger">*</span></label>
                                    <select class="form-select" id="industry"  aria-label="Default select example">
                                        <option selected>Select Industry</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                    <select class="form-select" id="country"  aria-label="Default select example">
                                        <option selected>Select Country</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-btn pt-3">
                                    <button type="submit" class="landing_btn w-100">Book a Meeting <span class="landing_btn-icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button>
                                </div>
                              </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main Section End-->
<?php get_footer(); ?>