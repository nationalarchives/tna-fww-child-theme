<?php
/*
Template Name: FWW landing
*/
get_header(); ?>
	<div class="fww">
		<div class="banner" role="banner">
			<?php get_template_part( 'breadcrumb' ); ?>
			<div class="heading-banner text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/fww-logo.png" alt="First World War" class="img-responsive">
							<h1>First World War</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fww-menu" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<ul>
							<li>
								<a href="#explore-our-records">Explore our records</a>
							</li>
							<li>
								<a href="#discover-personal-stories">Discover personal stories</a>
							</li>
							<li>
								<a href="#about-our-programme">About our programme</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<main id="main" class="content-area" role="main">
			<div class="container">
				<section class="connect">
					<div class="row">
						<div class="col-sm-6">
							<h2>Stay up-to-date with all our centenary activity</h2>
						</div>
						<div class="col-sm-4">
							<form name="signup" id="banner-form" class="pad-medium" action="http://dmtrk.co.uk/signup.ashx" method="post">
								<input type="hidden" name="addressbookid" value="281378">
								<input type="hidden" name="userid" value="28895">
								<input type="hidden" name="ReturnURL" value="http://nationalarchives.gov.uk/news/subscribe-confirmation.htm">
								<input type="email" id="Email" name="Email" required="" placeholder="Enter your email address">
								<input id="newsletterSignUp" type="submit" value="Subscribe" class="button">
							</form>
						</div>
						<div class="col-sm-2">
							<span class="sprite icon-facebook pull-right"></span>
							<span class="sprite icon-twitter pull-right"></span>
						</div>
					</div>
				</section>
				<section class="featured">
					<div class="row equal-heights">
						<div class="col-sm-4">
							<div id="event" class="card">
								<div class="entry-thumbnail">
									<a href="#about-our-programme">
										<img src="<?php echo str_replace( home_url(), '', get_stylesheet_directory_uri() ) ?>/img/thumb-news.jpg" alt="First World War events">
									</a>
								</div>
								<div class="entry-content">
									<small>What&prime;s on</small>
									<h2>First World War events</h2>
								</div>
							</div>
							<ul class="child events">
								<li><a href="#about-our-programme" title="More First World War events">More events</a></li>
							</ul>
						</div>
						<?php
						$args = array( 'posts_per_page' => 2, 'post_type' => 'page', 'category_name' => 'feature' );
						$fwwposts = get_posts( $args );
						foreach ( $fwwposts as $post ) : setup_postdata( $post ); ?>
							<div class="col-sm-4">
								<div class="card">
									<div class="entry-thumbnail">
										<a href="<?php the_permalink(); ?>">
											<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
										</a>
									</div>
									<div class="entry-content">
										<small>Feature</small>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						<?php endforeach;
						wp_reset_postdata();?>
					</div>
					<div class="row equal-heights">
						<?php fww_rss( 'http://blog.nationalarchives.gov.uk/blog/tag/first-world-war/feed/', '1' ) ?>
						<?php fww_news_rss( 'http://www.nationalarchives.gov.uk/category/first-world-war-portal-news/feed/', '2' ) ?>
					</div>
				</section>
				<section id="explore-our-records">
					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="entry-header">
									<h2>Explore our records</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="col-sm-4">
										<div class="fww-box clearfix">
											<div class="thumb-img">
												<a href="#">
													<img src="<?php echo get_stylesheet_directory_uri() ?>/img/fww-records.jpg" class="img-responsive" alt="Find your ancestor in our FWW records">
												</a>
											</div>
												<h3><a href="#">Find your ancestor in our FWW records</a></h3>
												<p>If you want to explore our First World War records and are new to researching at The National Archives, you <a href="#">can start your research here</a> or <a href="#">chat to one of our reader advisors online</a>.</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="fww-box clearfix">
											<div class="thumb-img">
												<a href="first-world-war/centenary-digitised-records/">
													<img src="<?php echo get_stylesheet_directory_uri() ?>/img/online-collection.jpg" class="img-responsive" alt="Search our online collections">
												</a>
											</div>
												<h3><a href="first-world-war/centenary-digitised-records/">Browse our online collections</a></h3>
												<p>We hold a vast collection of documents, letters, diaries, maps and photographs from the First World War, many of which have been digitised.</p>
												<form>
													<select name="research-category" id="research-category" class="margin-right-medium">
														<option value="0">Select a subject</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/?research-category=first-world-war&sub-category%5B%5D=medals-and-awards&res-online=1">Medals</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/raf-officers-service-records-1918-1919/">RAF officers</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/merchant-seamens-campaign-medal-records-1914-1918/">Merchant seamen</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/british-army-nurses-service-records-1914-1918/">Army nurses</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/prisoner-of-war-interview-reports-1914-1918/">Prisoners of war</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/royal-naval-volunteer-reserve-service-records-1903-1922/">Royal Naval Volunteer Reserve</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/royal-naval-division-service-records-1914-1919/">Royal Naval Division</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/womens-royal-air-force-service-records-1918-1920/">Women's Royal Air Force</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/womens-royal-naval-service-records-1917-1919/">Women's Royal Naval Service</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/royal-naval-air-service-officers-service-records-1906-1918/">Royal Naval Air Service</option>
														<option value="http://www.nationalarchives.gov.uk/help-with-your-research/research-guides/middlesex-military-service-appeal-tribunal-1916-1918/">Conscription appeals</option>
													</select>
												</form>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="fww-box clearfix">
											<div class="thumb-img">
												<a href="http://www.operationwardiary.org/">
													<img src="<?php echo get_stylesheet_directory_uri() ?>/img/unit-diaries.jpg" class="img-responsive" alt="Help us tag our war diaries">
												</a>
											</div>
												<h3><a href="http://www.operationwardiary.org/">Help us tag our war diaries</a></h3>
											<p>Operation War Diary is an exciting new crowdsourcing project – help us to unlock the data in our war diaries.</p>
											<p>Find out more about <a title="Find out more about crowdsourcing and Operation War Diary" href="http://blog.nationalarchives.gov.uk/blog/operation-war-diary-archive-needs/">crowdsourcing and Operation War Diary</a> or simply go to the website and <a title="External website - link opens in a new window" href="http://www.operationwardiary.org/" target="_blank">start tagging</a>.</p>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>
				<section id="discover-personal-stories">
					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="entry-header">
									<h2>Discover personal stories</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="col-sm-6">
										<div class="fww-box clearfix">
											<div class="thumb-img">
												<a href="http://www.nationalarchives.gov.uk/education/resources/letters-first-world-war-1915/">
													<img src="<?php echo get_stylesheet_directory_uri() ?>/img/soldiers-MUN-5_157_1916-1918.jpg" class="img-responsive" alt="Letters from the First World War">
												</a>
											</div>
												<small>Soldiers' letters</small>
												<h3><a href="http://www.nationalarchives.gov.uk/education/resources/letters-first-world-war-1915/">Letters from the First World War</a></h3>
												<p>Explore how a group of men from varied backgrounds experienced active service.</p>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="fww-box clearfix">
											<div class="thumb-img">
												<a href="http://media.nationalarchives.gov.uk/index.php/tag/first-world-war/">
													<img src="<?php echo get_stylesheet_directory_uri() ?>/img/podcasts-MUN-5_394_40_June-1915.jpg" class="img-responsive" alt="First World War poscasts and videos">
												</a>
											</div>
												<small>Media</small>
												<h3><a href="http://media.nationalarchives.gov.uk/index.php/tag/first-world-war/">First World War poscasts and videos</a></h3>
												<p>Use our podcasts and videos to help you explore our records of the First World War, from tracing battalions of the British Army to the Women's Land Army.</p>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>
				<section id="about-our-programme">
					<div class="row">
						<div class="col-sm-4">
							<article>
								<div class="entry-header">
									<h2>About our programme</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<div class="thumb-img">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/img/programme-MUN-5_165_1124_48_1_1920.jpg" class="img-responsive" alt="About our programme - First World War 100">
										</div>
											<h3>First World War 100</h3>
											<p>We are marking the centenary of the war with an extensive programme, spanning a five-year period between 2014 and 2019.</p>
											<p>Find out more about our programme, which explores major anniversaries and key aspects of the war through themes such as technology and the Middle East.</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-4">
							<article>
								<div class="entry-header">
									<h2>What's on</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<div class="thumb-img">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/img/whatson-CAB-45_7_1914.jpg" class="img-responsive" alt="First World War 100 events calendar">
										</div>
										<h3>Events calendar</h3>
										<div id="event-list"></div>
										<ul class="child"><li><a href="http://www.eventbrite.co.uk/o/the-national-archives-2226699547" title="External website, The National Archives' Eventbrite page - link opens in a new window" target="_blank">More events</a></li></ul>
										<h3>Nationwide centenary activity</h3>
										<p>First World War centenary events will be taking place across the UK over the next four years.</p>
										<ul class="urls">
											<li><a href="https://www.gov.uk/government/topical-events/first-world-war-centenary" title="External website - link opens in a new window" target="_blank">Government commemoration plans</a></li>
											<li><a href="http://www.1914.org/partnership/" title="External website - link opens in a new window" target="_blank">First World War Centenary Partnership</a></li>
											<li><a href="http://www.1914.org/" title="External website - link opens in a new window" target="_blank">Events near you</a></li>
										</ul>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-4">
							<article>
								<div class="entry-header">
									<h2>Bookshop</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<div class="thumb-img">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/img/tnabookshop.jpg" class="img-responsive" alt="Visit The National Archives Bookshop at Kew">
										</div>
											<h3>Opening hours</h3>
											<p>Visit The National Archives Bookshop at Kew.<br>Open 09:00-17:00 Tuesday to Saturday.</p>
											<h4>First World War nurses</h4>
											<p>From the beginning of the First World War, a range of women volunteered as nurses working close to the front line. <a href="http://bookshop.nationalarchives.gov.uk/theme/WWInurses/">Read their stories</a>, touching, funny, and harrowing by turns.</p>
											<ul class="child"><li><a href="http://bookshop.nationalarchives.gov.uk/store/filtered/6/c_28/">Find more at our Bookshop</a></li></ul>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>
			</div>
		</main>
	</div>
<?php get_footer(); ?>