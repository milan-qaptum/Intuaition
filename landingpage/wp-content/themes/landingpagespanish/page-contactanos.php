<?php
/**
 * The Contact Us page for our theme
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
        <section class="hero-02-area pos-rel pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-9 pt-40">
                        <div class="hero-content  mt-30">
                            <div class="hero-slider-caption">
                                <div class="extra-text-heading"></div>
                                <h1 class="text-black pb-20 fw-bold side-line">Contáctanos</h1>
                                <p class="text-muted">Si desea aumentar el valor de su marca, complete el formulario a continuación para obtener una demostración rápida de Qaptum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 pt-80 order-lg-2 order-first">
                        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/illustrations/Contact-us.png'); ?>" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-02-area pos-rel pb-150">
            <div class="container">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-9 pt-50">
                      <div class="hero-content mt-30">
                            <div class=" hero-slider-caption">
                                <!--<h1 class="pb-20 fw-bold">We Provide Best Services</h1>
                                <h3 class="pb-30">Need Help?</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetuer adipiscing elit aeneancommodo ligula eget dolor aenean massa</p>  -->
                                <div class="pb-40">
                                    <div class="d-flex align-items-top pb-30">
                                        <div class="contact-icon_wrapper"><img src="<?php echo get_theme_file_uri('/images/icons/mail-icon.svg'); ?>" alt=""></div>
                                        <div class="text-muted">info@qaptum.com</div>
                                    </div>
                                    <div class="d-flex align-items-top">
                                        <div class="contact-icon_wrapper"><img src="<?php echo get_theme_file_uri('/images/icons/location-icon.svg'); ?>" alt=""></div>
                                        <div class="text-muted">Cracovia APO15 Calle Cracovia, Ciudad de México,Distrito Federal 01000, MX</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-12">
                        <div class="form-container">
							<?php echo do_shortcode('[contact-form-7 id="13" title="Contact Us"]'); ?>

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
                                    <label for="help_options" class="form-label">How can we help? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="help_options"  aria-label="help_options">
                                        <option>Choose a option..</option>
                                        <option value="1">Want a demo</option>
                                        <option value="2">Do you want us to contact you</option>
                                        <option value="3">Comment</option>
                                    </select>
                                </div>

                                <div id="shwtime">

                                    <div class="form-group">
                                        <label for="inputDate" class="form-label">Select Date: </label>
                                        <input type="input" class="form-control" id="inputDate">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputTime" class="form-label">Select Time: </label>
                                        <input type="input" class="form-control" id="inputTime">
                                    </div>

                                </div>
                                <div class="form-group shwtextarea">
                                    <label for="comment" class="form-label">Comment: </label>
                                    <textarea name="comment" id=""  rows="5" class="form-control"></textarea>
                                </div>

                                <div class="form-btn pt-3">
                                    <button type="submit" class="landing_btn w-100">Send Message <span class="landing_btn-icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button>
                                </div>
                              </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main Section End-->

  <?php get_footer();
?>
