<?php
/**
 * The Products page for our theme
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
                <h1 class="text-center fw-bold pb-20">Products</h1>
                <h2 class="text-center">Choose a plan that best fits your analysis requirements</h2>
                <h4 class="text-primary fw-bold text-center pb-40">Try Qaptum for free. No credit card required</h4>
                <div class="float-price d-none d-md-block" id="sticky-header-table">
                    <div class="float-price__inner">

                <div class="row align-items-end g-0">
                    <div class="col-lg-3 col-md-3">
                        <div class=" price-card">
                            <div class="card-body">
                                <div class="title">Features</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class=" price-card">
                            <div class="card-body">
                                <div class="title">Essential</div>
                                <div class="cost">USD $299/month</div>
                                <div class="text-center"><a href=https://app.qaptum.com/signup><button class="access_btns">Get Free Trial</button></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class=" price-card">
                            <div class="card-body">
                                <div class="title">Maximum</div>
                                <div class="cost">USD $2,799/month</div>
                                <div class="text-center"><a href="<?php echo site_url('/contactus'); ?>"><button class="access_btns">Contact Us</button></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class=" price-card">
                            <div class="card-body">
                                <div class="title">Unlimited</div>
                                <div class="cost invisible">Contact</div>
                                <div class="text-center"><a href="<?php echo site_url('/contactus'); ?>"><button class="access_btns">Contact Us</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <div class="table-responsive tableFixHead mt-10">
                    <table class="table">
                        <thead class="d-sm-none stiky-head">
							<tr>
							  <th scope="col">Features</th>
							  <th scope="col">
								<!-- <div class="card price-card">
								  <div class="card-body">
									<div class="title">Essential</div>
									<div class="pb-10">
									  Lorem ipsum dolor sit amet, consectetur adipisicing
									  elit. Perspiciatis explicabo neque necessitatibus in,
									  laborum eligendi!
									</div>
									<div class="cost">USD $299.00</div>
									<div class="text-center">
									  <button class="access_btns">Buy Now</button>
									</div>
								  </div>
								</div> -->
								<div class="price-card mobile-card">
								  <div class="card-body">
									<div class="title">Essential</div>
									<div class="cost">USD $299/month</div>
									<div class="text-center">
									  <a href=https://app.qaptum.com/signup><button class="access_btns">Get Free Trial</button></a>
									</div>
								  </div>
								</div>
							  </th>
							  <th scope="col">
								<!-- <div class="card price-card">
								  <div class="card-body">
									<div class="title">Maximum</div>
									<div class="pb-10">
									  Lorem ipsum dolor sit amet, consectetur adipisicing
									  elit. Perspiciatis explicabo neque necessitatibus in,
									  laborum eligendi!
									</div>
									<div class="cost">USD $2,799.00</div>
									<div class="text-center">
									  <button class="access_btns">Buy Now</button>
									</div>
								  </div>
								</div> -->

								<div class="price-card mobile-card">
								  <div class="card-body">
									<div class="title">Maximum</div>
									<div class="cost">USD $2,799/month</div>
									<div class="text-center">
									  <a href="<?php echo site_url('/contactus'); ?>"><button class="access_btns">Contact Us</button></a>
									</div>
								  </div>
								</div>
							  </th>
							  <th scope="col">
								<!-- <div class="card price-card">
								  <div class="card-body">
									<div class="title">Unlimited</div>
									<div class="pb-10">
									  Lorem ipsum dolor sit amet, consectetur adipisicing
									  elit. Perspiciatis explicabo neque necessitatibus in,
									  laborum eligendi!
									</div>
									<div class="cost invisible">Contact</div>
									<div class="text-center">
									  <button class="access_btns">Contact Us</button>
									</div>
								  </div>
								</div> -->

								<div class="price-card mobile-card">
								  <div class="card-body">
									<div class="title">Unlimited</div>
									<div class="cost invisible">Contact</div>
									<div class="text-center">
									  <a href="<?php echo site_url('/contactus'); ?>"><button class="access_btns">Contact Us</button></a>
									</div>
								  </div>
								</div>
							  </th>
							</tr>
						  </thead>
                        <tbody class="cust-width text-center">
                          <tr>
                            <th scope="row" >Volume Quota</th>
                            <td>10,000</td>
                            <td>100,000</td>
                            <td>1,000,000</td>
                          </tr>
						  <tr>
                            <th scope="row" >Projects</th>
                            <td>3</td>
                            <td>20</td>
                            <td>Unlimited</td>
                          </tr>
                          <tr>
                            <th scope="row" >Dashboards</th>
                            <td>9</td>
                            <td>60</td>
                            <td>Unlimited</td>
                          </tr>
                          <tr>
                            <th scope="row" >Reports</th>
                            <td>4</td>
                            <td>20</td>
                            <td>Unlimited</td>
                          </tr>
                          <tr>
                            <th scope="row" >Users</th>
                            <td>5</td>
                            <td>20</td>
                            <td>Unlimited</td>
                          </tr>
                          <tr>
                            <th scope="row" colspan="4">
                                <div class="profiling-show ">Profile analysis <span class="feature_availability plus"><i class="fa fa-plus-circle"
                                            aria-hidden="true"></i></span><span class="feature_availability minus"><i class="fa fa-minus-circle"
                                            aria-hidden="true"></i></span></div>
                                <div class="profile-info prof-hide1">
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/CRM.svg'); ?>" alt=""></div>
                                        <span>Support</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/Settings-listening.svg'); ?>" alt=""></div>
                                        <span>Settings</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/Reports.svg'); ?>" alt=""></div>
                                        <span>Reports</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/sentiment.svg'); ?>" alt=""></div>
                                        <span>Sentiment</span>
                                    </div>
                                </div>
                            </th>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Look for Pages</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <!-- <tr class="profiling-hide">
                            <th scope="row">Hashtags</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr> -->
                          <tr class="profiling-hide">
                            <th scope="row">Look for Profiles</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Versus ( 1 vs 1 )</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Projects</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Sentiment Engine</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Language Engine</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Emoji Engine</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide">
                            <th scope="row">Support Ticket</th>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr>
                            <th scope="row" colspan="4">
                                <div class="profiling-show2">Social Listening <span class="feature_availability plus"><i class="fa fa-plus-circle"
                                    aria-hidden="true"></i></span><span class="feature_availability minus"><i class="fa fa-minus-circle"
                                    aria-hidden="true"></i></span></div>
                                <div class="profile-info prof-hide2">
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/Trendings.svg'); ?>" alt=""></div>
                                        <span>Trending</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/influencers.svg'); ?>" alt=""></div>
                                        <span>Influencers</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/analytics.svg'); ?>" alt=""></div>
                                        <span>Analytics</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/Crisis.svg'); ?>" alt=""></div>
                                        <span>Crisis Module</span>
                                    </div>
                                    <div class="profile-icons">
                                        <div class="profile-img"><img  src="<?php echo get_theme_file_uri('/images/icons/Training.svg'); ?>" alt=""></div>
                                        <span>Advance Support</span>
                                    </div>
                                </div>
                            </th>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Composed Keywords</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Emotion Engine</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Advance Logic Engine</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row"> Versus ( 1 vs 1, 1 vs Many )</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Trending</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Entities Engine</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Crisis Module</th>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
						  <tr class="profiling-hide2">
                            <th scope="row">Download Report data per source</th>
                            <td></td>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <tr class="profiling-hide2">
                            <th scope="row">Influencers</th>
                            <td></td>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
						  <tr class="profiling-hide2">
                            <th scope="row">Vision Recognition ( Coming Soon ) </th>
                            <td></td>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
						  <tr class="profiling-hide2">
                            <th scope="row">Advance Support</th>
                            <td></td>
                            <td></td>
                            <td><span class="feature_availability"><i class="fa fa-check-circle" aria-hidden="true"></i></span></td>
                          </tr>
                          <!-- <tr>
                            <th scope="row" colspan="4" class="bg-secondary text-white">Analytics <em>**Coming Soon**</em></th>
                          </tr> -->
                        </tbody>
                      </table>
                </div>

            </div>
        </section>
    </main>
    <!--Main Section End-->

  <?php get_footer();
?>
