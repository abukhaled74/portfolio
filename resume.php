<?php 
require_once('head.php');
include("variables.php");
?>
<div class="card-inner animated active" id="card-home">
	<div class="card-wrap">
		<div id="post-151" class="post-151 page type-page status-publish hentry">
			<div data-elementor-type="wp-page" data-elementor-id="151" class="elementor elementor-151">
			    <!-- about me -->
			
                <section class="elementor-section elementor-top-section elementor-element elementor-element-59895bb elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="59895bb" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be20ba8" data-id="be20ba8" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-26b97d8 elementor-widget elementor-widget-ryancv-custom-text" data-id="26b97d8" data-element_type="widget" data-widget_type="ryancv-custom-text.default">
                					<div class="elementor-widget-container">
                					    <!-- Custom Text -->
                						<div class="content custom-text">
                						    <!-- title -->
                							<div class="title"><span>Resume</span></div>
                							<div style="margin-top: 5px;" id="google_translate_element"></div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2926877 elementor-section-full_width row elementor-section-height-default elementor-section-height-default" data-id="2926877" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                	    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-845c1d0 col border-line-v" data-id="845c1d0" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-a64937a elementor-widget elementor-widget-ryancv-resume" data-id="a64937a" data-element_type="widget" data-widget_type="ryancv-resume.default">
                					<div class="elementor-widget-container">
                					    <!-- resume item -->
                						<div class="resume-item">
                							<div class="resume-title border-line-h">
                								<div class="icon"><i aria-hidden="true" class="fas fa-university"></i></div>
                								<div class="name"><span>Education</span></div>
                							</div>
                							<div class="resume-items">
                								<div class="resume-item border-line-h ">
                									<div class="date">
                									    <span><? echo $form_to_year ?></span>
                									</div>
                									<div class="name">
                									    <span><? echo $nameUniversity ?></span>
                									</div>
                									<div class="company">
                									    <span><? echo $city ?></span>
                									</div>
                									<div class="single-post-text">
                										<div>
                											<p><? echo $holds ?></p>
                										</div>
                									</div>
                								</div>
                								
                								<!-- <div class="resume-item border-line-h ">
                								    <div class="date">
                								        <span> 2005 - 2006 </span>
                								    </div>
                								    <div class="name">
                								        <span> Content Creator Course</span>
                								    </div>
                								    <div class="company">
                								        <span> Paris </span>
                								    </div>
                								    <div class="single-post-text">
                								        <div>
                								            <p>
                								                Content Creation learn: Content Writing,
                								                Copywriting, Social Media, Management,
                								                YouTube Audience, Instagram Marketing.
                								            </p>
                								        </div>
                								    </div>
                								    <a href="import/ryancv/streamer/uploads/2022/07/certificate.jpg" class="lnk lnk-2">
                								        <span class="text"> Certificate</span>
                								        <i class="fas fa-angle-right"></i>
                								    </a>
                								</div> -->
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-24104fa col" data-id="24104fa" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-a38a935 elementor-widget elementor-widget-ryancv-resume" data-id="a38a935" data-element_type="widget" data-widget_type="ryancv-resume.default">
                					<div class="elementor-widget-container">
                					    <!-- resume item -->
                						<div class="resume-item">
                							<div class="resume-title border-line-h">
                								<div class="icon">
                								    <i aria-hidden="true" class="fas fa-address-book"></i>
                								</div>
                								<div class="name">
                								    <span>vision & mission</span>
                								</div>
                							</div>
                							<div class="resume-items">
                								<div class="resume-item border-line-h active">
                									<!-- <div class="image"> <noscript><img decoding="async"
                									            src="import/ryancv/streamer/uploads/2022/07/brand4.png"
                									            alt="Streamer" /></noscript><img class="lazyload" decoding="async"
                									        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                									        data-src="import/ryancv/streamer/uploads/2022/07/brand4.png"
                									        alt="Streamer" /></div> -->
                									<div class="date">
                									    <span><? echo $form_to_year ?></span>
                									</div>
                									<div class="name">
                									    <span><? echo $nameTitle ?></span>
                									</div>
                									<div class="company">
                									    <span><? echo $city2 ?></span>
                									</div>
                									<div class="single-post-text">
                										<div>
                											<p><? echo $vision ?></p>
                										</div>
                									</div>
                								</div>
                								<!-- <div class="resume-item border-line-h active">
                								    <div class="image"> <noscript><img decoding="async"
                								                src="import/ryancv/streamer/uploads/2022/07/brand7.png"
                								                alt="Youtube Blogger" /></noscript><img class="lazyload"
                								            decoding="async"
                								            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                								            data-src="import/ryancv/streamer/uploads/2022/07/brand7.png"
                								            alt="Youtube Blogger" /></div>
                								    <div class="date"> <span> 2011 - Present </span></div>
                								    <div class="name"> <span> Youtube Blogger </span></div>
                								    <div class="company"> <span> Google Inc. </span></div>
                								    <div class="single-post-text">
                								        <div>
                								            <p>Develop original content through social
                								                listening and youtube.</p>
                								        </div>
                								    </div>
                								</div>
                								<div class="resume-item border-line-h ">
                								    <div class="image"> <noscript><img decoding="async"
                								                src="import/ryancv/streamer/uploads/2022/07/brand2_w.png"
                								                alt="Senior Streamer" /></noscript><img class="lazyload"
                								            decoding="async"
                								            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                								            data-src="import/ryancv/streamer/uploads/2022/07/brand2_w.png"
                								            alt="Senior Streamer" /></div>
                								    <div class="date"> <span> 2009 - 2010 </span></div>
                								    <div class="name"> <span> Senior Streamer </span></div>
                								    <div class="company"> <span> Upwork Inc. </span></div>
                								    <div class="single-post-text">
                								        <div>
                								            <p>Designed videos to promote company events and
                								                news.</p>
                								        </div>
                								    </div>
                								</div> -->
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                		
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-0631c8a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0631c8a" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-573fdc8" data-id="573fdc8" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-3952aad elementor-widget elementor-widget-spacer" data-id="3952aad" data-element_type="widget" data-widget_type="spacer.default">
                					<div class="elementor-widget-container">
                						<style>
                							/*! elementor - v3.12.2 - 23-04-2023 */
                							.elementor-column .elementor-spacer-inner {
                								height: var(--spacer-size)
                							}
                
                							.e-con {
                								--container-widget-width: 100%
                							}
                
                							.e-con-inner>.elementor-widget-spacer,
                							.e-con>.elementor-widget-spacer {
                								width: var(--container-widget-width, var(--spacer-size));
                								--align-self: var(--container-widget-align-self, initial);
                								--flex-shrink: 0
                							}
                
                							.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                							.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                							.e-con>.elementor-widget-spacer>.elementor-widget-container,
                							.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                								height: 100%
                							}
                
                							.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                							.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                								height: var(--container-widget-height, var(--spacer-size))
                							}
                						</style>
                						<div class="elementor-spacer">
                							<div class="elementor-spacer-inner"></div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-deefe3f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="deefe3f" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ec419d" data-id="8ec419d" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-cae1473 elementor-widget elementor-widget-ryancv-custom-text" data-id="cae1473" data-element_type="widget" data-widget_type="ryancv-custom-text.default">
                					<div class="elementor-widget-container">
                					    <!-- Custom Text -->
                						<div class="content custom-text">
                						    <!-- title -->
                							<div class="title"><span><? echo strtoupper('Services')?></span></div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-77e9f37 elementor-section-full_width row elementor-section-height-default elementor-section-height-default" data-id="77e9f37" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-552e9ac col" data-id="552e9ac" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-2808be1 elementor-widget elementor-widget-ryancv-skills" data-id="2808be1" data-element_type="widget" data-widget_type="ryancv-skills.default">
                					<div class="elementor-widget-container"> <!-- skill item -->
                						<div class="skills-item">
                							<div class="skills-list percent">
                								<div class="skill-title border-line-h">
                									<div class="icon">
                									    <i aria-hidden="true" class="fas fa-tv"></i>
                									</div>
                									<div class="name">
                									    <span>E-Marketing Services</span>
                									</div>
                								</div>
                								<ul>
                								    <?php 
                								    $query = mysqli_query($conn, "SELECT * FROM `skills` WHERE type = 'SERVICES'");
                								    while ($row = mysqli_fetch_assoc($query)) {
                								        $sk_name = $row['sk_serv'];
                								        $Percentage = $row['Percentage1'];
                								    ?>
                									<li class="border-line-h">
                										<div class="name">
                										    <span><? echo ucwords($sk_name) ?></span>
                										</div>
                										<div class="progress ">
                											<div class="percentage" style="width:<? echo $Percentage ?>%;"></div>
                										</div>
                									</li>
                									<? } ?>
                								</ul>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9170935 col border-line-v" data-id="9170935" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-7b18142 elementor-widget elementor-widget-ryancv-skills" data-id="7b18142" data-element_type="widget" data-widget_type="ryancv-skills.default">
                					<div class="elementor-widget-container">
                					    <!-- skill item -->
                						<div class="skills-item">
                							<div class="skills-list list">
                								<div class="skill-title border-line-h">
                									<div class="icon">
                									    <i aria-hidden="true" class="fas fa-list"></i>
                									</div>
                									<div class="name">
                									    <span>Design & other services</span>
                									</div>
                								</div>
                								<ul>
                								    <?php 
                								    $query = mysqli_query($conn, "SELECT * FROM `skills` WHERE type = 'DESIGN'");
                								    while ($row = mysqli_fetch_assoc($query)) {
                								        $sk_name = $row['sk_serv'];
                								    ?>
                									<li class="border-line-h">
                										<div class="name">
                										    <span><? echo ucwords($sk_name) ?></span>
                										</div>
                										<div class="progress ">
                											<div class="percentage"></div>
                										</div>
                									</li>
                									<? } ?>
                								</ul>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </section>
                
                <section class="elementor-section elementor-top-section elementor-element elementor-element-f74ec84 elementor-section-full_width row elementor-section-height-default elementor-section-height-default" data-id="f74ec84" data-element_type="section">
                	<div class="elementor-container elementor-column-gap-no">
                		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c60c53c col" data-id="c60c53c" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-fd65c59 elementor-widget elementor-widget-ryancv-skills" data-id="fd65c59" data-element_type="widget" data-widget_type="ryancv-skills.default">
                					<div class="elementor-widget-container">
                					    <!-- skill item -->
                						<div class="skills-item">
                							<div class="skills-list circles">
                								<div class="skill-title border-line-h">
                									<div class="icon">
                									    <i aria-hidden="true" class="fab fa-steam-symbol"></i>
                									</div>
                									<div class="name">
                									    <span>Skills</span>
                									</div>
                								</div>
                								<ul>
                								    <?php 
                								    $query = mysqli_query($conn, "SELECT * FROM `skills` WHERE type = 'SOFTWARE'");
                								    while ($row = mysqli_fetch_assoc($query)) {
                								        $sk_name = $row['sk_serv'];
                								        $Percentage = $row['Percentage1'];
                								    ?>
                									<li class="border-line-h">
                										<div class="name">
                										    <span><? echo ucwords($sk_name) ?></span>
                										</div>
                										<div class="progress p90">
                											<div class="percentage" style="width:<? echo $Percentage ?>%;"></div>
                											<span><? echo $Percentage ?>%</span>
                										</div>
                									</li>
                									<? } ?>
                								</ul>
                							</div>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
                		
                		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3238565 col border-line-v" data-id="3238565" data-element_type="column">
                			<div class="elementor-widget-wrap elementor-element-populated">
                				<div class="elementor-element elementor-element-af7804b elementor-widget elementor-widget-ryancv-skills" data-id="af7804b" data-element_type="widget" data-widget_type="ryancv-skills.default">
                					<div class="elementor-widget-container"> <!-- skill item -->
                						<div class="skills-item">
                							<div class="skills-list dotted">
                								<div class="skill-title border-line-h">
                									<div class="icon">
                									    <i aria-hidden="true" class="fas fa-flag"></i>
                									 </div>
                									<div class="name">
                									    <span>Languages</span>
                									</div>
                								</div>
                								<ul>
                								    <?php 
                								    $query = mysqli_query($conn, "SELECT * FROM `skills` WHERE type = 'LANGUAGE'");
                								    while ($row = mysqli_fetch_assoc($query)) {
                								        $sk_name = $row['sk_serv'];
                								        $Percentage = $row['Percentage1'];
                								    ?>
                									<li class="border-line-h">
                										<div class="name">
                										    <span><? echo ucwords($sk_name) ?></span>
                										</div>
                										<div class="progress ">
                											<div class="percentage" style="width:<? echo $Percentage ?>0%;"></div>
                										</div>
                									</li>
                									<? } ?>
                								</ul>
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