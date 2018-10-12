<?php get_header(); ?>
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area">
		<div id="preloader">
			<div class="spinner">
			  <div class="bounce1"></div>
			  <div class="bounce2"></div>
			  <div class="bounce3"></div>
			</div>
		</div>		
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="block wow fadeInUp" data-wow-delay=".3s" style="display:none;>		
								<!-- Slider -->
								<section class="cd-intro">
									<div class="caption-info">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logobig.png" class="animated bounceInUp" alt="logo">
										  <h1 class="animated bounceInLeft">Web & App in progress</h1>
											<p class="wow fadeInUp animated" data-wow-delay=".6s" >
												<small> by <span class="celeste"><b>LUCIO TICALI</b></span> SVILUPPATORE SEO SPECIALIST</small>
											</p>
										  <div class="primi-button scroll animated fadeInUp">
											  <a href="#works" class="btn btn-default smooth-scroll"  data-wow-delay=".9s" href="#works" data-section="#works" >
												<i class="fa fa-flask"></i>Last Works
											  </a> 
											  <a href="#contatti" class="btn btn-default smooth-scroll"data-wow-delay=".9s"data-section="#contatti">
												<i class="fa fa-paper-plane-o"></i>Contatti
											 </a>
										  </div>
									</div>
								<!--<div class="page-scroll">
									<a href="#about" data-section="#about" class="btn btn-circle top-white smooth-scroll">
										<i class=" fa fa-angle-down"></i>
									</a>
								</div>-->
									</section> <!-- cd-intro -->
									<!-- /.slider -->
								</div>
							</div>
						</div>
					</div>
				</div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Slider Section about
            ================================================== -->
            <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Hallo!</h2>
                    <h3 class="section-subheading text-muted">Conosciamoci meglio!</h3>
					<hr class="line"></hr>
                </div>
            </div>
			<div class="wow fadeIn" data-wow-duration="2.5s">
				<div class="row text-center">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-android fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary" style="z-index:-1;"></i>
							<img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/author/lucio.png">
						</span>
					</div>
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-key fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-lg-12 text-center">
						<div class="regency">Developer web marketer</div>
					</div>	
				</div>
			</div>
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1 text-center description">
						<p class="text-muted">Mi chiamo Lucio Ticali, sono uno sviluppatore web & app per mobile. Realizzo siti web fondamentalmente in wordpress, realizzo gestionali in laravel ed app hibride per mobile ios e android. Sono un seo specialist e certificatore Adwords. Insomma ho tutte le competenze necessarie per far fronte alle richieste di medie e grandi aziende alle prese con un mercato multimediale sempre in continua evoluzione!</p>
						<h3 class="main-title"></h3>
						<div class="text-center">
							<a class="more-link"href="http://www.freewebsolution.it/wp-content/uploads/2014/05/CvEuropeoItaliano1.pdf"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Curriculum Vitae</a>
							<a class="more-link"href="http://www.freewebsolution.it/wp-content/uploads/2014/05/CvEuropeoItaliano1.pdf"><i class="fa fa-linkedin-square" aria-hidden="true"></i>Curriculum linkedin</a>
						</div>
				</div>
              </div>
            </div>
                </div>
            </section> <!-- /#about -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works clearfix grid">
					<figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/1.jpg" alt="casaallevacche">
						<figcaption>
							<h2>C.alleVacche</h2>
							<p>Sito web realizzato in wordpress,php,jquery.<br>
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">View more</a></p>						
						</figcaption>
					</figure>
					 <figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/2.jpg" alt="img01">
						<figcaption>
							<h2>Metal</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#" data-gallery="">View more</a></p>            
						</figcaption>
					</figure>
					 <figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/3.jpg" alt="centocanti">
						<figcaption>
							<h2>Centocanti</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">View more</a></p>	          
						</figcaption>
					</figure>
					 <figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/4.jpg" alt="img01">
						<figcaption>
							<h2>Fancyking</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">View more</a></p>	           
						</figcaption>
					</figure>
					 <figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/5.jpg" alt="fanciking">
						<figcaption>
							<h2>Typers</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#">View more</a></p>            
						</figcaption>
					</figure>
					 
					 <figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/6.jpg" alt="img01">
						<figcaption>
							<h2>TuscanFood</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">View more</a></p>	          
						</figcaption>
					</figure>
					<figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/8.jpg" alt="img01">
						<figcaption>
							<h2>Marco</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#">View more</a></p>            
						</figcaption>
					</figure>
					<figure class="effect-oscar  wowload fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/7.jpg" alt="i cavalieri">
						<figcaption>
							<h2>I cavalieri</h2>
							<p>Sito web realizzato in wordpress,php,jquery<br>
							<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">View more</a></p>	           
						</figcaption>
					</figure>
            </section> <!-- #works -->
            <!--
            ==================================================
            Servizi Section Start
            ================================================== -->
 	<section id="servizi"><!--servizi-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Servizi</h2>
                    <h3 class="section-subheading text-muted">Fai decollare la tua attivit&agrave;!</h3>
					<hr class="line"></hr>
                </div>
            </div>
			<div class="row text-center">
				<div class="wow fadeIn" data-wow-duration="2.5s">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-android fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">Developer</h4>
						<p class="text-muted">Sviluppo di applicazioni web dinamiche,sviluppo gestionali,sviluppo applicazioni java ed applicazioni per mobile.</p>
					</div>
					</div>
					<div class="wow fadeIn" data-wow-duration="2.5s">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">Consulente adwords</h4>
						<p class="text-muted">Ottimizzazione ed indicizzazione immediata del sito grazie ad una campagna adwords studiata per ogni tipo di esigenza.</p>
					</div>
					</div>
					<div class="wow fadeIn" data-wow-duration="2.5s">
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa fa-key fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="service-heading">Consulente Seo</h4>
						<p class="text-muted">Ottimizzazione dei siti per una corretta e buona indicizzazione SEO, per essere sempre i primi e non farsi trovare impreparati.</p>
					</div>
					
					</div>				
			</div>
				<div class="skills wow fadeInUp animated" style="visibility: visible;">
		          	<div class="col-md-3">
			            <div class="percentage easyPieChart" data-percent="90" data-delay="100" style="width: 165px; height: 165px; line-height: 165px;"><span>90</span>%<canvas width="165" height="165"></canvas><canvas width="165" height="165"></canvas></div>
			            <small>App</small> 
		       		</div>
		          	<div class="col-md-3">
			            <div class="percentage easyPieChart" data-percent="92" style="width: 165px; height: 165px; line-height: 165px;"><span>92</span>%<canvas width="165" height="165"></canvas><canvas width="165" height="165"></canvas></div>
			            <small>Php Mysql</small> 
		       		</div>
		          	<div class="col-md-3">
			            <div class="percentage easyPieChart" data-percent="85" style="width: 165px; height: 165px; line-height: 165px;"><span>85</span>%<canvas width="165" height="165"></canvas><canvas width="165" height="165"></canvas></div>
			            <small>Wordpress</small> 
		        	</div>
		          	<div class="col-md-3">
			            <div class="percentage easyPieChart" data-percent="93" style="width: 165px; height: 165px; line-height: 165px;"><span>93</span>%<canvas width="165" height="165"></canvas><canvas width="165" height="165"></canvas></div>
			            <small>Seo</small> 
		        	</div>
	        	</div>
        </div>
		
	</section><!--./servizi--> 
	
	<!-- section blog-->
	<section id="blog">
    	<div class="container">
    		<div class="row">
		   	 	<div class="col-md-12">
		   	 		<div class="text-center heading">
			    		<h2 class="title">Blog</h2>
						<h3 class="section-subheading text-muted">Leggi le ultime dal mio blog</h3>
						<hr class="line"></hr>
			    	</div>
		  		</div>

	   	 		<!--Post start-->
	   	 		<div class="col-md-12">
	   	 			<div class="row">
		<?php /*query*/ 
		$query = new WP_Query( 'posts_per_page=3&offset=0' );
		  /*inizio loop*/
		  if ( $query->have_posts() ) : while ( $query-> have_posts() ) : $query->the_post();
		  ?>
	   	 				<div class="col-md-4 fadeIn animated" style="visibility: visible; margin-bottom:30px;max-width:600px;margin:0 auto;">
							<div class="media recent-post">
							<div class="post_img">
							<?php
   							if ( has_post_thumbnail() ) 
   							{
								the_post_thumbnail('single',array('class' => 'img-responsive'));
							}
							?>
								<div class="info">
									<div class="author">
										<?php the_author_posts_link(); ?>
									</div>
								</div>
							</div>
									<div class="blog-date">
										<span class="date"><?php the_time('d'); ?>
											<span><?php the_time('M'); ?></span>
										</span>
									</div>
									<div class="media-body post-body" style='top:-25px !important;'>
										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
							</div><!-- end media -->
	   	 				</div><!--/ end col-sm-6 -->
				<?php endwhile; ?>
                <?php endif; ?>
				<?php wp_reset_query (); ?>	
	   	 			</div><!--/ Row end -->
	   	 		</div><!--/ Post end-->

	   	 		
    		</div><!--/ row end-->
    	</div><!--/ Container end-->
		
    </section><!--/blog-->
                            
            <!--
            ==================================================
            Contatti
            ================================================== -->
            <section id="contatti">
                <div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="title">Contatti</h2>
							<h3 class="section-subheading text-muted">Contattami per una collaborazione o per un saluto!</h3>
							<hr class="line"></hr>
						</div>
					</div>
					  <div class="row wowload fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">      
						  <div class="col-sm-6 col-sm-offset-3 col-xs-12">
					<form id="contact-form" action="" name="contact-form" method="post">
						<div id="responde"></div>
							<input id="nome" name="nome" placeholder="Enter name" required="required" type="text"></br>
							<input id="email" name="email" placeholder="Enter email" required="required" type="email"></br>	
							<input id="oggetto" name="oggetto" placeholder="subject" required="required" type="text"><br/>	
							<textarea id="message" name="message" cols="33" rows="5" aria-invalid="false" placeholder="Message"></textarea>	
							<input type="checkbox" name="privacy" id="privacy" value="1" required="required"onclick="ControlloSubmit()" />
							 <small>Autorizzo ai sensi della <a href="http://www.freewebsolution.it/privacy/" target="_blank" title="leggi la nostra informativa" class="informativa_link"> legge 675/96 </a>il trattamento dei dati personali trasmessi.</small> 
							<button type="submit" class="btn btn-skin pull-right" id="button" name="invia"><i class="fa fa-paper-plane"></i> Send <span class="load"><i class="fa fa-refresh fa-spin"></i></span> </button>

					</form>							
						  </div>
					  </div>
					</div>
            </section>
		<?php get_footer();?>						
        </body>
    </html>
	  <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 casaallevacche-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2> Casa alle Vacche</h2>
                                <p class="item-intro text-muted">Agriturismo,Azienda Agricola presso San Gimignano(SI).</p>
                                <img class="img-centered" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/1.jpg" alt="img01">
                                <p>Casa Alle Vacche &egrave; un azienda agricola sita in un luogo tranquillo tra Certaldo(FI) e San Gimignano(SI),posto ideale per riposarsi e rigenerarsi senza rinunciare a visitare le bellezze della Toscana. </p>
								<p>
									<ul class="list-inline">
										<li>Realizzazione del tema ed implementazione in wordpress</li>
										<li>Realizzazione di vari plugin;</li>
									</ul>
									
								</p>
                                <p>
                                     <a href="http://www.casaallevacche.it/" target="_blank" title="casa alle vacche">Visita il sito.</a></p>
                                <ul class="list-inline">
                                    <li>Data realizzazione: Luglio 2014</li>
                                    <li>Cliente: Casa alle vacche</li>
                                    <li>Category: Web design - web development</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi progetto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3 il tuscan-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Tuscan food and wine</h2>
                                <p class="item-intro text-muted">Tuscan food and whine il sito della fattoria del basseto.</p>
                                <img class="img-centered" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/6.jpg">
                                <p>La fattoria del basseto si trova a Certaldo (FI) dove si possono degustare olio,vino ed altri prodotti tipici toscani. Si effettuano eventi quali matrimoni,sfilate, ecc... </p>
								<p>
									<ul class="list-inline">
										<li>Implementazione in wordpress</li>
										<li>Realizzazione di vari plugin;</li>
									</ul>
									
								</p>
                                <p>
                                     <a href="http://tuscanfoodandwine.com/" target="_blank" title="tuscan food and whine">Visita il sito.</a></p>
                                <ul class="list-inline">
                                    <li>Data realizzazione: marzo 2016</li>
                                    <li>Cliente: Fattoria del Basseto</li>
                                    <li>Category: Web design - web development</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi progetto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 centocanti-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Ristorante Centocanti</h2>
                                <p class="item-intro text-muted">Il ristorante Centocanti  si trova a Firenze .</p>
                                 <img class="img-centered" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/3.jpg" alt="centocanti">
                                <p>La loro storia inizia nel 2006 dopo un esperienza di oltre trent’anni nella ristorazione, con l'idea chiara di proporre  piatti genuini sia dalla cucina che dalla pizzeria, con una scelta di carne e pesce di prima qualità, e una ricerca continua per offrire proposte giornaliere ai nostri clienti!</p>
								<p>
									<ul class="list-inline">
										<li> Implementazione in wordpress</li>
										<li>Realizzazione di vari plugin;</li>
									</ul>
									
								</p>
                                <p>
                                     <a href="http://www.ristorantecentocanti.it/" target="_blank" title="Ristorante Centocanti">Visita il sito.</a></p>
                                <ul class="list-inline">
                                    <li>Data realizzazione: settembre 2014</li>
                                    <li>Cliente: Ristorante Centocanti</li>
                                    <li>Category:Web development</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi progetto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 fancyking-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Ristorante pizzeria Fancy King</h2>
                                <p class="item-intro text-muted">La pizzeria Fancy King si trova a Prato.</p>
                                <img class="img-centered" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/4.jpg" alt="fancyking">
                                <p>Grazie al talento e all’esperienza del nostro chef propone piatti tipici Toscani, il tutto impreziosito da un “tocco di classe”… Inoltre per chi volesse gustare la tipica pizza italiana , avrà la possibilità di scegliere tra le tante varietà che il nostro menu consiglia… rigorosamente sfornate dal forno a legna.</p>
								<p>
									<ul class="list-inline">
										<li> Implementazione in wordpress</li>
										<li>Realizzazione di vari plugin;</li>
									</ul>
									
								</p>
                                <p>
                                     <a href="http://www.ristorantefancyking.it/" target="_blank" title="Ristorante Fancy King">Visita il sito.</a></p>
                                <ul class="list-inline">
                                    <li>Data realizzazione: settembre 2016</li>
                                    <li>Cliente: Ristorante Pizzeria Fancy Kingi</li>
                                    <li>Category:Web development</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi progetto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 cavalieri-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Ristorante i Cavalieri</h2>
                                <p class="item-intro text-muted">Il Ristorante i Cavalieri si trova a Prato.</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/7.jpg" class=" image-centered" alt="i cavalieri">
                                <p>Tra i prodotti di qualità del ristorante trovate una ricca offerta, dalla pizza al pesce.
Per allietare le vostre serate il ristorante vi propone molti intrattenimenti settimanali. Musica dal vivo, Karaoke, latino americano e discoteca. Inoltre per i più piccoli non manca l’animazione e l’intrattenimento con Puntina che aiuterà le famiglie con i bambini a passare delle tranquille serate di divertimento.</p>
								<p>
									<ul class="list-inline">
										<li> Implementazione in wordpress</li>
										<li>Realizzazione di vari plugin;</li>
									</ul>
									
								</p>
                                <p>
                                     <a href="http://ristoranteicavalieri.it/" target="_blank" title="Ristorante i Cavalieri">Visita il sito.</a></p>
                                <ul class="list-inline">
                                    <li>Data realizzazione: giugno 2016</li>
                                    <li>Cliente: Ristorante Pizzeria Fancy Kingi</li>
                                    <li>Category:Web development</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi progetto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>