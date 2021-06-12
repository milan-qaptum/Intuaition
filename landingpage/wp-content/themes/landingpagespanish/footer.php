<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intuation
 */

?>

    <!-- footer-area-start -->
        <footer class="footer-area pt-65 pb-45" >
            <div class="container">
                <div class="row mb-55 no-gutters align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="footer-logo">
                            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/images/Qaptum_white-logo.png'); ?>" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-xl-3 col-lg-5 col-md-4 col-12">
                        <div class="footer-widget fot-widget-02 mb-30">
                            <h4 class="footer-widget-title mb-25">Our Services</h4>
                            <ul class="footer-list footer-02-list">
                                <li><a href="#">Wed Development</a></li>
                                <li><a href="#">App Development</a></li>
                                <li><a href="#">Saas</a></li>
                                <li><a href="#">Data Driven Solution</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="footer-widget widget-center fot-widget-02 mb-30">
                            <h4 class="footer-widget-title mb-25">Company</h4>
                            <!-- <ul class="footer-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Condition</a></li>
                            </ul> -->
							<!-- <ul class="footer-list "> -->
							 <ul class="footer-list footer-02-list"> 
                                <li><a href="<?php echo site_url('/por-que-qaptum'); ?>">About Us</a></li>
								<li><a href="<?php echo site_url('/contactanos'); ?>">Contact Us</a></li>
							<!--	<li><a href="#">Blog</a></li>  -->
                            <!--    <li><a href="#">FAQ</a></li>   -->	
                            <!--    <li><a href="#">Career</a></li>  -->
                            <!--    <li><a href="#">Privacy Policy</a></li>	 -->
                            <!--    <li><a href="#">Terms and Condition</a></li>	-->
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="footer-widget widget-center fot-widget-02 mb-30">
                            <h4 class="footer-widget-title mb-25">Social</h4>
                            <ul class="footer-list footer-02-list">
                                <li><a href="#"><i class="fa fa-facebook-f"></i> Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i> Youtube</a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="footer-widget widget-center fot-widget-02 mb-30">
                            <h4 class="footer-widget-title mb-25">Contact</h4>
                            <div style="color:#708389;">For Sales Enquiry:</div>
                            <p style="color:#708389;">info@qaptum.com</p>
                            <!-- <div class="text-white">Call Us:</div>
                            <p class="text-white">+91-9700000086</p> -->
                            <div style="color:#708389;">Address:</div>
                            <p style="color:#708389;">Cracovia APO15 Calle Cracovia, Ciudad de México,Distrito Federal 01000, MX</p>
                        </div>
                    </div>
                </div>
                <div class="copyright-area copyright-area-02 mt-15  pt-20 pb-20">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="copyright-text">
                                <p>&#169; Copyright  2021 Qaptum. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer-area-end -->


<?php wp_footer(); ?>
  </body>
</html>
