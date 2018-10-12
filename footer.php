          <!-- ==================================================
            Footer Section Start
            ================================================== -->
			<section class="footer text-center spacer">
				<div class ="container">
					<p class="wowload flipInX animated" style="visibility: visible; animation-name: flipInX;">
						<a href="https://www.facebook.com/Freewebsolution-332634060090090/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
						<a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
						<a href="https://www.linkedin.com/in/luciano-ticali-1a303550/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
						<a href="https://plus.google.com/+lucioticali" target="_blank"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
					</p>
					<p>&copy;Copyright 2010-2017 - Freewebsolution. All rights reserved.<a href="http://www.freewebsolution.it/privacy/">Privacy</a>-<a href="http://www.freewebsolution.it/cookie-policy/">Informativa cookies</a></p>
				</div>
				<?php wp_footer(); ?>
			</section> <!-- /#footer -->
			<span class="smooth-scroll"><a class="backtop smooth-scroll" href="#top" data-section="#top"><i class="fa fa-chevron-up"></i></a></span><!--scroll top-->
			
    <div class="search-modal modal fade" id="search" tabindex="-1" role="dialog" aria-hidden="true"><!--search modal-->
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
							<form method="get" action="<?php echo home_url( '/' ); ?>">
								<input type="text" value="" id="s" name="s" placeholder="Search..." class="" autocomplete="off">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--./search modal-->