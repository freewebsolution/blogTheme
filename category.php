<?php get_header('category'); ?>
        <!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
			<div id="inner-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/bgfreeweb5.jpg" alt="" class="animated flipInX">
			</div>
            </section><!--/#Page header-->
            <section id="blog-full-width">
                <div class="container content">
				<h1>Blog</h1>
				<div class="breadcrumbs">
					<?php create_breadcrumbs(); ?>
		        </div>
                    <div class="row">
                        <div class="col-md-8">
						<!-- START LOOP -->
							<?php get_template_part( 'loop', 'category' );?>	
                        </div>
						<?php get_sidebar();?>	
                    </div>
				<!-- START NAVIGATION -->
					<div id="pagenavi">
							<?php
								//wp_pagenavi();
							?>
					</div>
                    </section>
					<?php get_footer();?>		
        </body>
    </html>