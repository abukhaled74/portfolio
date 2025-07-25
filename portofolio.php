<?php require_once('head.php'); ?>
<div class="card-inner animated active" id="card-home">
	<div class="card-wrap">
		<div id="post-151" class="post-151 page type-page status-publish hentry">
			<div data-elementor-type="wp-page" data-elementor-id="151" class="elementor elementor-151">
			    <!-- about me -->
			
                <section class="elementor-section elementor-top-section elementor-element elementor-element-484379f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="484379f" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f31adcd" data-id="f31adcd" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-91b90f8 elementor-widget elementor-widget-ryancv-portfolio" data-id="91b90f8" data-element_type="widget" data-widget_type="ryancv-portfolio.default">
                					<div class="elementor-widget-container"> <!-- Works -->
                						<div class="content works-grid works "> <!-- title -->
                							<div class="title"> <span>Works</span></div> <!-- filters -->
                							<div style="margin-top: 5px;" id="google_translate_element"></div>
                    							<div class="filter-menu filter-button-group">
                    								<div class="f_btn active">
                    								    <label><input type="radio" name="fl_radio" value=".grid-item" />All</label>
                    								</div>
                    								<? if ($get_potfolio_followers > 0) { ?>
                    								<div class="f_btn">
                    								    <label><input type="radio" name="fl_radio" data-cat-id="30" value=".f-followers" />Followers</label>
                    								</div>
                    								<? } ?>
                    								<? if ($get_potfolio_videos > 0) { ?>
                    								<div class="f_btn">
                    								    <label><input type="radio" name="fl_radio" data-cat-id="29" value=".f-video" />Videos</label>
                    								</div>
                    								<? } ?>
                    								<? if ($get_potfolio_logo > 0) { ?>
                    								<div class="f_btn"> 
                    								    <label><input type="radio" name="fl_radio" data-cat-id="28" value=".f-logo" />Logo</label>
                    								</div>
                    								<? } ?>
                    								<? if ($get_potfolio_design > 0) { ?>
                    								<div class="f_btn">
                    								    <label><input type="radio" name="fl_radio" data-cat-id="27" value=".f-design" />Design</label>
                    								</div>
                    								<? } ?>
                    								<? if ($get_potfolio_advertising > 0) { ?>
                    								<div class="f_btn">
                    								    <label><input type="radio" name="fl_radio" data-cat-id="24" value=".f-advertising" />Advertising</label>
                    								</div>
                    								<? } ?>
                    							</div>
                							    <!-- content -->
                							    <div class="row grid-items border-line-v columns-2">
                							    
                    								<!-- work item -->
                    								<? if ($get_potfolio_followers > 0) { ?>
                    								<?php 
                    							    $query = "SELECT * FROM `portfolio` WHERE type = 'followers' ORDER BY id DESC LIMIT 10000";
                                        		    $result = mysqli_query($conn, $query);
                                        		    
                                        		    while ($followers = mysqli_fetch_assoc($result)) {
                                        		        
                                        		        $img = 'admin/'.$followers['img_portfolio_path'];
                                        		        $type = $followers['type'];
                    							    ?>
                    								<div class="col col-d-6 col-t-6 col-m-12 border-line-h grid-item f-followers ">
                    									<div class="box-item">
                    										<div class="image">
                    										    <a href="<? echo $img ?>" data-fancybox="media">
                    												<img width="1200" height="1029" src='' data-src="<? echo $img ?>" class="lazyload attachment-ryancv_600xauto size-ryancv_600xauto wp-post-image" />
                    												<span class="info"> 
                    												    <span class="ion fas fa-image"></span>
                    												</span> 
                    											</a>
                    										</div>
                    										<div class="desc"> 
                    										<a href="javascript:;" class="name"><? echo ucwords($type) ?></a>
                    											<div class="category">Image</div>
                    										</div>
                    									</div>
                    								</div>
                    								<? } } ?>
                    								<!-- end work item -->
                    								
                    								
                    								<!-- work item -->
                    								<? if ($get_potfolio_videos > 0) { ?>
                    								<?php 
                    							    $query = "SELECT * FROM `portfolio` WHERE type = 'videos' ORDER BY id DESC LIMIT 10000";
                                        		    $result = mysqli_query($conn, $query);
                                        		    
                                        		    while ($row = mysqli_fetch_assoc($result)) {
                                        		        
                                        		        $video_link = $row['video_link'];
                                        		        $img = $row['img_portfolio_path'];
                                        		        $type = $row['type'];
                                        		        
                                        		        if (!empty($video_link)) {
                                        		            
                                        		            // Extract the video ID using regular expressions
                                                            $pattern = '/(?:https?:\/\/(?:www\.)?youtube\.com\/(?:watch\?.*v=|embed\/|v\/|youtu\.be\/|\/v\/|\/embed\/))([^\?&\"\'>]+)/i';
                                                            if (strstr($video_link, 'watch') != true) {
                                                              // Regular expression pattern to match YouTube video links and extract the video ID
                                                              $pattern = '/(?:https?:\/\/(?:www\.)?youtube\.com\/(?:watch\?.*v=|embed\/|v\/))|youtu\.be\/([^\?&\"\'>]+)/i';
                                                            }
                                                            preg_match($pattern, $video_link, $matches);
                                                            $videoId = $matches[1];
                                        		            
                                        		            $img = "https://img.youtube.com/vi/$videoId/0.jpg";
                                        		        }
                                        		    ?>
                    								<div class="col col-d-6 col-t-6 col-m-12 border-line-h grid-item f-video ">
                    									<div class="box-item">
                    										<div class="image"> 
                    										    <a href="<? echo $video_link ?>" data-fancybox="videos" data-elementor-lightbox-title="Unicode Web App" data-elementor-lightbox-slideshow="gallery-75">
                    												<img width="1200" height="800" src='' data-src="<? echo $img ?>" class="lazyload attachment-ryancv_600xauto size-ryancv_600xauto wp-post-image" />
                    													
                    												<span class="info">
                    												    <span class="ion fas fa-video"></span>
                    												</span>
                    										    </a>
                    										</div>
                    										<div class="desc"> <a
                    												href="https://ryancv.bslthemes.com/developer/portfolio-archive/unicode-web-app/"
                    												class="name"><? echo ucwords($type) ?></a>
                    											<div class="category">Video</div>
                    										</div>
                    									</div>
                    								</div>
                    								<? } } ?>
                    								<!-- end work item -->
                    								
                    								<!-- work item -->
                    								<? if ($get_potfolio_logo > 0) { ?>
                                                    <?php 
                    							    $query = "SELECT * FROM `portfolio` WHERE type = 'logo' ORDER BY id DESC LIMIT 10000";
                                        		    $result = mysqli_query($conn, $query);
                                        		    
                                        		    while ($row = mysqli_fetch_assoc($result)) {
                                        		        
                                        		        $img = 'admin/'.$row['img_portfolio_path'];
                                        		        $type = $row['type'];
                    							    ?>
                    								<div class="col col-d-6 col-t-6 col-m-12 border-line-h grid-item f-logo ">
                    									<div class="box-item">
                    										<div class="image">
                    										    <a href="<? echo $img ?>" data-fancybox="media">
                    												<img width="1200" height="1029" src='' data-src="<? echo $img ?>" class="lazyload attachment-ryancv_600xauto size-ryancv_600xauto wp-post-image" />
                    												<span class="info"> 
                    												    <span class="ion fas fa-image"></span>
                    												</span> 
                    											</a>
                    											</div>
                    										<div class="desc"> 
                    										<a href="javascript:;" class="name"><? echo ucwords($type) ?></a>
                    											<div class="category">Image</div>
                    										</div>
                    									</div>
                    								</div>
                    								<? } } ?>
                    								<!-- end work item -->
                    								
                    								<!-- work item -->
                    								<? if ($get_potfolio_design > 0) { ?>
                                                    <?php 
                    							    $query = "SELECT * FROM `portfolio` WHERE type = 'design' ORDER BY id DESC LIMIT 10000";
                                        		    $result = mysqli_query($conn, $query);
                                        		    
                                        		    while ($row = mysqli_fetch_assoc($result)) {
                                        		        
                                        		        $img = 'admin/'.$row['img_portfolio_path'];
                                        		        $type = $row['type'];
                    							    ?>
                    								<div class="col col-d-6 col-t-6 col-m-12 border-line-h grid-item f-design">
                    									<div class="box-item">
                    										<div class="image">
                    										    <a href="<? echo $img ?>" data-fancybox="media">
                    												<img width="1200" height="1029" src='' data-src="<? echo $img ?>" class="lazyload attachment-ryancv_600xauto size-ryancv_600xauto wp-post-image" />
                    												<span class="info"> 
                    												    <span class="ion fas fa-image"></span>
                    												</span> 
                    											</a>
                    											</div>
                    										<div class="desc"> 
                    										<a href="javascript:;" class="name"><? echo ucwords($type) ?></a>
                    											<div class="category">Image</div>
                    										</div>
                    									</div>
                    								</div>
                    								<? } } ?>
                    								<!-- end work item -->
                    								
                    								<!-- work item -->
                    								<? if ($get_potfolio_advertising > 0) { ?>
                                                    <?php 
                    							    $query = "SELECT * FROM `portfolio` WHERE type = 'advertising' ORDER BY id DESC LIMIT 10000";
                                        		    $result = mysqli_query($conn, $query);
                                        		    
                                        		    while ($row = mysqli_fetch_assoc($result)) {
                                        		        
                                        		        $img = 'admin/'.$row['img_portfolio_path'];
                                        		        $type = $row['type'];
                    							    ?>
                    								<div class="col col-d-6 col-t-6 col-m-12 border-line-h grid-item f-advertising">
                    									<div class="box-item">
                    										<div class="image">
                    										    <a href="<? echo $img ?>" data-fancybox="media">
                    												<img width="1200" height="1029" src='' data-src="<? echo $img ?>" class="lazyload attachment-ryancv_600xauto size-ryancv_600xauto wp-post-image" />
                    												<span class="info"> 
                    												    <span class="ion fas fa-image"></span>
                    												</span> 
                    											</a>
                    											</div>
                    										<div class="desc"> 
                    										<a href="javascript:;" class="name"><? echo ucwords($type) ?></a>
                    											<div class="category">Image</div>
                    										</div>
                    									</div>
                    								</div>
                    								<? } } ?>
                    								<!-- end work item -->
                								
                								<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                                                <script>
                                                    $('[data-fancybox="media"]').fancybox({
                                                        buttons: [
                                                            "zoom",
                                                            "slideShow",
                                                            "fullScreen",
                                                            "thumbs",
                                                            "close"
                                                        ],
                                                        loop: true,
                                                        transitionEffect: "slide",
                                                        transitionDuration: 500,
                                                        animationEffect: "fade",
                                                        animationDuration: 500,
                                                        toolbar: true,
                                                        arrows: true,
                                                        keyboard: true
                                                    });
                                                </script>
                								
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