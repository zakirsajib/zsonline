<?php
	/*Template Name: Home*/
	get_header();?>


    <!-- PROFILE SECTION START -->
    <section id="profile" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7 match-height">

                        <!-- PROFILE TEXT START -->
                        <div class="profile-text padding-right-yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="section-title">Hello, My Name is Zakir.</h2>

                                    <p>
                                        Zakir Sajib, 34 years young, husband and father, coffee addict. Highly motivated creative developer with international client portfolio.
                                    </p>

                                    <span class="divider"></span>

                                    <p class="text-grey">
                                        In the early days of my career I worked in several agencies in London, ranging from website development to online marketing agencies. This allowed me to work with several large brands around London.I currently work as a freelancer, and I spend most of my time crafting and working on awesome projects.
                                    </p>

                                    <p class="text-grey">
                                        I am highly creative, organized and self-motivated. I work extremely fast and deliver fast. I am proficient with WordPress, SASS and Javascript. I am extremely okay working alone or with interdisciplinary teams. My local development environment is setup like: <a href="https://atom.io/" target="_blank">Atom</a>, <a href="http://underscores.me/" target="_blank">underscores theme</a>, <a href="http://zakirsajibonline.com/wp-content/themes/zsonline/package.json" target="_blank">package.json</a>, <a href="https://git-scm.com/" target="_blank">git</a> and <a href="https://www.vagrantup.com/" target="_blank">vagrant</a>.
                                    </p>

                                    <p class="text-grey">
	                                    My core competency lies in complete end to end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business.
                                    </p>
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->
                        </div>
                        <!-- //PROFILE TEXT END -->

                        <!-- CONTACT DETAILS START -->
                        <div class="contact-details padding-right-yes">
                            <div class="row">
                                <div class="col-sm-6 col-md-7">
                                    <a href="http://www.upwork.com/o/profiles/users/_~0173a11de60c8f353e/" target="_blank" class="btn btn-lg btn-custom">
                                        <i class="icon-Profile"></i> Upwork Profile
                                    </a>
                                </div>
                                <!-- //.col-md-6 -->
                            </div>
                            <!-- //.row -->
                        </div>
                        <!-- //CONTACT DETAILS END -->

                    </div>
                    <!-- //.col-md-7 -->

                    <!-- PROFILE PICTURE START -->
                    <div class="col-md-5 hidden-xs hidden-sm match-height pp-wrapper">
                        <div class="profile-picture style-two">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/zs-profile-pic.jpg" alt="profile picture" class="img-responsive"/>
                            <h4 class="title">Full Stack WordPress Developer</h4>
                        </div>
                    </div>
                    <!-- //PROFILE PICTURE END -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //PROFILE SECTION END -->


    <!-- PORTFOLIO SECTION START -->
    <section id="portfolio" class="section">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">My Latest Work</h2>

                        <p class="section-subtitle">I've built WordPress sites for some of the biggest names in online marketing AND everyday people like you and me.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">
                        <ul class="filterable-portfolio-nav list-inline text-center">
                            <li class="active">
                                <a href="#" data-filter="*" class="btn btn-sm btn-custom disabled">All</a>
                            </li>


                            <li class="">
                                <a href="#" data-filter=".brand" class="btn btn-sm btn-custom">Brand</a>
                            </li>



                            <li class="">
                                <a href="#" data-filter=".ecommerce" class="btn btn-sm btn-custom">E-Commerce</a>
                            </li>
                            <li class="">
                                <a href="#" data-filter=".aviation" class="btn btn-sm btn-custom">Aviation</a>
                            </li>

                            <li class="">
                                <a href="#" data-filter=".constructions" class="btn btn-sm btn-custom">Constructions</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <!-- PORTFOLIO START -->
                <div class="portfolio">
                    <div class="row filterable-portfolio">
                        <div class="item brand col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/angelfish.jpg" class="zoom" title="Angelfish Marketing">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://angelfish-marketing.com/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Angelfish Marketing</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/angelfish.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item aviation col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/easton.jpg" class="zoom" title="Easton/Newham Field Airport">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://eastonairport.com/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Easton/Newham Field Airport</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/easton.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item brand col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/startupbritain.jpg" class="zoom" title="StartUp Britain">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://startupbritain.org/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>StartUp Britain</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/startupbritain.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item brand col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/cfe.jpg" class="zoom" title="Centre for Entrepreneurs">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://centreforentrepreneurs.org/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Centre for Entrepreneurs</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/cfe.jpg" alt="Centre for Entrepreneurs" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->


                        <div class="item ecommerce col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/udendoerslamper.jpg" class="zoom" title="Udendoer Slamper">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://www.udendoerslamper.dk/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Udendoer Slamper</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/udendoerslamper.jpg" alt="Udendoer Slamper" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->



                        <div class="item ecommerce col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/crafty-kits.jpg" class="zoom" title="Cratfy-Kits">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://crafty-kits.com/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Cratfy-Kits</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/crafty-kits.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item constructions col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/superb.jpg" class="zoom" title="SupErb Construction Ltd">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://www.superbconstruction.net/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>SupErb Construction Ltd</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/superb.jpg" alt="" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item aviation col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/laporte.jpg" class="zoom" title="Laporte Municipal Airport">
                                        <i class="icon-Full-Screen"></i>
                                    </a>

                                    <a href="http://laporteairport.com/" target="_blank" class="external-link">
                                        <i class="icon-Link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Laporte Municipal Airport</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/laporte.jpg" alt="Laporte Municipal Airport" class="img-responsive"/>
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- PORTFOLIO END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container-fluid -->
    </section>
    <!-- //PORTFOLIO SECTION END -->


    <!-- SERVICES SECTION START -->
    <section id="services" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">What I'm Doing</h2>

                        <p class="section-subtitle">
                            I love what I do. I take great pride in what I do. And I can't do something halfway, three-quarters, nine-tenths. If I'm going to do something, I go all the way.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- SERVICES START -->
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                            <div class="inner-content">
                                <i class="icon-Monitor-Tablet colored-text"></i>

                                <h4>1. Web Development</h4>

                                <p class="text-grey">
                                    Building complex, responsive websites, is my core business. Powered by open source Content Management Systems such as WordPress.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item top match-height">
                            <div class="inner-content">
                                <i class="icon-Leafs-2 colored-text"></i>

                                <h4>2. Digital Strategy</h4>

                                <p class="text-grey">
                                    Specialists in designing interfaces for websites, intranets, portals and online platforms. They integrate neatly and seamlessly to your backend, whatever the platform.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                            <div class="inner-content">
                                <i class=" icon-Transform-2 colored-text"></i>

                                <h4>3. Web Design</h4>

                                <p class="text-grey">
                                    Specialists in designing interfaces for websites, intranets, portals and online platforms. They integrate neatly and seamlessly to your backend, whatever the platform.</p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item match-height">
                            <div class="inner-content">
                                <i class="icon-Speach-Bubble3 colored-text"></i>

                                <h4>4. Mobile Ready</h4>

                                <p class="text-grey">
                                    40% of all internet searches are done from a mobile device. What does this mean in terms of developing a new website?
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item dark-bg match-height">
                            <div class="inner-content">
                                <i class="icon-Chess colored-text"></i>

                                <h4>5. Search Engine Optimization</h4>

                                <p class="text-grey">
                                    Search Engine Optimization is as important as building your site correctly. It's the steps and levels of thought, copywriting and strategy.</p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item match-height">
                            <div class="inner-content">
                                <i class="icon-Consulting colored-text"></i>

                                <h4>6. Consulting</h4>

                                <p class="text-grey">
                                    I will liaise directly with your existing web developers, or IT department, or can also educate and train you or your staff on how to get the most out of your website.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //SERVICES END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //SERVICES SECTION END -->


    <!-- STRENGTHS SECTION START -->
    <section id="strengths" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">My Strengths</h2>

                        <p class="section-subtitle">Failure will never overtake me if my determination to succeed is strong enough.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">

                        <!-- COLUMN CHART START -->
                        <div class="column-chart">
                            <div class="legend legend-left hidden-xs">
                                <h3 class="legend-title">ME</h3>
                            </div>
                            <!-- //.legend -->

                            <div class="legend legend-right hidden-xs">
                                <div class="item">
                                    <h4>Superhero</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Pretty Good</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Good</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Newbie</h4>
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.legend -->

                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">92%</span>

                                        <div class="item-progress" data-percent="92">
                                            <span class="title">Creativity</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">91%</span>

                                        <div class="item-progress" data-percent="91">
                                            <span class="title">Reliable</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">82%</span>

                                        <div class="item-progress" data-percent="82">
                                            <span class="title">Communication</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">58%</span>

                                        <div class="item-progress" data-percent="58">
                                            <span class="title">Leadership</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">67%</span>

                                        <div class="item-progress" data-percent="67">
                                            <span class="title">Persuasion</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.chart -->
                        </div>
                        <!-- //COLUMN CHART END -->

                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //STRENGTHS SECTION END -->


 <!-- price SECTION START -->
    <section id="price" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Here's How I Can Help You</h2>

                        <p class="section-subtitle">Here's the services I offer to help you get your site built and putting cash in your pocket.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

				<div class="pricing-tables">
               		<div class="row">
			         	<div class="col-sm-4 col-md-4">
				           	<div class="plan">
				              	<div class="head">
				               		<h3>Site Analysis</h3>
				              	</div>

					              <ul class="item-list">
					                   <li>In-depth technical analysis</li>
					                   <li>Full PDF report</li>
					                   <li>2 - 1-hour phone consultations</li>
					              </ul>

					              <div class="price">
					                <h4><span class="symbol">$</span>500</h4>
					              </div>
				              <a href="#contact" class="btn btn-lg btn-custom">Request details</a>
				           </div>
				           <!-- //.plan -->
			          </div>
			          <!-- //.col-sm-4 col-md-4 -->

			          <div class="col-sm-4 col-md-4">
				           	<div class="plan">
				              	<div class="head">
				               		<h3>Custom Build</h3>
				              	</div>

					              <ul class="item-list">
					                   <li>Custom Theme Design</li>
					                   <li>Theme framework of your choice</li>
					                   <li>License to full source code</li>
					              </ul>

					              <div class="price">
					                <h4><span class="symbol">$</span>2500</h4>
					              </div>

				              <a href="#contact" class="btn btn-lg btn-custom">Request details</a>
				           </div>
				           <!-- //.plan -->
			          </div>
			          <!-- //.col-sm-4 col-md-4 -->

			          <div class="col-sm-4 col-md-4">
				           	<div class="plan">
				              	<div class="head">
				               		<h3>Clone</h3>
				              	</div>

					              <ul class="item-list">
					                   <li>Clone of an existing site</li>
					                   <li>Theme framework of your choice</li>
					                   <li>License to full source code</li>
					              </ul>

					              <div class="price">
					                <h4><span class="symbol">$</span>1500</h4>
					              </div>

				              <a href="#contact" class="btn btn-lg btn-custom">Request details</a>
				           </div>
				           <!-- //.plan -->
			          </div>
			          <!-- //.col-sm-4 col-md-4 -->

        			</div> <!-- row-->

			</div>  <!-- //.pricing-tables -->




            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //Price SECTION END -->





    <!-- RESUME SECTION START -->
    <section id="resume" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">My Resume</h2>

                        <p class="section-subtitle">
                            If you call failures experiments, you can put them in your resume and claim them as achievements.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- EDUCATION START -->
                <div class="row education">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>My Education</h3>

                        <div class="panel-group resume" id="education">
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2008 - 2009</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education1" data-toggle="collapse" data-parent="#education"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Masters Degree - University of Hertfordshire</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education1" class="panel-collapse collapse in">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Attended and successfully completed for post-graduate programme (180 credit) in Software Engineering. Chosen modules are Software development tools and methods, Measures and modeling for software engineering, Wireless, mobile & ad-hoc networking, Multimedia specification design and production, Software
Engineering practices and experiences. <strong>Dissertation topic : Adopting pair programming in software project: Issues and Tactics.</strong>
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //EDUCATION END -->

                <!-- WORK EXPERIENCE START -->
                <div class="row work-experience">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Work Experience</h3>
                        <div class="panel-group resume" id="work">
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2012 - Now</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work1" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Full Stack WordPress Developer - Upwork</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work1" class="panel-collapse collapse in">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Develop websites for various clients and markets.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2010 -  2011</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work2" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Freelance WordPress Developer - The Stage</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work2" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Mainly responsible to develop a new WordPress website called 'Events'.</p>
                                                <a href="http://www.thestage.co.uk" target="_blank">thestage.co.uk</a>

                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>

                            <!-- //.resume-item -->


							<div class="resume-item">
                                <div class="resume-btn">
                                    <a href="#work3" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Freelance WordPress Developer - Bandstand Ltd.</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work3" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Developed a job board website from scratch. </p>
                                                <a href="http://www.saffronresourcing.com" target="_blank">saffronresourcing.com</a>

                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

							<div class="resume-item">
                                <div class="resume-btn">
                                    <a href="#work4" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Freelance WordPress Developer - Diode Digital</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work4" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                I was responsible to develop the site from existing PSD. The challenging part was integrating JWPlayer API into wordpress platform.</p><a href="http://www.firecrackerfilms.com" target="_blank">firecrackerfilms.com</a>

                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

							<div class="resume-item">
                                <div class="resume-btn">
                                    <a href="#work5" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Freelance WordPress Developer - VCCP</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work5" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Worked in a busy web development team, responsible to develop a website for Microsoft advertising dm5.</p>

                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->



                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //WORK EXPERIENCE END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //RESUME SECTION END -->


    <!-- REFERENCES SECTION START -->
    <section id="references" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">References</h2>

                        <p class="section-subtitle">Testimonials are enough to convince people for now.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="flexslider references">
                            <div class="slides">
                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="http://zakirsajibonline.com/wp-content/uploads/2015/06/farnell-96x96.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>Karisma Graphics, LLC.</h3>

                                            <p>
                                                "I highly recommend Zakir!! He is top notch with his work, communication, and skill. He is always my first choice when I need something done. Thank you once again!!"
                                            </p>

                                            <p class="source">
                                                Andrew Farnell
                                                <br>
                                                <span>Project Coordinator</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="http://zakirsajibonline.com/wp-content/uploads/2015/06/angela-byers-3-96x96.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>Byers Creative</h3>

                                            <p>
                                                "Zakir is fast, accurate and can do about any type of WordPress site you need."
                                            </p>

                                            <p class="source">
                                                Angela Byers
                                                <br>
                                                <span>Principal / CEO</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="http://zakirsajibonline.com/wp-content/uploads/2015/06/cheryl_11-5-14_web-96x96.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>Cheryl Phillips Design</h3>

                                            <p>
                                                "I've worked with Zakir for over a year on various projects. He has been a great resource for support of my website design business. As a coder, I think he is the best I've worked with. He excels at complex coding."
                                            </p>

                                            <p class="source">
                                                Cheryl Phillips
                                                <br>
                                                <span>President</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="http://zakirsajibonline.com/wp-content/uploads/RolandMortimer.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>StartUp Britain</h3>

                                            <p>
                                                "This is the second time round I have worked with Zakir and yet again I am absolutely delighted his quality of work, communication and ability to execute ideas and suggestions. I very much look forward to working with Zakir again on future projects."
                                            </p>

                                            <p class="source">
                                                Roland Mortimer
                                                <br>
                                                <span>Research Assistant</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/references/profile-image-4.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>Dakar Liberman</h3>

                                            <p>
                                                "Well, Zakir has done perfect job. his knowledge is perfect, he pays attention for details and for pixel perfect. Never worked with a guy with no rejects, he works perfect"
                                            </p>

                                            <p class="source">
                                                Dakar Liberman
                                                <br>
                                                <span>President Director</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.slides -->

                            <div class="flexslider-controls">
                                <ul class="flex-control-nav">
                                    <li>
                                        <img src="http://zakirsajibonline.com/wp-content/uploads/2015/06/farnell-96x96.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="http://zakirsajibonline.com/wp-content/uploads/2015/06/angela-byers-3-96x96.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="http://zakirsajibonline.com/wp-content/uploads/2015/06/cheryl_11-5-14_web-96x96.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="http://zakirsajibonline.com/wp-content/uploads/RolandMortimer.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/references/profile-image-4.jpg" alt="" class="img-responsive"/>
                                    </li>
                                </ul>
                            </div>
                            <!-- //.flexslider-controls -->

                            <ul class="flex-direction-nav-custom list-inline hidden-xs">
                                <li>
                                    <a class="flex-prev" href="#">
                                        <i class="icon-Left-3"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="flex-next" href="#">
                                        <i class="icon-Right-3"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //.flexslider -->
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //REFERENCES SECTION END -->


    <!-- SKILLS SECTION START -->
    <section id="skills" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Skills & Expertise</h2>

                        <p class="section-subtitle">A winner is someone who recognizes his God-given talents, works his tail off to develop them into skills, and uses these skills to accomplish his goals.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- CIRCLE CHART START -->
                <div class="circle-chart">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="75"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">75%</span>

                                <h4 class="text-center">WordPress</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">65%</span>

                                <h4 class="text-center">PhP</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">55%</span>

                                <h4 class="text-center">WooCommerce</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="45"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">45%</span>

                                <h4 class="text-center">Photoshop</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">65%</span>

                                <h4 class="text-center">JavaScript</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item last">
                                <div class="circle">
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">55%</span>

                                <h4 class="text-center">Git</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //CIRCLE CHART END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //SKILLS SECTION END -->


    <!-- KNOWLEDGE SECTION START -->
    <section id="knowledge" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Knowledge</h2>

                        <p class="section-subtitle">Human behavior flows from three main sources: desire, emotion, and knowledge.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- BAR CHART START -->
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="bar-chart">
                            <div class="item">
                                <h4>Brand Marketing</h4>

                                <div class="bar">
                                    <span class="percent">45%</span>
                                    <span class="item-progress" data-percent="45"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>Web Development</h4>

                                <div class="bar">
                                    <span class="percent">65%</span>
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>Digital Strategy</h4>

                                <div class="bar">
                                    <span class="percent">55%</span>
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.bar-chart -->
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-sm-6 col-md-6">
                        <div class="bar-chart">
                            <div class="item">
                                <h4>Security</h4>

                                <div class="bar">
                                    <span class="percent">55%</span>
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>Internet Marketing</h4>

                                <div class="bar">
                                    <span class="percent">65%</span>
                                    <span class="item-progress" data-percent="65"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4>Mobile Ready</h4>

                                <div class="bar">
                                    <span class="percent">75%</span>
                                    <span class="item-progress" data-percent="75"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.bar-chart -->
                    </div>
                    <!-- //.col-md-6 -->
                </div>
                <!-- //BAR CHART END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->

    </section>
    <!-- //KNOWLEDGE SECTION END -->




    <!-- accolades SECTION START -->
    <section id="accolades" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">My Stats</h2>

                        <p class="section-subtitle">Based on statistics of <a href="http://www.upwork.com/o/profiles/users/_~0173a11de60c8f353e/" target="_blank">Upwork marketplace.</a></p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">

                        <!-- COLUMN CHART START -->
                        <div class="column-chart">
                            <div class="legend legend-left hidden-xs">
                                <h3 class="legend-title">ME</h3>
                            </div>
                            <!-- //.legend -->

                            <div class="legend legend-right hidden-xs">
                                <div class="item">
                                    <h4>Superhero</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Pretty Good</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Good</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Newbie</h4>
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.legend -->

                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">94%</span>

                                        <div class="item-progress" data-percent="94">
                                            <span class="title">Client Satisfaction</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">98.2%</span>

                                        <div class="item-progress" data-percent="98.2">
                                            <span class="title">Feedback</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">79%</span>

                                        <div class="item-progress" data-percent="79">
                                            <span class="title">Recommendation</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">100%</span>

                                        <div class="item-progress" data-percent="100">
                                            <span class="title">Response Time</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                            </div>
                            <!-- //.chart -->
                        </div>
                        <!-- //COLUMN CHART END -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //STRENGTHS SECTION END -->





    <!-- MILESTONES SECTION START -->
    <section id="milestones" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title">Milestones Achieved</h2>

                        <p class="section-subtitle">My path has not been determined. I shall have more experiences and pass many more milestones.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- MILESTONES START -->
                <div class="milestones">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="icon-Coffee"></i>
                            </div>
                            <!-- //.circle -->

                            <span class="number" data-from="10" data-to="5012" data-refresh-interval="100">
                                10
                            </span>

                            <h4>Cups of Coffee</h4>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="icon-Clock"></i>
                            </div>
                            <!-- //.circle -->

                            <span class="number" data-from="10" data-to="1590" data-refresh-interval="100">
                                10
                            </span>

                            <h4>Hours Worked</h4>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="icon-Coding"></i>
                            </div>
                            <!-- //.circle -->

                            <span class="number" data-from="10" data-to="148" data-refresh-interval="10">
                                10
                            </span>

                            <h4>Successful Projects</h4>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="icon-Smile"></i>
                            </div>
                            <!-- //.circle -->

                            <span class="number" data-from="10" data-to="50" data-refresh-interval="10">
                                5
                            </span>

                            <h4>Happy Clients</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //MILESTONES END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //MILESTONES SECTION END -->


    <!-- WORK PROCESS SECTION START -->
    <section id="work-process" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Work Process</h2>

                        <p class="section-subtitle">
                            As a human being, I'm work in process.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">
                        <p class="text-grey text-justify">
                            Similar to the traditional software development process, the website development life-cycle too can be divided into different steps. Such bifurcation helps align different activities towards a progressive goal that ultimately culminates into successful project completion. Knowing more about these steps will also help team to understand their respective roles in the context of a given task and extract maximum quality.
                        </p>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <!-- WORK PROCESS START -->
                <div class="work-process">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 item no-margin first">
                            <div class="inner-content">
                                <i class="icon-Light-Bulb2"></i>

                                <span class="title">1. Idea</span>

                                <span class="dot"></span>
                            </div>
                            <!-- //.inner-content -->

                            <i class="icon-Arrow icon-Down-3"></i>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-2 col-md-2 item">
                            <div class="inner-content">
                                <i class="icon-Pencil"></i>

                                <span class="title">2. Sketch</span>
                            </div>
                            <!-- //.inner-content -->

                            <i class="icon-Arrow icon-Up-3"></i>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-2 col-md-2 item no-margin">
                            <div class="inner-content">
                                <i class="icon-Monitor-2"></i>

                                <span class="title">3. Design</span>
                            </div>
                            <!-- //.inner-content -->

                            <i class="icon-Arrow icon-Down-3"></i>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-2 col-md-2 item">
                            <div class="inner-content">
                                <i class="icon-Coding"></i>

                                <span class="title">4. Develop</span>
                            </div>
                            <!-- //.inner-content -->

                            <i class="icon-Arrow icon-Up-3"></i>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-2 col-md-2 item no-margin">
                            <div class="inner-content">
                                <i class="icon-Bug"></i>

                                <span class="title">5. Test</span>
                            </div>
                            <!-- //.inner-content -->

                            <i class="icon-Arrow icon-Down-3"></i>
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-2 col-md-2 item last">
                            <div class="inner-content">
                                <i class="icon-Rocket"></i>

                                <span class="title">6. Launch</span>

                                <span class="dot"></span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //WORK PROCESS END -->

                <div class="row">
                    <div class="col-md-12">
                        <p class="text-grey text-justify">
                            Some steps may not applicable for certain tasks. It depends largely on the cost and time involved and the necessity.
                        </p>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //WORK PROCESS SECTION END -->


    <!-- CONTACT SECTION START -->
    <section id="contact" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Contact Me</h2>

                        <p class="section-subtitle">
                            Have a project you'd like to discuss?
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

						<?php //echo do_shortcode('[ninja_forms id=1]')?>

						<?php //echo do_shortcode('[contact-form-7 id="1796" title="Contact form 1"]');?>


                        <!-- CONTACT FORM START -->
                        <form action="<?php echo esc_url( home_url() ); ?>/wp-admin/admin-ajax.php" method="post" name="contact-form" id="contact-form" class="contact-form validate" role="form">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group input-group-lg">
                                                <input type="text" name="name" id="name" class="form-control required" placeholder="My Name is..." autocomplete="off">
                                            </div>
                                            <!-- //.input-group -->
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->

                                    <div class="form-group">
                                        <label>Services (not required) :</label>

                                        <div class="checkbox">
                                            <input type="checkbox" name="services[]" id="web-design" value="Web Design">

                                            <label for="web-design">Web Development</label>
                                        </div>
                                        <!-- //.checkbox -->

                                        <div class="checkbox">
                                            <input type="checkbox" name="services[]" id="branding" value="Branding">

                                            <label for="branding">Branding</label>
                                        </div>
                                        <!-- //.checkbox -->

                                        <div class="checkbox">
                                            <input type="checkbox" name="services[]" id="app-development" value="App Development">

                                            <label for="app-development">App Development</label>
                                        </div>
                                        <!-- //.checkbox -->

                                        <div class="checkbox">
                                            <input type="checkbox" name="services[]" id="consulting" value="Consulting">

                                            <label for="consulting">Consulting</label>
                                        </div>
                                        <!-- //.checkbox -->
                                    </div>
                                    <!-- //.form-group -->

                                    <div class="form-group">
                                        <label>Project Class (not required) :</label>

                                        <div class="radio">
                                            <input type="radio" name="project_class" id="small" value="Small ($1000 - $3,000)">

                                            <label for="small">Small ($500 - $1,000)</label>
                                        </div>
                                        <!-- //.radio -->

                                        <div class="radio">
                                            <input type="radio" name="project_class" id="medium" value="Medium (> $3,000 - $10,000)">

                                            <label for="medium">Medium (> $1,000 - $3,000)</label>
                                        </div>
                                        <!-- //.radio -->

                                        <div class="radio">
                                            <input type="radio" name="project_class" id="big" value="Big (> 10,000)">

                                            <label for="big">Big (> 3,000)</label>
                                        </div>
                                        <!-- //.radio -->
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-5 -->

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input type="email" name="email" id="email" class="form-control required email" placeholder="Please respond at..." autocomplete="off">
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->

                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <select name="subject" id="subject" class="select2 required" style="width: 100%">
                                                <option value="I have a project for Zakir">I have a project for Zakir</option>
                                                <option value="I am interested in an internship">I am interested in an internship</option>
                                                <option value="I would like to invite Zakir to an event">I would like to invite Zakir to an event</option>
                                                <option value="I just want to say Hi!">I just want to say Hi!</option>
                                            </select>
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->

                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <textarea name="message" id="message" class="form-control required" placeholder="I wanna talk about..."></textarea>
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-7 -->
                            </div>
                            <!-- //.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

	                                    <input type="hidden" name="action" value="sendEmail"/>

	                                    <?php wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field'); ?>

                                        <button id="submit" type="submit">Say Hello</button>
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->
                        </form>
                        <!-- //CONTACT FORM END -->

                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //CONTACT SECTION END -->




<?php get_footer()?>
