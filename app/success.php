<?php 
require_once 'src/handlePayments.php';
include('../../wp-load.php');
?>
<?php //get_header();?>
<?php get_template_part( 'donateheader' ); ?>
		<main class="main">
		<div class="breadcrumbs">
			<div class="wrapper container-fluid">
				<div class="row center-xs">
					<div class="col-xs-10">
						<ul class="breadcrumbs-nav">
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
							<li>Donate</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<form id="donate-form" action="" class="donate-form" method="post">
			<ul class="donate-form-nav">
				<li class="step-passed" onclick="window.location.href = 'donate.php'">
					<a href="#"> <span class="title">Amount</span> <span class="number">1</span>
						<span class="badge"> <span class="icon icon-check"></span>
					</span>
				</a>
				</li>
				<li class="step-passed" onclick="window.location.href = 'donate.php'">
					<a href="#"> <span class="title">Details</span> <span
						class="number">2</span> <span class="badge"> <span
							class="icon icon-check"></span>
					</span>
				</a>
				</li>
				<li class="step-passed" onclick="window.location.href = 'donate.php'"><a
					href="#"> <span class="title">Payment</span> <span class="number">3</span>
						<span class="badge"> <span class="icon icon-check"></span>
					</span>
				</a></li>
				<li class="step-active"><a href="#"> <span class="title">Finish</span> <span
						class="number">4</span> <span class="badge"> <span
							class="icon icon-check"></span>
					</span>
				</a></li>
			</ul>
			
			<div class="donate-form-step active">
				<div class="wrapper container-fluid">
					<div class="row center-xs">
						<div class="col-xs-11 col-md-10">
							<h1>
								<span>Step 4</span> Finish
							</h1>
							<div class="logo-finish">
								<img src="images/logo-finish.svg" alt="">
							</div>
							<h2>Thank You</h2>
							<div class="finish-text-holder">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									Ut enim ad minim veniam, quis nostrud</p>
							</div>
							<div class="donation-summary">
								<div class="donation-summary-box personal-info">
									<div class="box-holder">
										<h3>Your Donation</h3>
										<span>
											<?php if( retriveDonorField($_SESSION,'merchant-defined-field-3') ) echo retriveDonorField($_SESSION,'merchant-defined-field-3');?>
											&nbsp;
											<?php if( retriveDonorField($_SESSION,'merchant-defined-field-1') ) echo retriveDonorField($_SESSION,'merchant-defined-field-1');?>
											&nbsp;
											<?php if( retriveDonorField($_SESSION,'merchant-defined-field-2') ) echo retriveDonorField($_SESSION,'merchant-defined-field-2');?>
											&nbsp;
										</span>
                    <span>
                      <?php if( retriveDonorField($_SESSION,'address1') ) echo retriveDonorField($_SESSION,'address1');?>
                    </span>
                    <span>
                      <?php if( retriveDonorField($_SESSION,'address2') ) echo retriveDonorField($_SESSION,'address2');?>
                    </span>
										<span>
											<?php if( retriveDonorField($_SESSION,'city') ) echo retriveDonorField($_SESSION,'city');?>,    &nbsp;
											<?php if( retriveDonorField($_SESSION,'state') ) echo retriveDonorField($_SESSION,'state');?>
                      &nbsp;
                      <?php if( retriveDonorField($_SESSION,'postal') ) echo retriveDonorField($_SESSION,'postal');?>
										</span>
                    <span>
                      <?php if( retriveDonorField($_SESSION,'phone') ) echo retriveDonorField($_SESSION,'phone');?>
                    </span>
									</div>
								</div>
								<div class="donation-summary-box">
									<div class="total-sum">
										<span class="title">Total donated</span> <strong
											class="amount"><?php if( retriveDonorField($_SESSION,'donate') ) echo retriveDonorField($_SESSION,'donate');?></strong>
									</div>
									<div class="box-holder">
										<h3>Lorem ipsum dolor</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
											sed do eiusmod tempor incididunt ut labore et dolore magna
											aliqua. Ut enim ad minim veniam, quis nostrud exercitation
											ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
											aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint
											occaecat cupidatat non proident, sunt in culpa qui officia
											deserunt mollit anim id</p>
									</div>
									<div class="gla-info">
										<p>Global Lyme Alliance is a 501(c)(3) charitable
											organization. Tax ID is 06-1559393.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
  <!-- Section News -->
                <?php
                  $recent_news_image_1 = get_field('recent_news_image_1');
                  $recent_news_image_2 = get_field('recent_news_image_2');
                  $recent_news_image_3 = get_field('recent_news_image_3');
                  $recent_news_image_4 = get_field('recent_news_image_4');

                ?>
                 <section class="section-news">
                    <div class="wrapper container-fluid">
                        <div class="row center-xs">
                            <div class="col-xs-10">
                                <h2><?php the_field('recent_news_title', 4185); ?></h2>
                                <h3><?php the_field('recent_news_desc', 4185); ?></h3>
                            </div>
                        </div>
                    </div>

                <!-- News Block -->
                    <div class="news-block">
                        <div class="row">
                            <div class="col-xs-6 col-md-4">
                               <?php $select_blog_title = get_field('select_blog_title', 4185);
                                  $select_blog = get_field('select_blog', 4185); ?>
                                
                                  <?php 
                                  if( $select_blog ){
                                    $post = $select_blog;
                                    setup_postdata( $post );
                                    $thumbnail_image = get_field('thumbnail_image', 4185);
                                  ?>   
                                    <a class="news-box-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <div class="news-box news-box-image">
                                      <div class="bg-stretch" style="background: #fff url('<?php the_field('recent_news_image_1', 4185); ?>')  50% 50% no-repeat;  background-size: cover;"></div>                                 
                                      </div>
                                    <div class="news-box arrow-top">
                                    <span class="text-holder">
                                        <strong class="subtitle"><?php the_field('select_blog_title', 4185); ?></strong>
                                        <span class="title"><?php the_title(); ?></span>
                                    </span>
                                    </div>
                                    </a>

                               <?php
                                  }
                                  wp_reset_postdata();
                                ?>

                                <a href="<?php the_field('video_link', 4185); ?>" class="news-box news-box-video">
<div class="bg-stretch" style="background: #fff url('<?php the_field('recent_news_image_4', 4185); ?>')  50% 50% no-repeat; background-size: cover;"></div>
                                    <span class="icon icon-play-circle"></span>
                                </a>
                            </div>




                            <div class="col-xs-6 col-md-4">
                            <?php $select_news_title = get_field('select_news_title', 4185);
                            $select_news = get_field('select_news', 4185); ?>
                                
                                  <?php 
                                  if( $select_news ){
                                    $post = $select_news;
                                    setup_postdata( $post );
                                    $thumbnail_image = get_field('thumbnail_image');
                                  ?>                                
                                    <a href="<?php the_permalink(); ?>" class="news-box-link">
                                    <div class="news-box arrow-bottom">
                                      <span class="text-holder">
                                         <strong class="subtitle"><?php the_field('select_news_title', 4185); ?></strong>
                                         <span class="title"><?php the_title(); ?></span>
                                      </span>
                                    </div>
                                    <div class="news-box news-box-high news-box-image">
                                          <div class="bg-stretch" style="background: #fff url('<?php the_field('recent_news_image_3', 4185) ?>')  50% 50% no-repeat; background-size: cover;"></div>
                                   </div>
                                  </a>
                                 
                                  <?php
                                  }
                                  wp_reset_postdata();
                                ?>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                    <?php $select_news_title_2 = get_field('select_news_title_2', 4185);
                                    $select_news_2 = get_field('select_news_2', 4185); ?>
                                            <?php 
                                        if( $select_news_2 ){
                                          $post = $select_news_2;
                                          setup_postdata( $post );
                                          $thumbnail_image = get_field('thumbnail_image', 4185);
 
                                       ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="news-box-link">
                                              <div class="news-box news-box-short news-box-image">
                                                  <div class="bg-stretch" style="background: #fff url('<?php the_field('recent_news_image_2', 4185); ?>') 50% 50% no-repeat; background-size: cover;">
                                                    
                                                  </div>
                                              </div>
                                               <div class="news-box news-box-short arrow-top">
                                                  <span class="text-holder">
                                                       <strong class="subtitle"><?php the_field('select_news_title_2', 4185); ?></strong>
                                                       <span class="title"><?php the_title(); ?></span>
                                                  </span>
                                              </div>
                                         

                                              </a>
                                          
                                            <?php
                                          }
                                          wp_reset_postdata();
                                        ?>

                                  <!-- twitter box -->
                                <?php
                                                if(is_active_sidebar('twitter-home')){
                                                  dynamic_sidebar('twitter-home');
                                                }
                                              ?>
                            </div>
                        </div>


                        <!-- Social Block -->
        
                        <div class="social-block">
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="<?php the_field('video_link', 4185); ?>" class="social-box social-box-youtube">
                                        <span class="social-holder">
                                            <span class="icon icon-play-circle"></span>
                                            <strong class="title md-visible">
                                            	<?php the_field('watch_video_title', 4185); ?>
                                            </strong>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php the_field('like_us_on_facebook_link', 4185 ); ?>" title="Like Us On Facebook" target="_blank" rel="nofollow" class="social-box social-box-facebook">
                                        <span class="social-holder">
                                            <span class="icon icon-facebook-square"></span>
                                            <strong class="title md-visible">
                                              <?php the_field('like_us_on_facebook_title', 4185); ?>
</strong>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php the_field('twitter_button_link', 4185); ?>" class="social-box social-box-twitter">
                                        <span class="social-holder">
                                            <span class="icon icon-twitter"></span>
                                            <strong class="title md-visible"><?php the_field('twitter_title', 4185) ?></strong>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                  <!-- Subscribe CTA -->
                <section class="section-subscribe">
                    <div class="wrapper container-fluid">
                        <div class="row center-xs">
                            <div class="col-xs-12 col-sm-11 col-md-10">
                                <div class="subscribe-form">
                                    <span class="icon icon-mail sm-visible"></span>
                                    <h2><?php the_field('newsletter_text', 4185); ?></h2>
                                    <div class="form-row">
                                         <?php echo do_shortcode('[constantcontactapi formid="2"]'); ?> 
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		</form>
		</main>
	
	</div>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/donate.js"></script>
				<?php get_template_part( 'donatefooter' ); ?>

	<script type="text/javascript">
			var currentActiveStep = 0;
			<?php if ($isPaymentStep) { echo 'currentActiveStep = 2;'; }?>
		</script>

</body>
</html>
<?php session_destroy();?>