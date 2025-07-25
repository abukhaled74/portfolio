<?php require_once('head.php'); ?>
<div class="card-inner animated active" id="card-home">
	<div class="card-wrap">
		<div id="post-151" class="post-151 page type-page status-publish hentry">
			<div data-elementor-type="wp-page" data-elementor-id="151" class="elementor elementor-151">
			    <!-- about me -->
			
                <section class="elementor-section elementor-top-section elementor-element elementor-element-1368f2f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1368f2f" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d69b8b" data-id="8d69b8b" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-b939dc4 elementor-widget elementor-widget-ryancv-about-me" data-id="b939dc4" data-element_type="widget" data-widget_type="ryancv-about-me.default">
                					<div class="elementor-widget-container">
                					    <!-- About -->
                						<div class="content about">
                						    <!-- title -->
                							<div class="title"><span>About Me</span></div>
                							<!-- content -->
                							<div style="margin-top: 5px;" id="google_translate_element"></div>
                							<div class="row">
                								<div class="col col-d-6 col-t-12 col-m-12 border-line-v">
                									<div class="text-box">
                										<div>
                											<p>
                											    <strong>Hello! I’m <? echo ucwords($name) ?>. </strong>
                												<br />
                												<? echo $bio ?>
                											</p>
                										</div>
                									</div>
                								</div>
                								<div class="col col-d-6 col-t-12 col-m-12 border-line-v">
                									<div class="info-list">
                										<ul>
                											<li>
                    											<strong><span> Age: </span></strong>
                    											<span> <? echo $age ?> </span>
                											</li>
                											<li>
                											    <strong><span> Residence: </span></strong>
                											    <span> <? echo $ip ?> </span>
                											</li>
                											<!-- <li> 
                											    <strong> <span> Freelance: </span></strong>
                											    <span> Available </span>
                											</li> -->
                											<li>
                											    <strong> <span> Address: </span></strong>
                												<span><? echo $address ?></span>
                											</li>
                										</ul>
                									</div>
                								</div>
                								<div class="clear"></div>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-0452329 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0452329" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-07fff22" data-id="07fff22" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-24493e4 elementor-widget elementor-widget-ryancv-clients" data-id="24493e4" data-element_type="widget" data-widget_type="ryancv-clients.default">
                					<div class="elementor-widget-container">
                					    <!-- Clients -->
                						<div class="content clients">
                						    <!-- title -->
                							<div class="title"><span>Clients</span></div>
                							<!-- content -->
                							<div class="row client-items" style="margin: 5px;">
                							    <!-- client item -->
                								<img src="<? echo 'admin/' . $img_clients_path ?>">
                								<div class="clear"></div>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-49a456d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="49a456d" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48066de" data-id="48066de" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-32a9446 elementor-widget elementor-widget-ryancv-testimonials" data-id="32a9446" data-element_type="widget" data-widget_type="ryancv-testimonials.default">
                					<div class="elementor-widget-container">
                					    <!-- Testimonials -->
                						<div class="content testimonials">
                						    <!-- title -->
                							<div class="title"><span>Testimonials</span></div>
                							<!-- content -->
                							<div class="row testimonial-items">
                								<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                									<div class="revs-carousel ">
                										<div class="swiper-container" data-swiper-autoplay="0" data-swiper-delay="5000" data-swiper-loop="0">
                											<div class="swiper-wrapper">
                											    <?php 
                											    
                											    $query = mysqli_query($conn, "SELECT * FROM `opinion` ORDER BY id DESC LIMIT 10000");
                											    while ($row = mysqli_fetch_assoc($query)) {
                											        
                											        $nameOpinion = $row['name'];
                											        $workOpinion = $row['work'];
                											        $opinion = $row['opinion'];
                											        $imgOpinion = $row['img_opinion_path'];
                											        
                											        if (empty($imgOpinion)) {
                											            $imgOpinion = 'admin/pages/upload/default.png';
                											        } else {
                											            $imgOpinion = 'admin/' . $imgOpinion;
                											        }
                											    ?>
                												<div class="swiper-slide">
                													<div class="revs-item">
                														<div class="text">
                															<div><? echo $opinion ?></div>
                														</div>
                														<div class="user">
                															<div class="img"> <noscript><img
                																		decoding="async"
                																		src="<? echo $imgOpinion ?>"
                																		alt="<? echo $nameOpinion ?>" /></noscript><img
                																	class="lazyload"
                																	decoding="async"
                																	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                																	data-src="<? echo $imgOpinion ?>"
                																	alt="<? echo $nameOpinion ?>" />
                															</div>
                															<div class="info">
                																<div class="name">
                																    <span><? echo $nameOpinion ?> </span>
                																</div>
                																<div class="company">
                																    <span><? echo $workOpinion ?> </span>
                																</div>
                															</div>
                															<div class="clear"></div>
                														</div>
                													</div>
                												</div>
                												<? } ?>
                											</div>
                										</div>
                										<div class="swiper-pagination"></div>
                									</div>
                								</div>
                								<div class="clear"></div>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
            </div>
	    </div>
	    <!-- #post-151 -->
    </div>
</div>
<?php require_once('foot.php'); ?>