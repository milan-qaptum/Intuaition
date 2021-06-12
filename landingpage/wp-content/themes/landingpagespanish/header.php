<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intuation
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <?php wp_head(); ?>
	<style type="text/css">
	
		
	.quotes::before {
	  content: "";
	  background-image: url("<?php echo get_theme_file_uri('/images/bg-images/quote.png'); ?>");
	  background-size: cover;
	  position: absolute;
	  left: -50px;
	  bottom: 85px;
	  width: 150px;
	  height: 150px;
	  opacity: 0.2;
	}
	
	.base-chart-bg {
	  background: url("<?php echo get_theme_file_uri('/images/illustrations/base_chart.png'); ?>") center no-repeat;
	  background-size: contain;
	  width: 100%;
	  height: 100%;
	  position: relative;
	}

	.bg-background {
	  background: url("<?php echo get_theme_file_uri('/images/bg-images/bg5.jpg'); ?>");
	  background-position: center;
	  background-size: cover;
	}
	
	.footer-area {
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	  background: url("<?php echo get_theme_file_uri('/images/bg-images/footer-bg.png'); ?>");
	}
	
	@media (max-width: 767px) {
	  .footer-area {
		background: #000;
	  }
	}
	.blue-bg-light {
	  background: url("<?php echo get_theme_file_uri('/images/bg-images/blue-bg.png'); ?>") no-repeat center;
	  background-size: cover;
	}
		
	.wpcf7-form p label{
	  font-family: "Montserrat",sans-serif;
	  font-style: normal;
	  font-weight: 700;
	  font-size: 14px;
	  line-height: 17px;
	  color: #0C014F;	
	  width: 100%;  
	}

	.wpcf7-form p label input[type="text"],
	input[type="email"],
	input[type="tel"],
	select,
	textarea
	{
		width: 100%;
		margin-top: 0.5rem;
	}

	.intl-tel-input{
		width: 100%;
		margin-top: 0.5rem;
	}
	
	.wpcf7-submit {
	  font-family: FontAwesome;
	  font-size: 20px;
	  font-weight: 900;
	}
	
	</style

  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
	
	    <!-- header-start -->
    <header class="<?php if(is_front_page()){
			echo "header-transparent";
	}else{
			echo "header-transparent bg-blue";
	} 
		?>">
        <div id="sticky-header" class="main-menu-area menu-padding pl-55 pr-55">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-11 col-9">
                        <div class="logo">
                            <a class="img-fluid" href="<?php echo site_url(); ?>"><img class="chng-logo" src="<?php echo get_theme_file_uri('/images/Qaptum_white-logo.png'); ?>" alt="" /></a>
                        </div>
						<div class="landing-page_navbar__lang-switches">
							<ul>
								<li><a href=https://qaptum.com>EN</a></li>
								<li><a class="active" href=https://qaptum.com/es>ESP</a></li>
							</ul>
						</div>
                        <!-- <div class="dropdown custom-drop">
                            <button class="access_btns dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Lang
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href=https://qaptum.com>English</a></li>
                              <li><a class="dropdown-item" href=https://qaptum.com/es>Spanish</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-xl-7 col-lg-7 d-none d-xl-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="<?php echo site_url('/casos-de-estudio'); ?>" >Casos de Estudio <!--<i class="fa fa-angle-down"></i>--></a>
                                        <ul class="sub-menu text-left container pt-30 pb-30 d-none">
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/ConsumerInsight.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Consumer Insight</span>
                                                        </div>
                                                        <div class="nav-description">Know your customer’s opinions and how they feel about your brand, products, and services.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/CompetitorIntelligence.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Competitor Intelligence</span>
                                                        </div>
                                                        <div class="nav-description">Be informed of your competitive environment, the 
                                                            opportunities and challenges that it presents.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/BrandAnalysis.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Brand Analysis</span>
                                                        </div>
                                                        <div class="nav-description">Monitor Brand Health and measure performance.
                                                            Track key trends and optimize Brand positioning.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/CrisisManagement.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Crisis Management</span>
                                                        </div>
                                                        <div class="nav-description">Anticipate critical situations with Qaptum’s Real-time 
                                                            alerts.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/TrendAnalysis.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Trend Analysis</span>
                                                        </div>
                                                        <div class="nav-description">Uncover evolving consumer needs and anticipate 
                                                            market opportunities.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/InfluencerMarketing.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Influencer Marketing</span>
                                                        </div>
                                                        <div class="nav-description">Know who is who, can influence your brand.
                                                            Quickly build brand trust and awareness.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/CampaignAssessment.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Campaign Assessment</span>
                                                        </div>
                                                        <div class="nav-description">Track your campaign performance in real-time.
                                                            Measure results and adjust content by consumer demographics.</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="nav-wrapper">
                                                        <div class="d-flex align-items-center pb-20">
                                                            <div class="nav-icon">
                                                                <img src="<?php echo get_theme_file_uri('/images/icons/MarketResearch.svg'); ?>" alt="">
                                                            </div>
                                                            <span class="nav-text">Market Research</span>
                                                        </div>
                                                        <div class="nav-description">Get the complete picture with real-time data and access 
                                                            to substantial data sources.</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pos-rel"><a href="<?php echo site_url('/products'); ?>" >Products <!--<i class="fa fa-angle-down"></i>--></a>
                                        <ul class="sub-menu text-left d-block w-285 d-none">
                                            <li><a href="#">Qaptum Essential </a>
                                            <li><a href="#">Qaptum Full</a>
                                            <li><a href="#">Qaptum Unlimited</a>
                                            <li><a href="#">Qaptum Services</a>
                                            <li><a href="#">Qaptum Integration</a>
                                        </ul>
                                    </li>
                                    <li class="pos-rel d-none"><a href="#" >Resources <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left d-block w-285">
                                            <li><a href="#">Blog</a>
                                            <li><a href="#">Webinars</a>
                                            <li><a href="#">Industry Reports</a>
                                            <li><a href="#">Business Cases</a>
                                            <li><a href="#">Customer References</a>
                                            <li><a href="#">FAQ</a>
                                        </ul>
                                    </li>
                                    <li class="pos-rel d-none"><a href="#" >Partners <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left d-block w-285">
                                            <li><a href="#">Agencies</a></li>
                                            <li><a href="#">Resellers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('/por-que-qaptum'); ?>">¿Por qué Qaptum?</a></li>
                                    <li><a href="<?php echo site_url('/contactanos'); ?>" >Contáctanos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="col-xl-2 col-lg-2 col-md-1 col-3">
                        <div class="header-02-right d-lg-flex align-items-center justify-content-between">
                            <div class="d-none d-lg-flex align-items-center">
                                <a href=https://app.qaptum.com/login><button type="button" class="access_btns">Login</button></a>
                                <a href=https://app.qaptum.com/signup><button type="button" class="access_btns">Signup</button></a>
                            </div>
                            <div class="hamburger-menu d-xl-none d-lg-inline-block">
                                <a href="#">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header> 
    <!-- header-end -->
    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fa fa-times"></i></a>
        </div>


        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
			<li><a href="<?php echo site_url('/casos-de-estudio'); ?>" >Casos de Estudio</a>
                <!--<li class="has-dropdown">
                    <a href="<?php echo site_url(); ?>">Use Cases</a> -->
                    <!--<ul class="sub-menu">
                        <li><a href="#">Consumer Insight</a></li>
                        <li><a href="#">Competitor Intelligence</a></li>
                        <li><a href="#">Brand Analysis</a></li>
                        <li><a href="#">Crisis Management</a></li>
                        <li><a href="#">Trend Analysis</a></li>
                        <li><a href="#">Influencer Marketing</a></li>
                        <li><a href="#">Campaign Assessment</a></li>
                        <li><a href="#">Market Research</a></li>
                    </ul> -->
                </li>
				<li><a href="<?php echo site_url('/products'); ?>">Products</a>
                <!-- <li class="has-dropdown"><a href="#">Products</a>
                    <ul class="sub-menu">
                        <li><a href="#">1</a>
                        <li><a href="#">2</a>
                        <li><a href="#">3</a>
                    </ul> -->
                </li>
                <!-- <li class="has-dropdown">
                    <a href="#">Resources</a>
                    <ul class="sub-menu">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Partners</a>
                    <ul class="sub-menu">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </li>  -->
				<li><a href="<?php echo site_url('/por-que-qaptum'); ?>">¿Por qué Qaptum?</a></li>
                <li><a href="<?php echo site_url('/contactanos'); ?>" >Contáctanos</a></li>
                <!-- <li><a href="#">Why Qaptum</a></li>
                <li><a href="#">Contacts</a></li> -->
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->



	
