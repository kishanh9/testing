<?php
/**
 * Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package palms4u
 */

get_header(); 

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="landing-section">
			<!-- start carousel -->
			<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			    	<?php for($i = 1; $i < 6; $i++) { ?>
			        	<li data-target="#carousel-example-generic" data-slide-to="<?php echo  $i; ?>" class="<?php if($i == 1){ echo 'active'; }?>"></li>
			        <?php } ?>
			    </ol>
			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			        <?php for($i = 1; $i < 6; $i++) { 
			        	if(ot_get_option('slider_' . $i .'_image')) { 
							$background = ot_get_option('slider_' . $i .'_image', array());
						}
					?>
				        <div class="item <?php if($i == 1){ echo 'active'; }?>" style="background: url(<?php echo $background['background-image']; ?>);">
				        	<div class="slider-overlay" data-animation="animated slideInLeft"></div>
				            <div class="carousel-caption" data-animation="animated fadeInLeft" data-scroll-speed="3">
				            	<?php 
					               	if(ot_get_option('slider_' . $i .'_copy')) { 
										echo ot_get_option('slider_' . $i .'_copy');
									}
								?>
				            </div>
				        </div>
				    <?php } ?>
			    </div>
			    <!-- Controls -->
			    <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			    </a> -->
			</div>
			<!--/ end carousel -->
		</section>
		<section class="mission-statement">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="animated" id="mission-statement-content">
							<?php
								while ( have_posts() ) : the_post();

									the_content();

								endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-form">
			<div class="overlay-form"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="animated" id="form-wrap">
							<?php echo do_shortcode( '[gravityform id=1 title=true description=false ajax=true tabindex=49]' ) ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="disclaimer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="disclaimer-copy" class="animated">
							<?php

								if(ot_get_option('disclaimer_copy')) { 
									echo ot_get_option('disclaimer_copy');
								}

							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-details" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 contact-col">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<?php

							if(ot_get_option('p4u_address')) { 
								echo ot_get_option('p4u_address');
							}

						?>
					</div>
					<div class="col-md-3 col-sm-6 contact-col">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<?php

							if(ot_get_option('p4u_operating_hours')) { 
								echo ot_get_option('p4u_operating_hours');
							}

						?>
					</div>
					<div class="col-md-3 col-sm-6 contact-col">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<?php

							if(ot_get_option('p4u_phone_number')) { 
								echo ot_get_option('p4u_phone_number');
							}

						?><br>
						<span class="subtext">(WhatsApp's welcomed)</span>
					</div>
					<div class="col-md-3 col-sm-6 contact-col">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<?php

							if(ot_get_option('p4u_email')) { 
								echo ot_get_option('p4u_email');
							}

						?>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
